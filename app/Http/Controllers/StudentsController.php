<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
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
    function find_Min_Max_Sum_Value(){
        $minValue = DB::table('students')->sum('studentid');
        // ->min('id');
        // ->min('firstname');
        // ->min('studentid');
        // ->max('id');
        // ->max('firstname');
        // ->sum('id');
        if($minValue){
            return "<h1> value from the DataBase table is: $minValue</h1>";
        }
        else{
            return "<h1>sorry i was unable to get the Value</h1>";
            // ->sum('firstname');
        }

    }
//inner join with the customers and the orders table
    function innerjoin(){
        $innerdata = DB::table('customers')
        ->join('orders','customers.customer_id','=','orders.customer_id')
        ->select('customers.*','orders.orderdate','orders.shipper_id')
        ->get();
        return $innerdata;
    }
//selection of specific field using the innerjoin
    function innerjoin2(){
        $data2 = DB::table('customers')
        ->join('orders',
        'customers.customer_id','=','orders.customer_id')
        ->select(
            'customers.contactname',
            'customers.address',
            'customers.city',
            'orders.orderdate',
            'orders.shipper_id',
            )
        ->get();
        if($data2){
            return dd($data2);
        }
        else
        {
            return "<h1>sorry i was unable to get the data</h1>";
        }
        
    }
    function innerJoinMultiple(){
        $users = DB::table('orders')
        ->join('customers', 'orders.customer_id', '=', 'customers.customer_id')
            ->join
            (
                'employees', 
                'orders.employee_id',
                 '=', 
                 'employees.employee_id'
            )
            ->select
            (
                'orders.*', 
                'customers.contactname',
                'customers.address',
                'employees.lastname',
                'employees.birthday'

            )
            ->get();

        if($users){
            dd($users);
        }
        else
        {
            return "sorry i was unable to get multiple tables";
        }
    }

    //LARAVEL LEFT JOIN 
    function leftjoins(){
        $mydata = DB::table('customers')
        ->leftjoin('orders', 'customers.customer_id','=','orders.customer_id')
        ->get();
        if($mydata){
            return json_encode($mydata);
        }
        else
        {
            return "sorry leftjoining was not successful";
        }
    }

    function rightjoins(){
        $mydata2 = DB::table('orders')
        ->rightJoin('orderdetails', 'orders.order_id','=','orderdetails.order_id')
        ->get();
        if($mydata2)
        {
            dd($mydata2);
        }
        else 
        {
            return "sorry i was unable to right join the tables";
        }
    }

    //crossJoin
    function getCrossJion(){
        $sizes = DB::table('customers')
            ->crossJoin('orders')
            ->get();

        if($sizes){
            dd($sizes);
        }
        else
        {
            return "sorry i was unable to cross join";
        }

    }

    //Advanced Join Clauses
    function joinAdvance1(){
        $ja = DB::table('shippers')
        ->join('orders',function(JoinClause $join){
            $join->on(
                'shippers.shipper_id',
                '=',
                'oders.shipper_id'
            );
        })
        ->get();
    }

    //advance join clause 2
    function joinAdvance2(){
       $ja2 = DB::table('customers')
        ->join('orders', function (JoinClause $join) {
            $join->on('customers.customer_id', '=', 'orders.customer_id')
                 ->where('orders.customer_id', '>', 5);
        })->get();

        //check for the server to see the command
        if($ja2){
            return dd($ja2);
        }
        else
        {
            return 'sorry i was unable to retrieve the record';
        }
    }
}
 