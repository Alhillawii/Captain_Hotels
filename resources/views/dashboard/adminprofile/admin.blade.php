@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/userprofile') }}">
                            <i class="fas fa-user"></i> My Profile
                        </a>
                    </li>
                    <!-- You can add more navigation items here -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/userrentals') }}">
                            <i class="fas fa-car"></i> User Car
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">{{ $User->FullName }}'s Profile</h1> <!-- Using FullName -->
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $User->FullName }}" required> <!-- Using FullName -->
                </div>

                <br>

                <!-- File input for uploading new image -->
                <div class="form-floating form-floating-outline mb-6">
                    <input type="file" name="image" class="form-control" id="image">
                    <label for="image" class="form-label">Upload new image</label>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $User->Email) }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password (leave blank to keep current password)</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </main>
    </div>
</div>
@endsection
