@extends('user.layouts.app')


@section('title', 'Edit Product')
@section('header', 'Edit Product')

@section('backend-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="icon" class="form-label">Icon Class (Font Awesome)</label>
                                    <input type="text" class="form-control" id="icon" name="icon" value="{{ $product->icon }}" placeholder="fas fa-icon">
                                    <small class="text-muted">Example: fas fa-server</small>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Full Description *</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ $product->description }}</textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="image" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @if($product->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="img-thumbnail">
                                            <p class="text-muted mt-1">Current image</p>
                                        </div>
                                    @endif
                                    <small class="text-muted">Max 2MB (JPEG, PNG, JPG, GIF, SVG)</small>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="order" class="form-label">Display Order</label>
                                            <input type="number" class="form-control" id="order" name="order" value="{{ $product->order }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $product->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active">Active Product</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection