@extends('landing.include.first')

@section('style')
<link rel="stylesheet" href="{{ asset('land/css/user.css') }}">
@endsection

<title>Captain's Hotel</title>
    <link rel="icon" type="image/png" href="{{ asset('dash/img/logocap.png') }}">


<div class="container-xl px-4 mt-4">

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    @if($user->Image)
                    <img src="{{ asset($user->Image) }}" alt="Profile Image" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%; border: 2px solid #ccc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    @else
                        <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                    @endif
                    <br>
                    <span class="font-weight-bold">{{ $user->name }}</span>
                    <br>
                        <span class="font-weight-bold">{{ $user->Address }}</span>
                        <br>
                        <span class="font-weight-bold">{{ $user->mobile }}</span>
                        <br>

                        <span class="text-black-50">{{ $user->email }}</span>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Your Name</label>
                            <input class="form-control @error('name') is-invalid @enderror"
                                   id="inputUsername"
                                   name="name"
                                   type="text"
                                   placeholder="Enter your name"
                                   value="{{ old('name', $user->name) }}"
                                   required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control @error('email') is-invalid @enderror"
                                   id="inputEmailAddress"
                                   name="email"
                                   type="email"
                                   placeholder="Enter your email address"
                                   value="{{ old('email', $user->email) }}"
                                   required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control @error('mobile') is-invalid @enderror"
                                       id="inputPhone"
                                       name="mobile"
                                       type="text"
                                       placeholder="Enter your phone number"
                                       value="{{ old('mobile', $user->mobile) }}"
                                       required>
                                @error('mobile')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPassword">New Password</label>
                                <input class="form-control @error('password') is-invalid @enderror"
                                       id="inputPassword"
                                       name="password"
                                       type="password"
                                       placeholder="Enter new password (optional)">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPasswordConfirmation">Confirm New Password</label>
                                <input class="form-control"
                                       id="inputPasswordConfirmation"
                                       name="password_confirmation"
                                       type="password"
                                       placeholder="Confirm your new password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputImage">Profile Image</label>
                            <input class="form-control @error('image') is-invalid @enderror"
                                   id="inputImage"
                                   name="image"
                                   type="file"
                                   accept="image/*">
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if($user->image)
                                <div class="mt-2">
                                    <img src="{{ asset($user->image) }}" alt="Current Profile" class="img-thumbnail" style="max-width: 100px;">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn" style="background-color: #16325B; color: white;" type="submit">
                                <i class="fas fa-save me-1"></i> Save changes
                            </button>
                            <a href="{{ url('/landpage') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
