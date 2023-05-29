<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
// use App\Http\Mail;
 use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title'=>'Mail from Surfside Media',
            'body'=>'This is for testing mail using gmail.'
        ];
        Mail::to("krishnaathu221@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
