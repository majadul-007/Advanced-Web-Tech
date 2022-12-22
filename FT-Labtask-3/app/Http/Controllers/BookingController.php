<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Traveluser;

class BookingController extends Controller
{
    //


   
    public function bookingPackage(){
        
        return view("bookingpage.bookingform");
    }

    public function bookingSubmitted(Request $request){

        $validate = $request ->validate([
            'name'=>'required|string|regex:/(^([a-zA-z]+)(\d+)?$)/u|min:3',
            'email' => 'required|email|max:255|regex:/(.*)@gmail\.com/i',
            
            "phone" =>"required|regex:/(01)[0-9]{9}/"

        ],
        [
        // 'name.required' => 'Name is must be 3 characters long, Can contain number',
        // 'email.required' => "Email Must be valid",
        // 'password.required' => 'Must be 8 characters long.One lowercase letter, one upper case and must contain one digit',
        // "phn.required" => "plz enter your Phone number",
           
        // "address.required"=> "Enter Your Current Address"
        "name.required"=>"please put your name",
        "email.required" =>"The Email must be a valid email address",
        
        "phone.required" => "Please enter your phn number",
       
        
            
        ] 
        );


        $bookings = new Booking();
        $bookings->traveluserid = $request->traveluserid;
        $bookings->name = $request->name;
        $bookings->email = $request->email;
        $bookings->phone = $request->phone;
        
        $bookings->destination = $request ->destination;
        $bookings->members = $request ->members;
        $bookings->days = $request ->days;

       
        
        $bookings -> save();
       
        

        return redirect()->route("usershomepage");


        

    }

    public function orderUpdate(Request $request){
        $userorders = Booking::where('id', $request->id)->first();

        return view('bookingpage.bookingupdate')->with('userorder', $userorders);

    }

    public function orderSubmitted(Request $request){
        $userorders = Booking::where('id', $request->id)->first();
        
        $userorders->name = $request->name;
        $userorders->email = $request->email;
        $userorders->phone = $request->phone;
        
        $userorders->destination = $request ->destination;
        $userorders->members = $request ->members;
        $userorders->days = $request ->days;

       
        
        $userorders -> save();

        return redirect('myorders');


    }


    public function ordersList(){
        $userorders = Booking::all();
        return view('bookingpage.bookinglist')->with('userorders', $userorders);   

    }

    public function  orderCancel(Request $request){

        $userorders = Booking::where("id",$request->id)->first();
        $userorders -> delete();
        return redirect()->route("myorders");


    }

    //update
    public function orderUser(){

        //Eloquent

        $bookings = Booking::where('traveluserid', 10)->first();
        return $bookings->assignedUser();
    }
}
