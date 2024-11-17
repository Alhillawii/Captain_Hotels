<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CampingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashvoardController;
// use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OurroomController;
use App\Http\Controllers\RoomRenderController;
use App\Http\Controllers\ShowRoomController;
use App\Http\Controllers\TestimonialController;


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

Route::get('/landpage',  [OurroomController::class, 'index'])->name('roomss.index');
Route::get('/landpage1',  [OurroomController::class, 'show'])->name('roomss.show');
Route::get('/profileuser', function () {
    return view('landing.profile.userprofile');
});
Route::get('/camping', function () {
    return view('landing.include.aboutus');
})->name('camp.form');
// Route::get('/room', function () {
//     return view('landing.include.viewroom');
// });
// Route::get('/room/{id}', ShowRoomController::class)->name('rooms.render');
// Route::get('/room/{id}', [RoomRenderController::class, 'show'])->name('rooms.render');

// Route::get('/viewroom/{id}', [RoomController::class, 'show'])->name('viewroom');
Route::get('/room/{id}',[ShowRoomController::class, 'showRoom'])->name('rooms.render');


Route::get('/contact', function () {
    return view('landing.include.contact'); 
});
Route::get('/room', function () {
    return view('landing.room.rooms'); 
});
Route::get('/book', function () {
    return view('landing.include.bookform'); 
});
Route::get('/campform', function () {
    return view('booking.camping'); 
});
Route::get('/rest', function () {
    return view('landing.include.restaurant');
});
///-------------------------------------------- users ---------------------------------////
Route::resource('users', UserController::class);
///-------------------------------------------- Camping ---------------------------------////
Route::resource('campings', CampingController::class);
///-------------------------------------------- Rooms ---------------------------------////
Route::resource('rooms', RoomController::class);
///-------------------------------------------- Contact ---------------------------------////
Route::resource('contacts', ContactController::class);
///-------------------------------------------- Booking ---------------------------------////
Route::resource('bookings', BookingController::class);
///-------------------------------------------- profileuser ---------------------------------////
Route::resource('testimonials', TestimonialController::class);



Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');

Route::get('/', [DashvoardController::class, 'dashboard'])->name('dashboard')->middleware(['auth','Manager']);
















// Route::get('/', function () {
//     return view('dashboard.include.dash');
// })->middleware(['auth','Manager']);;

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth']);
