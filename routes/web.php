<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SummarizeController;
use App\Http\Controllers\ClientController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'employee'])->name('employee');
Route::get('/showemployee', [App\Http\Controllers\EmployeeController::class, 'showemployee'])->name('showemployee');
Route::post('employee',[App\Http\Controllers\EmployeeController::class,'store'])->name('addEmployeeImage');

Route::resource('products', ProductController::class);
Route::get('student',[App\Http\Controllers\StudentController::class,'index']);
Route::post('student',[App\Http\Controllers\StudentController::class,'store'])->name('addImage');
Route::get('studentPage',[App\Http\Controllers\StudentController::class,'display']);
Route::get('/editImage/{id}',[App\Http\Controllers\StudentController::class,'edit']);
Route::put('/updateImage/{id}',[App\Http\Controllers\StudentController::class,'update']);
Route::get('/deleteImage/{id}',[App\Http\Controllers\StudentController::class,'delete']);

Route::get('/home',[App\Http\Controllers\StudentController::class,'total']);
Route::get('/home',[App\Http\Controllers\EmployeeController::class,'totalEmployee']);

Route::get('/clients',[App\Http\Controllers\ClientController::class,'index'])->name('clients');
Route::post('/clients',[App\Http\Controllers\ClientController::class,'store']);





