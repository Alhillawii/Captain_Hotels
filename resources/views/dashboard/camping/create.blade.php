@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Add Camping</h1>
    <form action="{{ route('campings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="number_of_persons">Number of Persons</label>
            <input type="number" name="number_of_persons" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="camp_days">Camp Days</label>
            <input type="number" name="camp_days" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Camp Image</label>
            <input type="file" name="Camp_img" class="form-control">
        </div>
      
        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Submit</button>
        <a href="{{ route('campings.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
