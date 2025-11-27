@extends('user.layouts.app')


@section('title', 'Edit Project')
@section('header', 'Edit Project')

@section('backend-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Project Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="short_description" class="form-label">Short Description *</label>
                                    <textarea class="form-control" id="short_description" name="short_description" rows="3" maxlength="500" required>{{ $project->short_description }}</textarea>
                                    <small class="text-muted">Max 500 characters</small>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="icon" class="form-label">Icon Class (Font Awesome)</label>
                                    <input type="text" class="form-control" id="icon" name="icon" value="{{ $project->icon }}" placeholder="fas fa-icon">
                                    <small class="text-muted">Example: fas fa-server</small>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Full Description *</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ $project->description }}</textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="image" class="form-label">Project Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @if($project->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" width="100" class="img-thumbnail">
                                            <p class="text-muted mt-1">Current image</p>
                                        </div>
                                    @endif
                                    <small class="text-muted">Max 2MB (JPEG, PNG, JPG, GIF, SVG)</small>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="order" class="form-label">Display Order</label>
                                            <input type="number" class="form-control" id="order" name="order" value="{{ $project->order }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $project->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active">Active Project</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Project</button>
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection