@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Add Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->FullName }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->Email }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Emp_position">Position</label>
            <input type="text" name="Emp_position" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="job_specific">Job Specific</label>
            <input type="text" name="job_specific" class="form-control" required> <!-- Changed to job_specific -->
        </div>

        <div class="form-group">
            <label for="employment_date">Employment Date</label>
            <input type="date" name="employment_date" class="form-control" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary border-0" style="background-color: #16325B;">Submit</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div> 
@endsection
