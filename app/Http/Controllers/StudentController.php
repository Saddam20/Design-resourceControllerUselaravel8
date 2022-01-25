<?php

namespace App\Http\Controllers;
use App\Models\StudentModel;
use App\Models\Product;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public $total;
    public function index()
    {
        return view('students.student');
     }


    public function store(Request $request){
        $student = new StudentModel();
        $student->name=$request->input('name');
        $student->email=$request->input('email');
        $student->phone=$request->input('phone');
        $student->age=$request->input('age');
        $student->address=$request->input('address');

        if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $fileName = time().'.'.$extension ;
           $file->move('uploads/studentFile/',$fileName);
           $student->image = $fileName;
        }else{
            return $request;
            $student->image='';
        }
        $student->save();

       return view('students.student')->with('students.student',$student);

    }

    public function display(Request $request){
           
        $students=StudentModel::all();
        return view('students.studentForm')->with('students',$students);
    }

    public function edit($id){

        $students=StudentModel::find($id);
        return view('students.studentupdateform')->with('students',$students);;

    }


    public function update(Request $request,$id){

        $students =StudentModel::find($id);
        $students->name=$request->input('name');
        $students->email=$request->input('email');
        $students->phone=$request->input('phone');
        $students->age=$request->input('age');
        $students->address=$request->input('address');

        if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $fileName = time().'.'.$extension ;
           $file->move('uploads/studentFile/',$fileName);
           $students->image = $fileName;
        }
        $students->save();
       return redirect('students.studentupdateform')->with('students.studentupdateform',$students);

    }

    public function delete(Request $request,$id){
        $students =StudentModel::find($request->id);
        $students->delete();
         return redirect('studentForm')->with('studentForm',$students);
    }
    public function sumarize(){
       // $students =StudentModel::count($request->id);
       // return view('home',['students'=>$students]);

    }
    public function total(){
    $total=StudentModel::count();
        //return $total;
return view('home',["total"=>$total]);
    }

}
