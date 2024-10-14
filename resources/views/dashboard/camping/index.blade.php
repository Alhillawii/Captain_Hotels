@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Campings</h1>
    <a href="{{ route('campings.create') }}" class="btn btn-primary border-0" style="background-color: #16325B;">Add Camping</a>

    @if (session('success'))
    <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Number of Persons</th>
                <th>Camp Days</th>
                <th>Camp Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($campings as $camping)
            <tr>
                <td>{{ $camping->id }}</td>
                <td>{{ $camping->number_of_persons }}</td>
                <td>{{ $camping->camp_days }}</td>
                <td>
                    <img src="{{ asset($camping->Camp_img) }}" style="width: 50px; height: 50px;" alt="Camp Image"/>
                </td>
                <td>
                   
                    <a href="{{ route('campings.show', $camping->id) }}" class="btn" title="View">
                        <i class="fas fa-eye" style="color: #17a2b8;"></i>
                    </a>

                    
                    <a href="{{ route('campings.edit', $camping->id) }}" class="btn" title="Edit">
                        <i class="fas fa-edit" style="color: #ffc107;"></i>
                    </a>

                    
                    <form action="{{ route('campings.destroy', $camping->id) }}" method="POST" class="d-inline delete-form" style="display:inline;">
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
                    text: 'You are about to delete this camping. This action cannot be undone!',
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
