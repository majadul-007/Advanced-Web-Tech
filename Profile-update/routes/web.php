<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

// Studet Routes

Route::get('/studentslist', [StudentController::class, 'studentList'])->name('studentslist');
Route::get('/studentEdit/{id}/{name}', [StudentController::class, 'studentEdit'])->name('studentEdit');
Route::post('/studentEdit', [StudentController::class, 'studentEditSubmitted'])->name('studentEdit');

// Route::get('/studentcreate', [StudentController::class, 'studentCreate'])->name('studentcreate');
 
// Route::post('/studentCreate', [StudentController::class, 'studentSubmitted'])->name('studentCreate');

Route::get('/studentcreate',[studentcontroller::class,"studentcreate"])->name("studentcreate");

Route::post('/studentcreate',[studentcontroller::class,"studentcreatesumitted"])->name("studentcreate");



