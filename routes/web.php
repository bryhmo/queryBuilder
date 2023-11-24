<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student.com',[StudentsController::class,'getview']);
Route::get('payment.com',[StudentsController::class,'getpayment']);
Route::view('login','login');
Route::view('contact','contact');


//query buiders Route start
Route::get('db.com',[StudentsController::class,'getDataBaseUsers']);
Route::get('update.com',[StudentsController::class,'updateUserProfile']);
Route::get('insert.com',[StudentsController::class,'insertUsersRecord']);
Route::get('insertone.com',[StudentsController::class,'singleUserRecord']);
Route::get('delete.com',[StudentsController::class,'deleteUser']);
//end laravel query builder


//larave aggregate begin
Route::get('count.com',[StudentsController::class,'gettotalUser']);
Route::get('average.com',[StudentsController::class,'findAverage']);
Route::get('min.com',[StudentsController::class,'find_Min_Max_Sum_Value']);


//Joins in laravel
//route for the inner joins
Route::get('getinner.com',[StudentsController::class,'innerjoin']);
Route::get('getinner2.com',[StudentsController::class,'innerjoin2']);
Route::get('joininnermultiple.com',[StudentsController::class,'innerJoinMultiple']);
