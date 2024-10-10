@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Bookings</h1>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary border-0" style="background-color: #16325B;">Add Booking</a>

    @if (session('success'))
    <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Nationality</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->Start_date }}</td>
                <td>{{ $booking->End_date }}</td>
                <td>{{ $booking->nationality }}</td>
                <td>{{ $booking->status }}</td>
                <td>{{ $booking->payment_method }}</td>

                <td>
                    <a href="{{ route('bookings.show', $booking->id) }}" class="btn" title="View">
                        <i class="fas fa-eye" style="color: #17a2b8;"></i>
                    </a>

                    <a href="{{ route('bookings.edit', $booking->id) }}" class="btn" title="Edit">
                        <i class="fas fa-edit" style="color: #ffc107;"></i>
                    </a>

                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <a href="javascript:void(0);" class="btn delete-btn" title="Delete">
                            <i class="fas fa-trash" style="color: red;"></i>
                        </a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const form = this.closest('.delete-form');
                const bookingId = form.querySelector('.booking-id') ? form.querySelector('.booking-id').innerText : 'this booking'; // Get booking ID if available

                Swal.fire({
                    title: 'Are you sure?',
                    text: `You are about to delete booking #${bookingId}. This action cannot be undone!`,
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

        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 3000);
        }
    });
</script>

@endsection
