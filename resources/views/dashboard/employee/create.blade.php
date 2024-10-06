@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Create New Employee</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="First_Name">First Name</label>
            <input type="text" name="First_Name" class="form-control" value="{{ old('First_Name') }}" required>
        </div>

        <div class="form-group">
            <label for="Last_Name">Last Name</label>
            <input type="text" name="Last_Name" class="form-control" value="{{ old('Last_Name') }}" required>
        </div>

        <div class="form-group">
            <label for="Emp_position">Position</label>
            <input type="text" name="Emp_position" class="form-control" value="{{ old('Emp_position') }}" required>
        </div>

        <div class="form-group">
            <label for="Age">Age</label>
            <input type="number" name="Age" class="form-control" value="{{ old('Age') }}" required>
        </div>

        <div class="form-group">
            <label for="job-specific">Job-Specific</label>
            <input type="text" name="job-specific" class="form-control" value="{{ old('job-specific') }}" required>
        </div>

        <div class="form-group">
            <label for="employment_date">Employment Date</label>
            <input type="date" name="employment_date" class="form-control" value="{{ old('employment_date') }}" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Create</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
