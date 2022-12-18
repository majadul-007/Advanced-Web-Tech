<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersLoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/homepage', function () {
//     return view('homepage');
// });
Route::get('/about', function () {

    return view('about');
});

Route::get('/about', [PagesController::class, 'aboutPage'])->name('about');
Route::get('/services', [PagesController::class, 'servicePage'])->name('services');
Route::get('/contactus', [PagesController::class, 'contactPage'])->name('contactus');

Route::get('/usershomepage', [UsersController::class, 'usersHomepage'])->name('usershomepage');
Route::get('/userregistration', [UsersController::class, 'userRegistration'])->name('userregistration');
// Route::get('/usercreate',[UsersController::class,"usercreate"])->name("usercreate");
Route::post('/userregistration', [UsersController::class, "userSubmitted"])->name("userregistrationsubmit");

Route::get('/userlogin', [UsersLoginController::class, "userLogin"])->name("userlogin");
Route::post('/userlogin', [UsersLoginController::class, "loginSubmit"])->name("userloginsubmit");


Route::get('/logout', [UsersLoginController::class, 'userLogout'])->name('logout');
Route::get('/userpanel', [UsersController::class, 'userPanel'])->name('userpanel')->middleware('checkuser');

Route::get('/myprofileinfo', [UsersController::class, 'userList'])->name('myprofileinfo')->middleware('checkuser');

Route::get('/myprofileedit/{id}', [UsersController::class, 'userProfileEdit'])->name('myprofileedit')->middleware('checkuser');

Route::post('/myprofileedit', [UsersController::class, 'profileEditSubmitted'])->name('myprofileedit')->middleware('checkuser');
// Route::get('/myprofileedit/{id}', [UsersController::class, 'userProfileEdit'])->name('myprofileedit');

Route::get('/myprofiledelete/{id}', [UsersController::class, 'userProfileDelete'])->name('myprofiledelte')->middleware('checkuser');


// last update

Route::get('/user/orders/{id}', [UsersController::class, 'userOrders'])->name('allorders');
Route::get('/orders', [BookingController::class, 'orderUser'])->name('orders');



//Booking



Route::get('/book', [BookingController::class, 'bookingPackage'])->name('book')->middleware('checkuser');
Route::post('/book', [BookingController::class, 'bookingSubmitted'])->name('booknow')->middleware('checkuser');
Route::get('/myorders', [BookingController::class, 'ordersList'])->name('myorders')->middleware('checkuser');

Route::get('/myorderupdate/{id}', [BookingController::class, 'orderUpdate'])->name('myorderupdate')->middleware('checkuser');

Route::post('/myorderupdate', [BookingController::class, 'orderSubmitted'])->name('myorderupdate')->middleware('checkuser');

Route::get('/myordercancel/{id}', [BookingController::class, 'orderCancel'])->name('myordercancel')->middleware('checkuser');


//sending Mail

Route::get('/user/sendmail', [MailController::class, 'sendMail']);









