@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Add Testimonial</h1>
    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea name="Description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Submit</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
