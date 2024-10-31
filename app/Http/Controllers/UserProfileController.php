<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class UserProfileController extends Controller
{
    public function edit(User $user)
    {
$user=User::findOrFail(Auth::id())  ;

        return view('landing.profile.userprofile', compact('user'));
    }

  

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'address' => 'nullable|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'Image' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);
    
        // Handle image upload
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/Image/';
            $file->move(public_path($path), $filename);
    
            // Delete old image
            if (File::exists(public_path($user->Image))) {
                File::delete(public_path($user->Image));
            }
    
            $user->update(['Image' => $path . $filename]);
        }
    
        // Update other fields
        $user->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);
    
        return redirect()->route('profile.edit')->with('success', 'User updated successfully.');
    }
    
}