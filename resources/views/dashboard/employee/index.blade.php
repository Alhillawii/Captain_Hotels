@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Employees</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary border-0" style="background-color: #16325B;">Add Employee</a>

    @if (session('success'))
    <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Position</th>
                <th>Job Specific</th>
                <th>Employment Date</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // var_dump($employees[0])
             ?>
            @foreach ($employees as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->FullName }}</td>
                <td>{{ $user->employee->Emp_position }}</td>
                <td>{{ $user->employee->job_specific }}</td>
                <td>{{ $user->employee->employment_date }}</td>
                <td>{{ $user->Email }}</td>

                <td>
                    <a href="{{ route('employees.show', $user->id) }}" class="btn" title="View">
                        <i class="fas fa-eye" style="color: #17a2b8;"></i>
                    </a>

                    <a href="{{ route('employees.edit', $user->id) }}" class="btn" title="Edit">
                        <i class="fas fa-edit" style="color: #ffc107;"></i>
                    </a>

                    <form action="{{ route('employees.destroy', $user->id) }}" method="POST" class="d-inline delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <a href="javascript:void(0);" class="btn delete-btn" title="Delete">
                            <i class="fas fa-trash" style="color: red;"></i>
                        </a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const form = this.closest('.delete-form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This action cannot be undone!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });

        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 3000);
        }
    });
</script>
@endsection
