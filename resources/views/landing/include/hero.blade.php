<section class="home-slider owl-carousel">
   <div class="slider-item" style="background-image:url(land/images/camp.png);">
     <div class="overlay"></div>
     <div class="container">
       <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-12 ftco-animate text-center">
           <div class="text mb-5 pb-3">
             <h1 class="mb-3">Enjoy A Luxury Experience</h1>
             <h2>Join With Us</h2>
           </div>
           <!-- Include book form -->
           <div class="container booking-form-wrapper">
           <div class="row">
    <div class="col-lg-12">
        <!-- Authentication Check -->
        @auth
            <!-- Display validation errors if any -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('bookings.store') }}" method="POST" class="booking-form">
                @csrf
                <div class="row">
                    <!-- Check-in Date -->
                    <div class="col-md-3 d-flex">
                        <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                            <div class="wrap">
                                <label style="color: #16325B;">Check-in Date</label>
                                <input type="date" name="Start_date" class="form-control" placeholder="Check-in date" required value="{{ old('Start_date') }}">
                            </div>
                        </div>
                    </div>
                    <!-- Check-out Date -->
                    <div class="col-md-3 d-flex">
                        <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                            <div class="wrap">
                                <label style="color: #16325B;">Check-out Date</label>
                                <input type="date" name="End_date" class="form-control" placeholder="Check-out date" required value="{{ old('End_date') }}">
                            </div>
                        </div>
                    </div>
                    <!-- Room Selection -->
                    <div class="col-md d-flex">
                        <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                            <div class="wrap">
                                <label for="room_id" style="color: #16325B;">Room</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="room_id" id="room_id" class="form-control" required>
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}" {{ old('room_id') == $room->id ? 'selected' : '' }}>
                                                    {{ $room->Roomtype }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="col-md d-flex">
                        <input type="submit" value="Submit Booking" class="btn btn-primary py-3 px-4 align-self-stretch" style="background-color: #16325B; color: white;">
                    </div>
                </div>
            </form>
        @else
            <!-- Not Logged In -->
            <div class="alert alert-warning">
                <strong>Please log in to make a booking.</strong>
                <a href="{{ route('login') }}" class="btn btn-primary mt-3">Login</a>
            </div>
        @endauth
    </div>
</div>

           </div>
       </div>
     </div>
   </div>
   <script>document.querySelector('form').addEventListener('submit', function (e) {
    const checkIn = document.querySelector('input[name="check_in"]').value;
    const checkOut = document.querySelector('input[name="check_out"]').value;

    if (!checkIn || !checkOut) {
        e.preventDefault(); // Prevent form submission
        alert('Please select both check-in and check-out dates.');
    } else if (new Date(checkOut) <= new Date(checkIn)) {
        e.preventDefault();
        alert('Check-out date must be after the check-in date.');
    }
});
</script>
</section>
