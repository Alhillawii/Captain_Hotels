<?php

use App\Http\Controllers\CampingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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


Route::get('/', function () {
    return view('dashboard.include.dash');
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





