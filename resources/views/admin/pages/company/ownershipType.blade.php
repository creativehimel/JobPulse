@extends('admin.layouts.app')
@section('page_title', 'Ownership Type')
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#">Company</a>
                    </li>
                    <li class="breadcrumb-item active">Ownership Type</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">All Ownership Types</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-hover table-responsive">
                            @if ($ownershipTypes->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                                <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($ownershipTypes as $id => $ownershipType)
                                        <tr>
                                            <td>{{++$id}}</td>
                                            <td>
                                                <span class="fw-medium">{{ucwords($ownershipType->name)}}</span>
                                            </td>
                                            <td>{{Str::words($ownershipType->description, 20)}}</td>
                                            <td>{{$ownershipType->created_at->toFormattedDateString()}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$ownershipType->id.'Modal'}}">
                                                            <i class="ti ti-pencil me-1"></i> Edit
                                                        </button>
                                                        <form action="{{route('ownership-types.destroy', $ownershipType->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item delete">
                                                                <i class="ti ti-trash me-1"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal --}}
                                                <div class="modal fade" id="{{'edit'.$ownershipType->id.'Modal'}}" data-bs-backdrop="static" tabindex="-2">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <form class="modal-content" method="POST" action="{{route('ownership-types.update', $ownershipType->id)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="backDropModalTitle">Edit Ownership Type</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="permissionName" class="form-label">Type</label>
                                                                        <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter Permission Name" value="{{$ownershipType->name}}">
                                                                        @error('name')
                                                                            @php
                                                                                notify()->error($message)
                                                                            @endphp
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="description" class="form-label">Description</label>
                                                                        <textarea class="form-control" name="description" id="decription" cols="30" rows="4">{{$ownershipType->description}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" method="POST" action="{{route('ownership-types.store')}}">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Create Ownership Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="categoryName" class="form-label">Type</label>
                        <input type="text" id="categoryName" name="name" class="form-control" placeholder="Enter job category name">
                        @error('name')
                            @php
                                notify()->error($message)
                            @endphp
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="decription" cols="30" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
@endsection()