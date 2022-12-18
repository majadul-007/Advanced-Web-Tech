<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveluser;

class ProfileAPIController extends Controller
{
    //
    public function MyProfile(){
        // return view('pages.user.list'); 

        $myprofile = Traveluser::all();     

        return $myprofile;

    }

    public function UpdateProfile(Request $request){
        $traveluser = Traveluser::where('id', $request->id)->first();

        // $traveluser ->id = $request ->id;
        $traveluser ->name = $request ->name;
        
        $traveluser ->password = $request ->password;
        $traveluser ->email = $request ->email;
        $traveluser ->phone = $request ->phone;
        $traveluser ->address = $request ->address;
        $traveluser->save();

        return $traveluser;

    }
}
