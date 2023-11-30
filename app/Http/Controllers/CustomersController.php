<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Semester;

use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    //working with the route model biinding

    function routeBinding(Customer $key){
        return dd($key);
    }

    function getCustomersList(){
        $data = DB::table('customers')->get();
        if($data){
            dd($data);
        }
        else
            {
                return "sorry i was unable to fetch the data";
            }
    }

    //fetching from the second database table
    function getEmployeesRecord(){
        $data = DB::connection('mysql2')->table('semesters')->get();
        if($data){
            dd($data);
        }
        else
        {
            return "error i was unable to get the data";
        }
    }

    //fetching data from the database using model

    //first table
    public function getCustomers(){
        $data = Customer::all();
        dd($data);
    }
    //first table
    public function getSemester(){
        $data = Semester::all();
        return $data;
    }



}
