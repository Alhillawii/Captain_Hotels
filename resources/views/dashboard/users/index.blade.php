@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary border-0" style="background-color: #16325B;">Add User</a>


    @if (session('success'))
    <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <img src="{{asset($user->Image)}}" style="width: 50px; height:50px;" alt="Image"/>
                </td>
                <td>{{ $user->Address }}</td>
                <td>{{ $user->Gender }}</td>
                <td>
                    @if ($user->Role == 'Supervisor')
                    <span class="badge rounded-pill bg-success me-1">Supervisor</span>
                    @elseif ($user->Role == 'User')
                    <span class="badge rounded-pill bg-primary me-1">User</span>
                    @elseif ($user->Role == 'Manager')
                    <span class="badge rounded-pill bg-warning me-1">Manager</span>
                    @endif
                </td>

                <td>

                    <a href="{{ route('users.show', $user->id) }}" class="btn" title="View">
                        <i class="fas fa-eye" style="color: #17a2b8;"></i>
                    </a>


                    <a href="{{ route('users.edit', $user->id) }}" class="btn" title="Edit">
                        <i class="fas fa-edit" style="color: #ffc107;"></i>
                    </a>


                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline delete-form" style="display:inline;">
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
                const userName = form.querySelector('.user-name') ? form.querySelector('.user-name').innerText : 'this user'; // Get user name if available

                Swal.fire({
                    title: 'Are you sure?',
                    text: `You are about to delete ${userName}. This action cannot be undone!`,
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