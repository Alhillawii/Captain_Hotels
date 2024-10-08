@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Edit Room</h1>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Roomtype">Room Type</label>
            <input type="text" name="Roomtype" class="form-control" value="{{ $room->Roomtype }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" value="{{ $room->price }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="1" {{ $room->status ? 'selected' : '' }}>Available</option>
                <option value="0" {{ !$room->status ? 'selected' : '' }}>Occupied</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $room->description }}</textarea>
        </div>

        <div class="form-group">
    <label for="Rate">Rate</label>
    <select name="Rate" class="form-control" required>
        <option value="5">★★★★★</option>
        <option value="4">★★★★☆</option>
        <option value="3">★★★☆☆</option>
        <option value="2">★★☆☆☆</option>
        <option value="1">★☆☆☆☆</option>
    </select>
</div>


        <div class="form-group">
            <label>Room Image</label>
            <input type="file" name="Roomimage" class="form-control">
            @if ($room->Roomimage)
                <img src="{{ asset($room->Roomimage) }}" style="width: 100px; height: 100px;" alt="Roomimage">
            @endif
        </div>
      
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Update</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
