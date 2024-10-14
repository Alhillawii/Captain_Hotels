<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    
    public function index(Request $request)
    {
        $users_query = User::query();
      $search_param = $request->query('search');
      if (!empty($search_param)) {
          $users_query = User::search($search_param);
      }
        $UsersFromDB = $users_query->get();

        return view('dashboard.users.index', ['users'=>$UsersFromDB]);
    }

    
    public function create()
    {
        return view('dashboard.users.create');
    }

    
    public function store(Request $request)
    {
        //  return dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'Gender' => 'required|in:Male,Female',
            'Address' => 'nullable|string|max:255',
            'Image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'mobile' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'age' => 'nullable|integer',
            'Role' => 'required|string',
        ]);


        if($request->has('Image')){

            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/Image/';
            $file->move($path, $filename);
        }

        User::create([
            'name' => $request->name,
            'Gender' => $request->Gender,
            'Address' => $request->Address,
            'Image' => $path.$filename,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'age' => $request->age,
            'Role' => $request->Role,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    
    public function show(User $user)
    {
        return view('dashboard.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

  

    public function update(Request $request, User $user)
    {

        
        $request->validate([
            'name' => 'required|string|max:255',
            'Gender' => 'required|in:Male,Female',
            'Address' => 'nullable|string|max:255', 
            'Image' => 'nullable',
            'Image.*' => 'mimes:png,jpg,jpeg,webp',
            'mobile' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,Email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'age' => 'nullable|integer',
            'Role' => 'required'
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
            'Gender' => $request->Gender,
            'Address' => $request->Address,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'age' => $request->age,
            'Role' => $request->Role,
        ]);

        if (
           isset($path)) {
          $user->update([
            'Image' => $path.$filename,
          ]);
        }

       

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }


    public function destroy(User $user)
    {
        // if (File::exists($user->Image)) {
        //     File::delete($user->Image);
        // }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}