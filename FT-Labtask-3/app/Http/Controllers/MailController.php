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

    // public function sendMail(){
        
    //     $testMailData = [
    //         'title' => 'Test Email From AllPHPTricks.com',
    //         'body' => 'This is the body of test email.'
    //     ];

    //     Mail::to('tusarhaque12@gmail.com')->send(new MailNotify($testMailData));

    //     dd('Success! Email has been sent successfully.');
    //     }
        

        

        public function contactMail(){

            return view("email.emailform");
        }
        
        public function contactMailSubmitted(Request $request){
         

            $testMailData = ["name" => $request->name, "email" => $request->email, "phone" => $request->phone, "message" => $request->message];
        
        Mail::to('customercare@abc.com')->send(new MailNotify($testMailData));



        dd('Success! Email has been sent successfully.');
            // return view("email.emailform");
        }
    }

