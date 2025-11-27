@extends('user.layouts.app')


@section('title', 'Edit Client')
@section('header', 'Edit Client')

@section('backend-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Client Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="short_description" class="form-label">Short Description *</label>
                                    <textarea class="form-control" id="short_description" name="short_description" rows="3" maxlength="500" required>{{ $client->short_description }}</textarea>
                                    <small class="text-muted">Max 500 characters</small>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                
                                <div class="mb-3">
                                    <label for="image" class="form-label">Client Logo</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @if($client->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}" width="100" class="img-thumbnail">
                                            <p class="text-muted mt-1">Current image</p>
                                        </div>
                                    @endif
                                    <small class="text-muted">Max 2MB (JPEG, PNG, JPG, GIF, SVG)</small>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $client->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active">Active client</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update client</button>
                        <a href="{{ route('client.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection