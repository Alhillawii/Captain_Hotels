@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Room Details</h1>
    
    <div class="card">
        <div class="card-header">
            <h3>Room Info</h3>
        </div>
        <div class="card-body">
            <p><strong>Room Type:</strong> {{ $room->Roomtype }}</p>
            <p><strong>Price:</strong> {{ $room->price }}</p>
            <p><strong>Status:</strong> {{ $room->status ? 'Available' : 'Occupied' }}</p>
            <p><strong>Rate:</strong> {{ $room->Rate }}</p>
            <p><strong>Description:</strong> {{ $room->description }}</p>
            
            @if ($room->Roomimage)
                <p><strong>Room Image:</strong></p>
                <img src="{{ asset($room->Roomimage) }}" style="width: 150px; height: 150px;" alt="Room Image">
            @else
                <p><strong>Room Image:</strong> No Image Available</p>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
