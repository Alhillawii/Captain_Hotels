<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
   
    public function index(Request $request)
    {
        
        $users_query = Room::query();
        $search_param = $request->query('search');
        if (!empty($search_param)) {
            $users_query = Room::search($search_param);
        }
          $RoomFromDB = $users_query->get();
        return view('dashboard.room.index', ['rooms'=>$RoomFromDB]);
    
    }
    



   
    public function create()
    {
        return view('dashboard.room.create');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'Roomimage' => 'nullable|mimes:png,jpg,jpeg,webp',
            'Roomtype' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required',
            'Rate' => 'required|numeric',
        ]);

        if($request->has('Roomimage')){
           
            $file = $request->file('Roomimage');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/Roomimage/';
            $file->move($path, $filename);
        }

        Room::create([
            'Roomimage' => $path.$filename,
            'Roomtype' => $request->Roomtype,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'Rate' => $request->Rate,
        ]);
    
    
    
        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }
    

    public function show(Room $room)
{
    return view('dashboard.room.show', compact('room'));
}

public function show_userside($id)
{
    $room = Room::findOrFail($id);
    return view('landing.include.viewroom', compact('room'));
}

public function edit(Room $room)
{
    return view('dashboard.room.edit', compact('room'));
}


public function update(Request $request, Room $room)
{
    $request->validate([
        'Roomimage' => 'nullable',
        'Roomimage.*' => 'mimes:png,jpg,jpeg,webp',
        'Roomtype' => 'required',
        'price' => 'required',
        'status' => 'required',
        'description' => 'required',
        'Rate' => 'required|numeric',
    ]);

    if($request->has('Roomimage')){
           
        $file = $request->file('Roomimage');
        $extension = $file->getClientOriginalExtension();

        $filename = time().'.'.$extension;

        $path = 'uploads/Roomimage/';
        $file->move($path, $filename);
    }

   

    $room->update([
            'Roomtype' => $request->Roomtype,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'Rate' => $request->Rate,
    ]);

    if (
        isset($path)) {
       $room->update([
         'Roomimage' => $path.$filename,
       ]);
     }

    return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
}

public function destroy(Room $room)
{
    $room->delete();
    return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
}
}
