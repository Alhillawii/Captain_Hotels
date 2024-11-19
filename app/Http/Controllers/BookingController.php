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
        // dd($users, $rooms);
    
        return view('dashboard.booking.create' , compact('users' , 'rooms'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Start_date' => 'required|date',
            'End_date' => 'required|date|after:Start_date', 
            'room_id' => 'nullable|exists:rooms,id', 
        ]);
    
      
        Booking::create([
            'Start_date' => $request->input('Start_date'),
            'End_date' => $request->input('End_date'),
            'user_id' => auth()->id(), 
            'room_id' => $request->input('room_id'), 
        ]);
    
        // Redirect with a success message
        return redirect()->route('boook.index')->with('success', 'Booking created successfully.');
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
            'room_id' => 'nullable|exists:rooms,id',
            'user_id' => 'nullable|exists:users,id',
            
        ]);

        $booking->update([
          'status' => $request->input('status')
        ]);
        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function updateStatus(Request $request, $id)
{
    $booking = Booking::findOrFail($id);
    $booking->status = $request->input('status');
    $booking->save();

    return redirect()->back()->with('success', 'Booking status updated successfully!');
}


    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}