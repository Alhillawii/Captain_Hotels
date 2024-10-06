@extends('dashboard.layout.master')



@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
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
            <label for="Address">Address</label>
            <input type="text" name="Address" class="form-control" value="{{ $user->Address }}">
        </div>
        <div class="form-group">
            <label for="Image">Image URL</label>
            <input type="text" name="Image" class="form-control" value="{{ $user->Image }}">
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
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>

</div>
@endsection