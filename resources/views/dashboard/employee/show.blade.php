@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Employee Details</h1>

    <table class="table">
        <tr>
            <th>Full Name</th>
            <td>{{ $employee->user->FullName }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $employee->user->email }}</td>
        </tr>
        <tr>
            <th>Position</th>
            <td>{{ $employee->Emp_position }}</td>
        </tr>
        <tr>
            <th>Job Specific</th>
            <td>{{ $employee->job_specific }}</td>
        </tr>
        <tr>
            <th>Employment Date</th>
            <td>{{ $employee->employment_date }}</td>
        </tr>
    </table>

    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to Employee List</a>
</div>
@endsection
