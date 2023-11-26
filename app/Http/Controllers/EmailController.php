<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Mail;



class EmailController extends Controller
{
    //
    public function MailSender(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:25',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);

        /* $data = $request->input();
        return dd($data); */

        if($this->isOnline())
        {
            $mail_data =[
                'recipient'=>'webcodekingdom@gmail.com',
                'fromEmail'=>$request->email,
                'fromName'=>$request->name,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];
            Mail::send('email',$mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });

            return back()->with('success','Email has been sent successfully');
            // return '<h2 style="color:green">Connected</h2>';
        }
        else
        {
            return back()->with('error','error!!! No internet connection');
        }

    }


    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site,'r')){
            return true;
        }
        else
        {
            return false;
        }
    }
}
