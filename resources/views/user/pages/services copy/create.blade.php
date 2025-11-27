@extends('user.layouts.app') {{-- or your dashboard layout --}}

@section('backend-content')
<div class="container">
    <h2>Add New Service??</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name">Service Name:</label>
            <input type="text" class="form-control @error('name') is-invalid state-invalid @enderror" name="name" placeholder="Enter Name" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="short_description">Short Description:</label>
            <input type="text" name="short_description" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description">Full Description:</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="image">Upload Image:</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Service</button>
    </form>
</div>
@endsection