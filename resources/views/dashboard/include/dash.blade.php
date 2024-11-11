@extends('dashboard.layout.master')
@section('title', 'Dashboard')

@section('content')
    <!-- Congratulations card -->
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="card-body text-nowrap">
                
                <h5 class="card-title mb-0 flex-wrap text-nowrap">Welcome, {{ Auth::user()->name }} 🎉
                <img src="{{ asset(Auth::user()->Image) }}" alt="Profile Image" width="100" height="100">
                </h5>
                <p class="text-primary mb-2">Admin ID: {{ Auth::user()->id }}</p>
                 
            </div>
          

        </div>
    </div>
    <!--/ Congratulations card -->

    <!-- Statistics -->
    <div class="col-lg-8">
        <div class="card h-100">
            <div class="card-header">
                <h5 class="card-title m-0">Statistics</h5>
            </div>
            <div class="card-body pt-lg-10">
                <div class="row g-6">
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="avatar">
                                <div class="avatar-initial bg-primary rounded shadow-xs">
                                    <i class="ri-hotel-line ri-24px"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">Rooms</p>
                                <h5 class="mb-0">{{ $room->count() }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="avatar">
                                <div class="avatar-initial bg-success rounded shadow-xs">
                                    <i class="ri-user-line ri-24px"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0">Users</p>
                                <h5 class="mb-0">{{ $users->count() }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="avatar">
                                <div class="avatar-initial bg-warning rounded shadow-xs">
                                    <i class="ri-test-tube-line ri-24px"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="avatar">
                                <div class="avatar-initial bg-info rounded shadow-xs">
                                    <i class="ri-money-dollar-circle-line ri-24px"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics -->

    <!-- Quick Stats Cards -->
    <div class="col-xl-4 col-md-6">
        <div class="row gy-6">
            <!-- Total Profit -->
            <div class="col-sm-6">
                <div class="card h-100">
                   
                    <div class="card-body">
                        <h6 class="text-left mb-0">Total Profit</h6>
                    </div>
                </div>
            </div>
            <!--/ Total Profit -->
            <!-- Total Users -->
            <div class="col-sm-6">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="avatar">
                            <div class="avatar-initial bg-secondary rounded-circle shadow-xs">
                                <i class="ri-user-line ri-24px"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-1">Total Users</h6>
                        <h4 class="mb-0">{{ $users->count() }}</h4>
                    </div>
                </div>
            </div>
            <!--/ Total Users -->
            <!-- Total Testimonials -->
            <div class="col-sm-6">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="avatar">
                            <div class="avatar-initial bg-primary rounded-circle shadow-xs">
                                <i class="ri-star-line ri-24px"></i>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!--/ Total Testimonials -->
        </div>
    </div>
    <!--/ Quick Stats Cards -->

@endsection
