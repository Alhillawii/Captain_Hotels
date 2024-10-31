<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class OurroomController extends Controller
{
    public function index()
    {
        
        $rooms = Room::all();
        // @dd($rooms);
      
        
    return view('landing.layoutss.app', ['rooms' =>$rooms]); 
    }
}
