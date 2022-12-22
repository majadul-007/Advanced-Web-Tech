<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingAPIController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\ProfileAPIController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/myprofile',[ProfileAPIController::class,'MyProfile']);
Route::post('/myprofile/update/{id}',[ProfileAPIController::class,'UpdateProfile']);

Route::get('/booking/list',[BookingAPIController::class,'BookingList']);
Route::post('/booking/create',[BookingAPIController::class,'add']);
Route::post('/booking/delete/{id}',[BookingAPIController::class,'delete']);
Route::post('/booking/update/{id}',[BookingAPIController::class,'UpdateBooking']);

