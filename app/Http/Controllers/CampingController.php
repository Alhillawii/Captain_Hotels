<?php

namespace App\Http\Controllers;

use App\Models\Camping;
use Illuminate\Http\Request;

class CampingController extends Controller
{
    public function index()
    {
        $campings = Camping::all();
        // dd($campings);
        return view('dashboard.camping.index', compact('campings'));
    }
    

  
    public function create()
    {
        return view('dashboard.camping.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'number_of_persons' => 'required|integer',
            'Camp_img' =>  'nullable|mimes:png,jpg,jpeg,webp',
            'camp_days' => 'required|integer',
        ]);

        if($request->has('Camp_img')){
           
            $file = $request->file('Camp_img');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/Camp_img/';
            $file->move($path, $filename);
        }
 
        Camping::create([
            'number_of_persons' => $request->number_of_persons,
            'Camp_img' => $path.$filename,
            'camp_days' => $request->camp_days,
        ]);
        // Camping::create($request->all());

        return redirect()->route('campings.index')->with('success', 'Camping created successfully.');
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
            'Camp_img' => 'nullable',
            'Camp_img.*' => 'mimes:png,jpg,jpeg,webp',
            'camp_days' => 'required|integer',
        ]);

        if($request->has('Camp_img')){
           
            $file = $request->file('Camp_img');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/Camp_img/';
            $file->move($path, $filename);

            // if(File::exists(path: $user->Image)){
            //     File::delete($user->Image);

            // }
        }


        // $camping->update($request->all());
        $camping->update([
            'number_of_persons' => $request->number_of_persons,
            'camp_days' => $request->camp_days,
        ]);

        if (
            isset($path)) {
           $camping->update([
             'Camp_img' => $path.$filename,
           ]);
         }

        return redirect()->route('campings.index')->with('success', 'Camping updated successfully.');
    }

    
    public function destroy(Camping $camping)
    {
        $camping->delete();

        return redirect()->route('campings.index')->with('success', 'Camping deleted successfully.');
    }
}
