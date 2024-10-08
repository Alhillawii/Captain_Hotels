@extends('dashboard.layout.master')



@section('content')
<div class="container">
    <h1>User Details</h1>

    <div class="card">
        <div class="card-body">
        <p><strong>Image:</strong></p>
<img src="{{ asset($user->Image) }}" alt="User Image" style="max-width: 100px; max-height:100px;"/> 
            <p><strong>Full Name:</strong> {{ $user->FullName }}</p>
            <p><strong>Gender:</strong> {{ $user->Gender }}</p>
            <p><strong>Address:</strong> {{ $user->Address }}</p>
            <p><strong>Mobile:</strong> {{ $user->mobile }}</p>
            <p><strong>Email:</strong> {{ $user->Email }}</p>
            <p><strong>Age:</strong> {{ $user->age }}</p>
          <p><strong>Role:</strong> 
    @if ($user->Role == 'Supervisor')
        <span class="badge bg-success">Supervisor</span>
    @elseif ($user->Role == 'User')
        <span class="badge bg-primary">User</span>
    @elseif ($user->Role == 'Manager')
        <span class="badge bg-warning">Manager</span>
    @endif
</p>

        </div>
    </div>

    <br>
    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection