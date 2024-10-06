<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of users
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('dashboard.users.create');
    }

    // Store a newly created user in storage
    public function store(Request $request)
    {
        $request->validate([
            'FullName' => 'required|string|max:255',
            'Gender' => 'required|in:Male,Female',
            'Address' => 'nullable|string|max:255',
            'Image' => 'nullable|string|max:255',
            'mobile' => 'required|string|max:15',
            'Email' => 'required|string|email|max:255|unique:users',
            'Password' => 'required|string|min:8',
            'age' => 'nullable|integer',
        ]);

        User::create([
            'FullName' => $request->FullName,
            'Gender' => $request->Gender,
            'Address' => $request->Address,
            'Image' => $request->Image,
            'mobile' => $request->mobile,
            'Email' => $request->Email,
            'Password' => bcrypt($request->Password),
            'age' => $request->age,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Display the specified user
    public function show(User $user)
    {
        return view('dashboard.users.show', compact('user'));
    }

    // Show the form for editing the specified user
    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    // Update the specified user in storage
    public function update(Request $request, User $user)
    {
        $request->validate([
            'FullName' => 'required|string|max:255',
            'Gender' => 'required|in:Male,Female',
            'Address' => 'nullable|string|max:255',
            'Image' => 'nullable|string|max:255',
            'mobile' => 'required|string|max:15',
            'Email' => 'required|string|email|max:255|unique:users,Email,' . $user->id,
            'Password' => 'nullable|string|min:8',
            'age' => 'nullable|integer',
        ]);

        $user->update([
            'FullName' => $request->FullName,
            'Gender' => $request->Gender,
            'Address' => $request->Address,
            'Image' => $request->Image,
            'mobile' => $request->mobile,
            'Email' => $request->Email,
            'Password' => $request->Password ? bcrypt($request->Password) : $user->Password,
            'age' => $request->age,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Remove the specified user from storage
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
