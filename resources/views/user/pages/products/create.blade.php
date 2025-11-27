@extends('user.layouts.app') {{-- or your dashboard layout --}}

@section('backend-content')
<div class="container">
    <h2>Add New Product</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name">Product Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>


        <div class="mb-3">
            <label for="description">Full Description:</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="image">Upload Image:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection