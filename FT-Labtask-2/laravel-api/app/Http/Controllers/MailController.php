<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Http\Controllers\Exception;
use Exception as GlobalException;
use FFI\Exception as FFIException;
// use Mail;

class MailController extends Controller
{
    //

    public function sendMail(){
        // $data = [
        //     "subject"=>"Cambo Tutorial Mail",
        //     "body"=>"Hello friends, Welcome to Cambo Tutorial Mail Delivery!"
        //     ];
        //   // MailNotify class that is extend from Mailable class.
        //   try
        //   {
        //     Mail::to('nazrul8923@gmail.com')->send(new MailNotify($data));
        //     return response()->json(['Great! Successfully send in your mail']);
        //   }
        //   catch(GlobalException $e)
        //   {
        //     return response()->json(['Sorry! Please try again latter']);
        //   }
        $testMailData = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email.'
        ];

        Mail::to('tusarhaque12@gmail.com')->send(new MailNotify($testMailData));

        dd('Success! Email has been sent successfully.');
        } 
    }

