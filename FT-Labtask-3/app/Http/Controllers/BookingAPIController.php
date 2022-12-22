<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingAPIController extends Controller
{
    //

    public function BookingList(){
        $userorders = Booking::all();
        return $userorders;

    }

    public function Add(Request $request){

        

        $bookings = new Booking();
        $bookings->traveluserid = $request->traveluserid;
        $bookings->name = $request->name;
        $bookings->email = $request->email;
        $bookings->phone = $request->phone;
        
        $bookings->destination = $request ->destination;
        $bookings->members = $request ->members;
        $bookings->days = $request ->days;

       
        
        $bookings -> save();
       
        

        return $bookings;


        

    }

    public function update(Request $request){
        $userorders = Booking::where('id', $request->id)->first();
        
        $userorders->name = $request->name;
        $userorders->email = $request->email;
        $userorders->phone = $request->phone;
        
        $userorders->destination = $request ->destination;
        $userorders->members = $request ->members;
        $userorders->days = $request ->days;

       
        
        $userorders -> save();

        return $userorders;


    }
    public function UpdateBooking(Request $request){

        $userorders = Booking::where('id', $request->id)->first();
        
        $userorders->name = $request->name;
        $userorders->email = $request->email;
        $userorders->phone = $request->phone;
        
        $userorders->destination = $request ->destination;
        $userorders->members = $request ->members;
        $userorders->days = $request ->days;

       
        
        $userorders -> save();

        return $userorders;







    }


    public function  delete(Request $request){

        $userorders = Booking::where("id",$request->id)->first();
        $userorders -> delete();
        return $userorders;


    }
}
