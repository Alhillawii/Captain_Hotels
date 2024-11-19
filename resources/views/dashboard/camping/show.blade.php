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
            <p><strong>Name:</strong> {{ $camping->name }}</p>
            <p><strong>Email:</strong> {{ $camping->email }}</p>
            <p><strong>Phone:</strong> {{ $camping->phone }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('campings.index') }}" class="btn btn-secondary">Back</a>
           
        </div>
    </div>
</div>
@endsection
