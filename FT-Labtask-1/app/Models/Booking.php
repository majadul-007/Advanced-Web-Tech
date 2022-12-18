<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function assignedUser(){

        return Traveluser::where('id', $this->traveluserid )->first();



    }
}
