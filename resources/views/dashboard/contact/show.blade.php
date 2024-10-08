@extends('dashboard.layout.master')

@section('content')
<div class="container">
    <h1>Contact Details</h1>

    <div class="card">
        <div class="card-header">
            <h3>Contact Info</h3>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $contact->Name }}</p>
            <p><strong>Email:</strong> {{ $contact->Email }}</p>
            <p><strong>Message:</strong> {{ $contact->Message }}</p>
            <p><strong>Description:</strong> {{ $contact->Description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
