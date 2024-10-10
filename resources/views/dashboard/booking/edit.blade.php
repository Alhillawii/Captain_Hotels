@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Edit Booking</h1>
    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $booking->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->FullName }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="room_id">Room</label>
            <select name="room_id" class="form-control" required>
                @foreach ($rooms as $room)
                <option value="{{ $room->id }}" {{ $booking->room_id == $room->id ? 'selected' : '' }}>
                    {{ $room->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in">Check-In Date</label>
            <input type="date" name="check_in" class="form-control" value="{{ $booking->check_in }}" required>
        </div>
        <div class="form-group">
            <label for="check_out">Check-Out Date</label>
            <input type="date" name="check_out" class="form-control" value="{{ $booking->check_out }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="Pending" {{ $booking->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Confirmed" {{ $booking->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="Cancelled" {{ $booking->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Update</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
