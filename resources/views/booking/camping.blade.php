<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('camp/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('camp/css/style.css') }}">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="{{ asset('camp/images/WhatsApp Image 2024-06-10 at 1.22.12 PM.jpeg') }}" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" action="{{ route('campings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2>Book Your Camping Spot!</h2>

                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" required />
                            <label for="name" class="form-label">Your Name</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" required />
                            <label for="email" class="form-label">Your Email</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" required />
                            <label for="phone" class="form-label">Your Phone Number</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="number" name="number_of_persons" id="number_of_persons" required />
                            <label for="number_of_persons" class="form-label">Number of Persons</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="number" name="camp_days" id="camp_days" required />
                            <label for="camp_days" class="form-label">Number of Camp Days</label>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="submit" id="submit" name="submit">Submit</button>
                            <a href="{{ url('camping') }}" class="vertify-booking">Back to Camping List</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (Session::get('success'))
    <div class="swal-overlay swal-overlay--show-modal" tabindex="-1">
        <div class="swal-modal">
            <div class="swal-icon swal-icon--success">
                <span class="swal-icon--success__line swal-icon--success__line--long"></span>
                <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
                <div class="swal-icon--success__ring"></div>
                <div class="swal-icon--success__hide-corners"></div>
            </div>
            <div class="swal-title">{{ Session::get('success') }}</div>
            <div class="swal-footer">
                <a href="{{ url('camping') }}" class="swal-button swal-button--confirm">OK</a>
            </div>
        </div>
    </div>
@endif  

    <!-- JS -->
    <script src="{{ asset('camp/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('camp/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
