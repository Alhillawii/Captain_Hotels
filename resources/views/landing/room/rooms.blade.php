@include('landing.include.first')
@include('landing.include.nav')

<!-- Hero Section -->
<div class="hero-wrap" style="background-image: url('land/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <h1 class="mb-4 bread">Rooms</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rooms Listing and Booking Section -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <!-- Room Listings -->
            <div class="col-lg-9">
                <div class="row">
                    @foreach($rooms as $room)
                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="room">
                                <!-- Room Image -->
                                <a href="{{ url('room-single/' . $room->id) }}" 
                                   class="img d-flex justify-content-center align-items-center" 
                                   style="background-image: url('{{ asset($room->Roomimage) }}');">
                                 
                                </a>
                                <!-- Room Details -->
                                <div class="text p-3 text-center">
                                    <h3 class="mb-3">
                                        <a href="{{ url('room-single/' . $room->id) }}">{{ $room->Roomtype }}</a>
                                    </h3>
                                    <p>
                                        <span class="price mr-2">{{ $room->price }}</span> 
                                        <span class="per">per night</span>
                                    </p>
                                    <hr>
                                    <p class="pt-1">
                                        <a href="{{ route('rooms.render', $room->id) }}" class="btn-custom">
                                            Read More <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Booking Form Sidebar -->
            <div class="col-lg-3 sidebar">
    <div class="sidebar-wrap bg-light ftco-animate">
        <h3 class="heading mb-4">Book Now</h3>

        <!-- If User Is Logged In -->
        @auth
            <!-- Success Message -->
            @if (session('success'))
                <div id="success-message" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Booking Form -->
            <form action="{{ route('bookings.store') }}" method="POST" class="booking-form">
                @csrf
                <div class="fields">
                    <!-- Check-in Date -->
                    <div class="form-group">
                        <input 
                            type="date" 
                            name="Start_date" 
                            id="checkin_date" 
                            class="form-control" 
                            placeholder="Check In Date" 
                            required 
                            value="{{ old('Start_date') }}">
                    </div>
                    <br>

                    <!-- Check-out Date -->
                    <div class="form-group">
                        <input 
                            type="date" 
                            name="End_date" 
                            id="checkout_date" 
                            class="form-control" 
                            placeholder="Check Out Date" 
                            required 
                            value="{{ old('End_date') }}">
                    </div>
                    <br>

                    <!-- Room Selection -->
                    <div class="form-group">
                        <div class="select-wrap one-third">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="room_id" id="room_id" class="form-control" required>
                                <option value="">Select Room Type</option>
                                @foreach ($rooms as $room)
                                    <option 
                                        value="{{ $room->id }}" 
                                        {{ old('room_id') == $room->id ? 'selected' : '' }}>
                                        {{ $room->Roomtype }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <input type="submit" value="Submit Booking" class="btn btn-primary py-3 px-5">
                    </div>
                </div>
            </form>
        @endauth

        <!-- If User Is Not Logged In -->
        @guest
            <p class="text-center">Please <a href="{{ route('login') }}">login</a> to make a booking.</p>
        @endguest
    </div>
</div>

        </div>
    </div>
</section>

@include('landing.include.footer')
@include('landing.include.loder')
@include('landing.include.last')
