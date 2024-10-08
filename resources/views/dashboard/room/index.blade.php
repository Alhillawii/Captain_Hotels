@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Rooms</h1>
    <a href="{{ route('rooms.create') }}" class="btn btn-primary border-0" style="background-color: #16325B;">Add Room</a>

    @if (session('success'))
    <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Room Type</th>
                <th>Price</th>
                <th>Status</th>
                <th>Rate</th>
                <th>Room Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->Roomtype }}</td>
                <td>{{ $room->price }}</td>
                <td>{{ $room->status ? 'Available' : 'Occupied' }}</td>
                <td>{{ $room->Rate }}</td>
                <td>
                    @if ($room->Roomimage)
                        <img src="{{ asset($room->Roomimage) }}" style="width: 50px; height: 50px;" alt="Room Image"/>
                    @else
                        No image
                    @endif
                </td>
                <td>
                    <a href="{{ route('rooms.show', $room->id) }}" class="btn" title="View">
                        <i class="fas fa-eye" style="color: #17a2b8;"></i>
                    </a>
                    
                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn" title="Edit">
                        <i class="fas fa-edit" style="color: #ffc107;"></i>
                    </a>

                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline delete-form" style="display:inline;">
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
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You are about to delete this room. This action cannot be undone!',
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
