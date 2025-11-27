@extends('user.layouts.app') {{-- Different layout file for public --}}

@section('backend-content')

<section class="project-detail">
    <div class="container">
        <div class="project-header">
            <h1>{{ $project->name }}</h1>
            <div class="project-actions">
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-edit">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="project-content">
            <div class="project-image">
                @if($project->image)
                    <img src="{{ asset('storage/'.$project->image) }}" alt="{{ $project->name }}">
                @else
                    <div class="no-image">
                        <i class="{{ $project->icon ?? 'fas fa-box' }}"></i>
                    </div>
                @endif
            </div>
            <div class="project-info">
                <h3>Description</h3>
                <p>{{ $project->description }}</p>
                
                @if($project->short_description)
                    <h3>Quick Info</h3>
                    <p>{{ $project->short_description }}</p>
                @endif
                
                <div class="project-meta">
                    <span class="status {{ $project->is_active ? 'active' : 'inactive' }}">
                        {{ $project->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .project-detail {
        padding: 2rem 0;
    }
    .project-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }
    .project-content {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 2rem;
    }
    .project-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .no-image {
        font-size: 5rem;
        text-align: center;
        color: #ddd;
    }
    .project-actions {
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