<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\error;

class StudentsController extends Controller
{
    //return of view 
    function getview(){
        // echo $name;
        $student =['faith','promise','tressure','hamza','ismail'];
        return view('home',['listofstudent'=>$student]); 
    }
    function getpayment(){

    }

    public function getDataBaseUsers()
    {
        $data = DB::table('students')->get();
        return $data;
    }

    public function updateUserProfile()
    {
        $data = DB::table('students')
        ->where('id',22)
        ->update(
            [
            'lastname'=>'oludelemi',
            'firstname'=>'mylincoln',
            'othername'=>'fiyinfolohun',
            'studentid'=>'LUC/FCSMM/DSE/06/123',
            'semester'=>'semester_1',
            'email'=>'olumide@gmail.com',
            'phone'=>'013227896',
            ]
            );
        return $data;
    }

    function insertUsersRecord(){
        $myUser = DB::table('students')
        ->insert([
            [
            'lastname'=>'oludelemi',
            'firstname'=>'mylincoln',
            'othername'=>'fiyinfolohun',
            'studentid'=>'LUC/FCSMM/DSE/06/123',
            'semester'=>'semester_1',
            'email'=>'olumide@gmail.com',
            'phone'=>'0133227896',
            ],
            [
            'lastname'=>'oludelemi',
            'firstname'=>'mylincoln',
            'othername'=>'fiyinfolohun',
            'studentid'=>'LUC/FCSMM/DSE/06/123',
            'semester'=>'semester_1',
            'email'=>'olumide@gmail.com',
            'phone'=>'0133227896',
            ],
            [
            'lastname'=>'oludelemi',
            'firstname'=>'mylincoln',
            'othername'=>'fiyinfolohun',
            'studentid'=>'LUC/FCSMM/DSE/06/123',
            'semester'=>'semester_1',
            'email'=>'olumide@gmail.com',
            'phone'=>'0133227896',

            ],
            [
            'lastname'=>'oludelemi',
            'firstname'=>'mylincoln',
            'othername'=>'fiyinfolohun',
            'studentid'=>'LUC/FCSMM/DSE/06/123',
            'semester'=>'semester_1',
            'email'=>'olumide@gmail.com',
            'phone'=>'0133227896',
            ],
            [
            'lastname'=>'oludelemi',
            'firstname'=>'mylincoln',
            'othername'=>'fiyinfolohun',
            'studentid'=>'LUC/FCSMM/DSE/06/123',
            'semester'=>'semester_1',
            'email'=>'olumide@gmail.com',
            'phone'=>'0133227896',
            ],
            [
            'lastname'=>'oludelemi',
            'firstname'=>'mylincoln',
            'othername'=>'fiyinfolohun',
            'studentid'=>'LUC/FCSMM/DSE/06/123',
            'semester'=>'semester_1',
            'email'=>'olumide@gmail.com',
            'phone'=>'0133227896',
            ],
         ]);
         if($myUser){
            return "the record has been inserted successful";
         }
    }
    function singleUserRecord(){
    $myUser = DB::table('students')->insert([
        'lastname'=>'abdullincoln',
        'firstname'=>'university',
        'othername'=>'alhamdulillah',
        'studentid'=>'LUC/FCSMM/DSE/06/004',
        'semester'=>'semester_1',
        'email'=>'olumide@gmail.com',
        'phone'=>'0133227896'
    ]);
    // return dd($myUser);
    if($myUser){
        return redirect('login');
    }
    }
    //deleting a user from the database
    function deleteUser(){
        $data = DB::table('students')
        ->where('id',140) 
        ->delete();
        if($data){
            return "the data has been deleted successfully";
        }
        else{
            return "something went wrong,try Again";
        }
    }


    // AGGREGATE SECTION

    //count users function
    function gettotalUser(){
        $countUsers = DB::table('employees')->count('id');
        if($countUsers){
            dd($countUsers);
        }
    }

    //finding an average max ,and sum of the users function

    function findAverage(){
        $averageFinder = DB::table('students')->avg('id');
        if($averageFinder){
            return "<h1>the average of all the DB records is : $averageFinder</h1>";
        }
        else{
            dd(error('something went wrong'));
        }
    }

    //finding the minimum value from the database table

}
 