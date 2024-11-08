<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class DashvoardController extends Controller
{
    $room = Room::all(); 
    $users = User::all();


    return view('dashboard.include.dash', compact('room', 'users'));
}
