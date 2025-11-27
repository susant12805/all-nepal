
@extends('user.layouts.app') {{-- Different layout file for public --}}

@section('backend-content')
<div class="page-header mt-0 shadow p-3">
    <ol class="breadcrumb mb-sm-0">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
    </ol>
    <div class="btn-group mb-0">
        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('client.create') }}"><i class="fas fa-plus mr-2"></i>Add new client</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">Our clients</h1>
        <!-- <p class="lead text-muted">Professional solutions tailored to your needs</p> -->
    </div>
</div>
@if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">Data Table</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">S. No</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-15p">Short Description</th>
                                <th class="wd-20p">Is Active</th>
                                <th class="wd-15p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->short_description }}</td>
                                <td>{{ $client->image }}</td>
                                <td>{{ $client->is_active }}</td>
                                <td>
                                    <div class="">
                                        <div class="">    
                                            <a href="{{ route('client.show', $client->id) }}" class="btn btn-sm btn-primary">View</a>
                                        </div>
                                        <div class=""> 
                                            <a href="{{ route('client.edit', $client->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        </div>
                                        <div class=""> 
                                            <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" onclick="return confirm('Delete this client?')" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection