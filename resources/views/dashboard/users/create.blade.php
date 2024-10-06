@extends('dashboard.layout.master')


@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="FullName">Full Name</label>
            <input type="text" name="FullName" class="form-control" required>
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
            <label for="Image">Image URL</label>
            <input type="text" name="Image" class="form-control">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="Password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Submit</button>

    </form>
</div>
@endsection