@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Employee Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Full Name: {{ $employee->First_Name }} {{ $employee->Last_Name }}</h5>
            <p class="card-text"><strong>Position:</strong> {{ $employee->Emp_position }}</p>
            <p class="card-text"><strong>Age:</strong> {{ $employee->Age }}</p>
            <p class="card-text"><strong>Job-Specific:</strong> {{ $employee->{'job-specific'} }}</p>
            <p class="card-text"><strong>Employment Date:</strong> {{ $employee->employment_date }}</p>
        </div>
    </div>

    <br>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to Employees</a>
</div>
@endsection