<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\customersMail;
use Illuminate\Support\Facades\Mail;

class Email2Controller extends Controller
{
    //
    public function sendMail(){
        $subject = "Test Subject";
        $body = "Test Message";


        Mail::to('webcodekingdom@gmail.com')->send(new customersMail($subject,$body));
    }
}
