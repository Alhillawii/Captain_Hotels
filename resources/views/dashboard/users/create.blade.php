@extends('dashboard.layout.master')


@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Gender">Gender</label>
            <select name="Gender" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" name="Address" class="form-control">
        </div>
        <div class="form-group">
            <label>Image URL</label>
            <input type="file" name="Image" class="form-control">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control">
        </div>
         <div class="form-group">
            <label for="Role">Role</label>
            <select name="Role" class="form-control" required>
                <option value="" disabled selected>Select Role</option>
                <option value="Supervisor">Supervisor</option>
                <option value="User">User</option>
                <option value="Manager">Manager</option>
                
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>

    </form>
</div>
@endsection