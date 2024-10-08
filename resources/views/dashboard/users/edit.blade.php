@extends('dashboard.layout.master')



@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="FullName">Full Name</label>
            <input type="text" name="FullName" class="form-control" value="{{ $user->FullName }}" required>
        </div>
        <div class="form-group">
            <label for="Gender">Gender</label>
            <select name="Gender" class="form-control" required>
                <option value="Male" {{ $user->Gender === 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $user->Gender === 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Image URL</label>
            <input type="file" name="Image" class="form-control">
            @if($user->Image)
                <img src="{{ asset($user->Image) }}" style="width: 100px; height: 100px;" alt="Image">
            @endif
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" name="Address" class="form-control" value="{{ $user->Address }}">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" value="{{ $user->mobile }}" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" class="form-control" value="{{ $user->Email }}" required>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="Password" class="form-control" placeholder="Leave blank to keep current password">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="{{ $user->age }}">
        </div>
        <div class="form-group">
            <label for="Role">Role</label>
            <select name="Role" class="form-control"  required>
                <!-- <option value=""  disabled selected>Select Role</option> -->
                <option value="Supervisor" 
                @if($user->Role == "Supervisor")
                selected
                @endif
                >
                Supervisor</option>
                <option value="User"
                 @if($user->Role == "User") 
                 selected
                 @endif
                 >User</option>
                <option value="Manager" 
                @if($user->Role == "Manager") 
                selected
                @endif
                >Manager</option>
                <option value="Employee" 
                @if($user->Role == "Employee") 
                selected
                @endif
                >Employee</option>

            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>

</div>
@endsection