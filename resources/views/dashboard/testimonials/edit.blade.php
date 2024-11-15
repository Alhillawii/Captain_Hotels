@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Edit Testimonial</h1>
    <form action="{{ route('testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea name="Description" class="form-control" rows="3" required>{{ $testimonial->Description }}</textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($testimonial->image)
                <img src="{{ asset($testimonial->image) }}" style="width: 100px; height: 100px;" alt="Image">
            @endif
        </div>

        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Update</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
