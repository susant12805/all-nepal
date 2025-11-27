<!-- resources/views/frontend/projects/show.blade.php -->
@extends('user.layouts.app') {{-- Different layout file for public --}}

@section('backend-content')
<section class="product-detail">
    <div class="container">
        <div class="product-header">
            <h1>{{ $product->name }}</h1>
            <div class="product-actions">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-edit">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="product-content">
            <div class="product-image">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
                @else
                    <div class="no-image">
                        <i class="{{ $product->icon ?? 'fas fa-box' }}"></i>
                    </div>
                @endif
            </div>
            <div class="product-info">
                <h3>Description</h3>
                <p>{{ $product->description }}</p>
                
                @if($product->short_description)
                    <h3>Quick Info</h3>
                    <p>{{ $product->short_description }}</p>
                @endif
                
                <div class="product-meta">
                    <span class="status {{ $product->is_active ? 'active' : 'inactive' }}">
                        {{ $product->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .product-detail {
        padding: 2rem 0;
    }
    .product-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }
    .product-content {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 2rem;
    }
    .product-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .no-image {
        font-size: 5rem;
        text-align: center;
        color: #ddd;
    }
    .product-actions {
        display: flex;
        gap: 1rem;
    }
    .btn-edit {
        background: #4e73df;
        color: white;
    }
    .btn-delete {
        background: #e74a3b;
        color: white;
    }
    .status.active {
        color: #1cc88a;
    }
    .status.inactive {
        color: #e74a3b;
    }
</style>
@endsection