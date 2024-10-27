@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Add Booking</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="room_id">Room</label>
            <select name="room_id" class="form-control" required>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->Roomtype }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in">Check-In Date</label>
            <input type="date" name="check_in" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="check_out">Check-Out Date</label>
            <input type="date" name="check_out" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Submit</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
