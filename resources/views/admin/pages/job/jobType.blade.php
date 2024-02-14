@extends('admin.layouts.app')
@section('page_title', 'Job Types')
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#">Jobs</a>
                    </li>
                    <li class="breadcrumb-item active">Job Type</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">All Job Types</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCountryModal">Add Type</button>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-hover table-responsive">
                            @if ($jobTypes->isEmpty())
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
                                    @foreach ($jobTypes as $id => $jobType)
                                        <tr>
                                            <td>{{++$id}}</td>
                                            <td>
                                                <span class="fw-medium">{{ucwords($jobType->name)}}</span>
                                            </td>
                                            <td>
                                                @php
                                                    echo $jobType->description
                                                @endphp
                                            </td>
                                            <td>{{$jobType->created_at->toFormattedDateString()}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$jobType->id.'CountryModal'}}">
                                                            <i class="ti ti-pencil me-1"></i> Edit
                                                        </button>
                                                        <form action="{{route('job-types.destroy', $jobType->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item delete">
                                                                <i class="ti ti-trash me-1"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal --}}
                                                <div class="modal fade" id="{{'edit'.$jobType->id.'CountryModal'}}" data-bs-backdrop="static" tabindex="-2">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <form class="modal-content" method="POST" action="{{route('job-types.update', $jobType->id)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="backDropModalTitle">Edit Job Type</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="permissionName" class="form-label">Type Name</label>
                                                                        <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter Permission Name" value="{{$jobType->name}}">
                                                                        @error('name')
                                                                            @php
                                                                                notify()->error($message)
                                                                            @endphp
                                                                        @enderror
                                                                    </>
                                                                    <div class="col-md-12">
                                                                        <label for="description" class="form-label">Description</label>
                                                                        <textarea class="summernote form-control" name="description" id="decription" cols="30" rows="10">{{$jobType->description}}</textarea>
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
    <div class="modal modal-lg fade" id="addCountryModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" method="POST" action="{{route('job-types.store')}}">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Create Job Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <label for="categoryName" class="form-label">Type Name</label>
                        <input type="text" id="categoryName" name="name" class="form-control" placeholder="Enter job category name">
                        @error('name')
                            @php
                                notify()->error($message)
                            @endphp
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="summernote form-control" name="description" id="decription" cols="30" rows="10"></textarea>
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