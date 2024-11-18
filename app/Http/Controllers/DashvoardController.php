<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class DashvoardController extends Controller
{

    public function dashboard() {
        $room = Room::all(); 
        $users = User::all();
        $booking = Booking::all();
        $contact = Contact::all();

        return view('dashboard.include.dash', compact('room', 'users' , 'booking' , 'contact'));
    }
    
}
