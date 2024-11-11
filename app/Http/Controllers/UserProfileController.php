<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('landing.profile.userprofile', compact('user'));
    }

    // public function update(Request $request)
    // {
    //     $user = Auth::user();

    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'gender' => 'required|in:Male,Female',
    //         'address' => 'nullable|string|max:255',
    //         'mobile' => 'required|string|max:15',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    //         'password' => 'nullable|string|min:8|confirmed',
    //         'Image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048',
    //     ]);

    //     $user->name = $request->input('name');
    //     $user->gender = $request->input('gender');
    //     $user->address = $request->input('address');
    //     $user->mobile = $request->input('mobile');
    //     $user->email = $request->input('email');

    //     if ($request->filled('password')) {
    //         $user->password = Hash::make($request->input('password'));
    //     }

    //     if ($request->hasFile('Image')) {
    //         // Handle file upload
    //         $path = $request->file('Image')->store('uploads/Image', 'public');
    //         $user->Image = 'storage/' . $path; // Store the relative path
    //     }

    //     $user->save(); // Save the updated user model

    //     return redirect()->route('profile.edit')->with('success', 'User updated successfully.');
    // }

    public function update(Request $request)
    {
        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255|unique:users,email,' . $user->id,
            'mobile'   => 'required|string|max:20',
            'password' => 'nullable|string|min:8|confirmed', // Add 'confirmed' if using password confirmation
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update user's basic information
        $user->name   = $validatedData['name'];
        $user->email  = $validatedData['email'];
        $user->mobile = $validatedData['mobile'];

        // If a new password is provided, hash and update it
        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        // Handle profile image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($user->image) {
                $oldImagePath = public_path($user->image);

                if (file_exists($oldImagePath)) {
                    @unlink($oldImagePath);
                }
            }

            // Handle the new image upload
            $image      = $request->file('image');
            $imageName  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/image');

            // Move the uploaded image to the designated folder
            $image->move($destinationPath, $imageName);

            // Update the user's image path relative to the public directory
            $user->image = 'uploads/image/' . $imageName;
        }


        $user->save();


        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
