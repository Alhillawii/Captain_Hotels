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
        
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="name" name="name" class="form-control"  value="{{ $camping->name }}" required >
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control"  value="{{ $camping->email }}" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="phone" name="phone" class="form-control"  value="{{ $camping->phone }}" required>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Update</button>
        <a href="{{ route('campings.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
