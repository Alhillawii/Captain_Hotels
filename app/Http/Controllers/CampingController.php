<?php

namespace App\Http\Controllers;

use App\Models\Camping;
use Illuminate\Http\Request;

class CampingController extends Controller
{
    public function index(Request $request)
    {
        // $campings = Camping::all();
        // // dd($campings);
        // return view('dashboard.camping.index', compact('campings'));

        $campings_query = Camping::query();
        $search_param = $request->query('search');
        if (!empty($search_param)) {
            $campings_query = Camping::search($search_param);
        }
          $CampingsFromDB = $campings_query->get();
  
          return view('dashboard.camping.index', ['campings'=>$CampingsFromDB]);
    }
    

  
    public function create()
    {
        return view('dashboard.camping.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'number_of_persons' => 'required|integer',
            'camp_days' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Camping::create([
            'number_of_persons' => $request->number_of_persons,
            'camp_days' => $request->camp_days,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        // Camping::create($request->all());

        return redirect()->route('camp.form')->with('success', 'Camping created successfully.');
    }

   
    public function show(Camping $camping)
    {
        return view('dashboard.camping.show', compact('camping'));
    }

    
    public function edit(Camping $camping)
    {
        return view('dashboard.camping.edit', compact('camping'));
    }

    
    public function update(Request $request, Camping $camping)
    {
        $request->validate([
            'number_of_persons' => 'required|integer',
            'camp_days' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

 


        // $camping->update($request->all());
        $camping->update([
            'number_of_persons' => $request->number_of_persons,
            'camp_days' => $request->camp_days,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

     

        return redirect()->route('campings.index')->with('success', 'Camping updated successfully.');
    }

    
    public function destroy(Camping $camping)
    {
        $camping->delete();

        return redirect()->route('campings.index')->with('success', 'Camping deleted successfully.');
    }
}