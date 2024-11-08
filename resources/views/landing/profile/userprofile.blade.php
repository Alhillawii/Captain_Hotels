@extends('landing.include.first')

@section('style')
<link rel="stylesheet" href="{{ asset('land/css/user.css') }}">
@endsection

<div class="container-xl px-4 mt-4">
   
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    @if($user->Image)
                        <img src="{{ asset($user->Image) }}" alt="Profile Image">
                    @else
                        <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Default Image">
                    @endif
                    <span class="font-weight-bold">{{ $user->name }}</span>
                    <br>
                        <span class="font-weight-bold">{{ $user->ddress }}</span>
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
 

                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Your Name</label>
                            <input class="form-control" id="inputUsername" name="name" type="text" placeholder="Enter your name" value="{{ $user->name }}" required>
                        </div>
                       
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter your email address" value="{{ $user->email }}" required>
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" name="mobile" type="text" placeholder="Enter your phone number" value="{{ $user->mobile }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPassword">Confirm Password</label>
                                <input class="form-control" id="inputPassword" name="password_confirmation" type="password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputImage">Upload New Image</label>
                            <input class="form-control" id="inputImage" name="Image" type="file" accept=".png,.jpg,.jpeg,.webp">
                        </div>

                        <button class="btn" style="background-color: #16325B; color: white;" type="submit">Save changes</button>
                        <a href="{{ url('/landpage') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
