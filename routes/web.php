<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CampingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/landpage', function () {
    return view('landing.layouts.app');
});
Route::get('/profileuser', function () {
    return view('landing.profile.userprofile');
});
Route::get('/aboutus', function () {
    return view('landing.include.aboutus');
});
Route::get('/viewroom', function () {
    return view('landing.include.viewroom');
});
Route::get('/contact', function () {
    return view('landing.include.contact');
});
Route::get('/rest', function () {
    return view('landing.include.restaurant');
});
///-------------------------------------------- users ---------------------------------////
Route::resource('users', UserController::class);
///-------------------------------------------- employee ---------------------------------////
Route::resource('employees', EmployeeController::class);
///-------------------------------------------- Camping ---------------------------------////
Route::resource('campings', CampingController::class);
///-------------------------------------------- Rooms ---------------------------------////
Route::resource('rooms', RoomController::class);
///-------------------------------------------- Contact ---------------------------------////
Route::resource('contacts', ContactController::class);
///-------------------------------------------- Booking ---------------------------------////
Route::resource('bookings', BookingController::class);
///-------------------------------------------- profileuser ---------------------------------////
Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');










Route::get('/', function () {
    return view('dashboard.include.dash');
})->middleware(['auth','Manager']);;

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth']);
