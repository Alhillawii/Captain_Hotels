@extends('landing.include.first') 

@section('style')
<link rel="stylesheet" href="{{ asset('land/css/user.css') }}">
@endsection

@include('landing.include.nav') 

<div class="container rounded mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                @if($user->Image)
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset($user->Image) }}">
                @else
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                @endif
                <span class="font-weight-bold">{{ $user->name }}</span>
                <span class="text-black-50">{{ $user->email }}</span>
                <span></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="first name" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" placeholder="enter phone number" value="{{ $user->mobile }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Address</label>
                            <input type="text" class="form-control" name="Address" placeholder="enter address" value="{{ $user->Address }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email ID</label>
                            <input type="text" class="form-control" name="email" placeholder="enter email id" value="{{ $user->email }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email ID</label>
                            <input type="text" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Confirm Password</label>
                            <input type="text" class="form-control" name="password_confirmation" placeholder="password_confirmation">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="labels">Profile Image</label>
                        <input type="file" class="form-control" name="Image">
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
      
            </div>
        </div>
    </div>
</div>