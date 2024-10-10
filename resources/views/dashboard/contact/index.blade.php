@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Contacts</h1>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->Name }}</td>
                <td>{{ $contact->Email }}</td>
                <td>{{ $contact->Message }}</td>
                <td>
                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn" title="View">
                        <i class="fas fa-eye" style="color: #17a2b8;"></i>
                    </a>



                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline delete-form" style="display:inline;">
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
                    text: 'You are about to delete this room. This action cannot be undone!',
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