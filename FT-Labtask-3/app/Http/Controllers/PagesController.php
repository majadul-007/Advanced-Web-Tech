<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function aboutPage(){
        return view('about');
    }
    public function servicePage(){
        return view('services');
    }
    public function contactPage(){
        return view('contact');
    }

    // public function myPanel(){
    //     return view("usersinclude.usersnavbar");
    // }
}
