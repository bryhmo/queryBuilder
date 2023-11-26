<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Email2Controller;
use App\Http\Controllers\fluentStringsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\controllers\EmailController;

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

//WORKING WITH THE LARAVEL EMAIL
Route::view('contactmi','contactus')->name('contact.web');
Route::post('sendmail',[EmailController::class,'MailSender'])->name('send.email');
Route::view('myemail.com','email')->name('email.template');


Route::get('/', [Email2Controller::class,'sendMail']);
/* Route::get('/', function () {
    return view('welcome');
}); */

//lincolnSiwes
Route::view('website','web')->name('main');
Route::view('register.com','register');
Route::view('login.com','loginme');


//route model binding ::::: route
Route::get('bind.com/{key}',[CustomersController::class,'routeBinding']);
Route::get('bind.com/{key:customer_id}',[CustomersController::class,'routeBinding']);


//fluent string route
Route::get('after.com',[fluentStringsController::class,'after']);
Route::get('before.com',[fluentStringsController::class,'before']);


//students route
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

