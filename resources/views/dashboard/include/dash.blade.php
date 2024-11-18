@extends('dashboard.layout.master')
@section('title', 'Dashboard')

@section('content')
<link rel="stylesheet" href="{{asset ('dash/dash.css')}}">
    <!-- Congratulations card -->
    <div class="col-md-12 col-lg-4">
        <div class="card shadow-sm mb-4">
            <div class="card-body text-nowrap">
                <h5 class="card-title mb-0 d-flex align-items-center">
                    Welcome, {{ Auth::user()->name }} 🎉
                    <img src="{{ asset(Auth::user()->Image) }}" alt="Profile Image" class="rounded-circle ms-3" width="80" height="80">
                </h5>
                <p class="text-primary mb-2">Admin ID: {{ Auth::user()->id }}</p>
            </div>
        </div>
    </div>
    <!--/ Congratulations card -->

    <!-- Statistics -->
    <div class="col-lg-8">
        <div class="card h-100 shadow-sm mb-4">
            <div class="card-header">
                <h5 class="card-title m-0">Statistics</h5>
            </div>
            <div class="card-body pt-lg-5">
                <div class="row g-4">
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded shadow-sm">
                            <div class="avatar avatar-icon bg-primary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                                <i class="ri-hotel-line ri-24px"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">Rooms</p>
                                <h5 class="mb-0">{{ $room->count() }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded shadow-sm">
                            <div class="avatar avatar-icon bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                                <i class="ri-user-line ri-24px"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">Users</p>
                                <h5 class="mb-0">{{ $users->count() }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded shadow-sm">
                            <div class="avatar avatar-icon bg-warning text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                                <i class="ri-test-tube-line ri-24px"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">Contact</p>
                                <h5 class="mb-0">{{ $contact->count() }}</h5>                           
                             </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded shadow-sm">
                            <div class="avatar avatar-icon bg-info text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                                <i class="ri-money-dollar-circle-line ri-24px"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">Booking</p>
                                <h5 class="mb-0">{{ $booking->count() }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics -->

   
@endsection
