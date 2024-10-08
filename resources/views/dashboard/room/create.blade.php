@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Add Room</h1>
    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Roomtype">Room Type</label>
            <input type="text" name="Roomtype" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="1">Available</option>
                <option value="0">Occupied</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
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
        </div>
      
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Submit</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
