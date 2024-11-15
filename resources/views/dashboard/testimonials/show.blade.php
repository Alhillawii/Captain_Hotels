@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Testimonial Details</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Image:</strong></p>
            <img src="{{ asset( $testimonial->image) }}" alt="Testimonial Image" style="max-width: 100px; max-height:100px;"/> 
            
            <p><strong>Full Name:</strong> {{ $testimonial->name }}</p>
            <p><strong>Description:</strong> {{ $testimonial->Description }}</p>
        </div>
    </div>

    <br>
    <a href="{{ route('testimonials.edit', $testimonial) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
