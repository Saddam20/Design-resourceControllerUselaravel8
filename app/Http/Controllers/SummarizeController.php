<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SummarizeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
public function Summarize(){
   // $users['users'] = DB::table('student_models')->count('id');
    //return view('home',$users);

   // return view('home',["users"=>$users]);
    //return view('home',compact(users));
}
public function totalProduct(){
    $totalProduct=Product::count();
return view('home',["totalProduct"=>$totalProduct]);
}
}
