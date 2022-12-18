<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveluser extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function assignedOrders(){

        return Booking::where('traveluserid', $this->id )->get();



    }
}
