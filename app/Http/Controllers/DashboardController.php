<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
{
    $rooms = Room::all();
    $users = User::all();
    // $testimonials = Testimonial::all();
   
    
    // Assuming you have a method to calculate total profit
    $totalProfit = $this->calculateTotalProfit();

    return view('dashboard.index', compact('rooms', 'users', 'testimonials', 'rentals', 'cars', 'totalProfit'));
}

}
