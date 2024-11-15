<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Display a listing of testimonials
    public function index(Request $request)
{
    $testimonials_query = Testimonials::query();
    $search_param = $request->query('search');
    if (!empty($search_param)) {
        $testimonials_query = Testimonials::search($search_param);
    }

    $testimonials = $testimonials_query->get(); // Use 'testimonials' here

    return view('dashboard.testimonials.index', compact('testimonials')); // Pass 'testimonials' to the view
}

    

    // Show the form for creating a new testimonial
    public function create()
    {
        return view('dashboard.testimonials.create');
    }

    // Store a newly created testimonial in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'Description' => 'required|string',
        ]);
    
        $filename = null;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/image/';
            $file->move($path, $filename);
        }
    
        Testimonials::create([
            'name' => $request->name,
            'image' => $filename ? $path.$filename : null,
            'Description' => $request->Description,
        ]);
    
        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    // Display the specified testimonial
    public function show(Testimonials $testimonial)
    {
        return view('dashboard.testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonials $testimonial)
    {
        return view('dashboard.testimonials.edit', compact('testimonial'));
    }


    public function update(Request $request, Testimonials $testimonial)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'Description' => 'required|string',
        ]);

        if($request->has('image')){
           
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/image/';
            $file->move($path, $filename);

            // if(File::exists(path: $user->Image)){
            //     File::delete($user->Image);

            // }
        }

        $testimonial->update([

 'name' => $request->name,
            
            'Description' => $request->Description,
        ]);

        if (
            isset($path)) {
           $testimonial->update([
             'image' => $path.$filename,
           ]);
         }


        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    // Remove the specified testimonial from storage
    public function destroy(Testimonials $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
