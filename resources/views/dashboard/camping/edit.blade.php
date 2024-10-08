@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Edit Camping</h1>
    <form action="{{ route('campings.update', $camping->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="number_of_persons">Number of Persons</label>
            <input type="number" name="number_of_persons" class="form-control" value="{{ $camping->number_of_persons }}" required>
        </div>
        
        <div class="form-group">
            <label for="camp_days">Camp Days</label>
            <input type="number" name="camp_days" class="form-control" value="{{ $camping->camp_days }}" required>
        </div>
        
        <div class="form-group">
            <label for="Camp_img">Camp Image</label>
            <input type="file" name="Camp_img" class="form-control">
            @if($camping->Camp_img)
                <img src="{{ asset($camping->Camp_img) }}" style="width: 100px; height: 100px;" alt="Camp Image">
            @endif
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Update</button>
        <a href="{{ route('campings.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
