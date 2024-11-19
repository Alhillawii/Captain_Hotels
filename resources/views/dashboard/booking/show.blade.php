@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Booking Details</h1>
    
    <div class="card">
        <div class="card-header">
            Booking ID: {{ $booking->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Booking Information</h5>
            
            <p class="card-text">
                <strong>User:</strong> {{ $booking->user->name }} <br>
                <strong>Room:</strong> {{ $booking->room->Roomtype }} <br>
                <strong>Check-In Date:</strong> {{ $booking->check_in }} <br>
                <strong>Check-Out Date:</strong> {{ $booking->check_out }} <br>
               
            </p>
            
           
            <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back to Bookings</a>
            
            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline delete-form">
                @csrf
                @method('DELETE')
                <a href="javascript:void(0);" class="btn btn-danger delete-btn" title="Delete">
                    Delete Booking
                </a>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.delete-btn').addEventListener('click', function(event) {
            event.preventDefault();
            const form = this.closest('.delete-form');
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection
