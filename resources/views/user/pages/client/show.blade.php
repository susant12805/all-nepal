@extends('user.layouts.app') {{-- Different layout file for public --}}

@section('backend-content')

<section class="Service-detail">
    <div class="container">
        <div class="service-header">
            <h1>{{ $client->name }}</h1>
            <div class="service-actions">
                <a href="{{ route('client.edit', $client->id) }}" class="btn btn-edit">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('client.destroy', $client->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="service-content">
            <div class="service-image">
                @if($client->image)
                    <img src="{{ asset('storage/'.$client->image) }}" alt="{{ $client->name }}">
                @else
                    <div class="no-image">
                        <i class="{{ $client->icon ?? 'fas fa-box' }}"></i>
                    </div>
                @endif
            </div>
            <div class="service-info">
                <h3>Description</h3>
                <p>{{ $client->description }}</p>
                
                @if($client->short_description)
                    <h3>Quick Info</h3>
                    <p>{{ $client->short_description }}</p>
                @endif
                
                <div class="service-meta">client->is_active ? 'active' : 'inactive' }}">
                        {{ $client->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .service-detail {
        padding: 2rem 0;
    }
    .service-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }
    .service-content {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 2rem;
    }
    .service-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .no-image {
        font-size: 5rem;
        text-align: center;
        color: #ddd;
    }
    .service-actions {
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