<?php

namespace App\Http\Controllers;
use App\Models\EmployeeModel;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function employee(){

        return view('employee.employee');
    }
    public function showemployee(){

        return view('employee.showemploy');
    }

    public function store(Request $request){
        $employee = new EmployeeModel();
        $employee->name=$request->input('name');
        $employee->email=$request->input('email');
        $employee->phone=$request->input('phone');
        $employee->description=$request->input('description');
        $employee->address=$request->input('address');

        if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $fileName = time().'.'.$extension ;
           $file->move('uploads/studentFile/',$fileName);
           $employee->image = $fileName;
        }else{
            return $request;
            $employee->image='';
        }
        $employee->save();
       return view('employee.employee')->with('employee.employee',$employee);
    }

    public function totalEmployee(){
        $total=EmployeeModel::count();
            //return $total;
    return view('home',["total"=>$total]);
        }
}
