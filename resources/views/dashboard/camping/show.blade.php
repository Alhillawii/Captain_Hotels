@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Camping Details</h1>
    
    <div class="card">
        <div class="card-header">
            <h3>Camping Info</h3>
        </div>
        <div class="card-body">
            <p><strong>Number of Persons:</strong> {{ $camping->number_of_persons }}</p>
            <p><strong>Camp Days:</strong> {{ $camping->camp_days }}</p>
            
            @if ($camping->Camp_img)
                <p><strong>Camp Image:</strong></p>
                <img src="{{ asset($camping->Camp_img) }}" style="width: 150px; height: 150px;" alt="Camp Image">
            @else
                <p><strong>Camp Image:</strong> No Image Available</p>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('campings.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('campings.edit', $camping->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
