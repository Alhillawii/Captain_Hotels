<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;


class ShowRoomController extends Controller
{


    public function showRoom($id)
    {
        $room = Room::findOrFail($id);
        return view('landing.include.viewroom', ['room' =>$room]);
    }
}
