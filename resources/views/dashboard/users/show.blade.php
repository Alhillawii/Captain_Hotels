@extends('dashboard.layout.master')



@section('content')
<div class="container">
    <h1>User Details</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Full Name:</strong> {{ $user->FullName }}</p>
            <p><strong>Gender:</strong> {{ $user->Gender }}</p>
            <p><strong>Address:</strong> {{ $user->Address }}</p>
            <p><strong>Mobile:</strong> {{ $user->mobile }}</p>
            <p><strong>Email:</strong> {{ $user->Email }}</p>
            <p><strong>Age:</strong> {{ $user->age }}</p>
        </div>
    </div>

    <br>
    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection