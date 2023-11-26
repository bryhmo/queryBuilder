<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    //working with the route model biinding

    function routeBinding(Customer $key){
        return dd($key);
    }
}
