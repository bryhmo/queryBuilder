<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function MailSender(Request $request){
        $request->validate([
            'name'=>'require',
            'email'=>'require|confirmed'
        ]);

    }
}
