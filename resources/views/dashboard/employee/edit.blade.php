@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Emp_position" class="form-label">Position</label>
            <input type="text" class="form-control" id="Emp_position" name="Emp_position" value="{{ $employee->Emp_position }}" >
        </div>

        <div class="form-group">
            <label for="job_specific">Job Specific</label>
            <input type="text" name="job_specific" class="form-control" value="{{ $employee->job_specific }}" >
        </div>

        <div class="mb-3">
            <label for="employment_date" class="form-label">Employment Date</label>
            <input type="date" class="form-control" id="employment_date" name="employment_date" value="{{ $employee->employment_date }}" >
        </div>

        <button type="submit" class="btn btn-primary">Update Employee</button>
    </form>
</div>
@endsection
