<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomRenderController extends Controller
{
    public function show($id) {
        $room = Room::findOrFail($id);
    
        return view('landing.include.viewroom', [
            'room' => $room,
        ]);
    }
    }

