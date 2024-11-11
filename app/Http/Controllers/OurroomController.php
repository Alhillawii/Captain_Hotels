<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class OurroomController extends Controller
{
    public function index()
    {
        
        $rooms = Room::all();
        
      
        
    return view('landing.layoutss.app', ['rooms' =>$rooms]); 
    }
}
