<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        // $bookings = Booking::all();
        // return view('dashboard.booking.index', compact('bookings'));
        $bookings_query = Booking::query();
        $search_param = $request->query('search');
        if (!empty($search_param)) {
            $bookings_query = Booking::search($search_param);
        }
          $bookingsFromDB = $bookings_query->get();
  
          return view('dashboard.booking.index', ['bookings'=>$bookingsFromDB]);
    }

    public function create()
    {
        $users = User::all();
        $rooms = Room::all();
    
        return view('dashboard.booking.create' , compact('users' , 'rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Start_date' => 'required|date',
            'End_date' => 'required|date',
            'nationality' => 'required|string|max:255',
            'identification_document' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'room_id' => 'nullable|exists:rooms,id',
            'camping_id' => 'nullable|exists:campings,id',
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date', 
            'check_out' => 'required|date|after:check_in', 
    
        ]);

        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    public function show(Booking $booking)
    {
        return view('dashboard.booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('dashboard.booking.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'Start_date' => 'required|date',
            'End_date' => 'required|date',
            'nationality' => 'required|string|max:255',
            'identification_document' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'room_id' => 'nullable|exists:rooms,id',
            'camping_id' => 'nullable|exists:campings,id',
        ]);

        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}