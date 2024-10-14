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
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'mobile' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        

        // dd($request);

        if($request->has('Image')){
           
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/Image/';
            $file->move($path, $filename);

            // if(File::exists(path: $user->Image)){
            //     File::delete($user->Image);

            // }
        }

        // return dd($path);
         

        

        $user->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        if (
           isset($path)) {
          $user->update([
            'Image' => $path.$filename,
          ]);
        }

       

        return redirect()->route('profileuser')->with('success', 'User updated successfully.');
    }

}
