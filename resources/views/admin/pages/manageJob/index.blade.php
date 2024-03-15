@extends('admin.layouts.app')
@section('main_content')
    {{--  Breadcrumb Start  --}}
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Jobs</a>
                    </li>
                    <li class="breadcrumb-item active">Manage Job</li>
                </ol>
            </nav>
        </div>
    </div>
    {{--  Breadcrumb End  --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Manage All Jobs</h4>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-hover table-responsive">
                            @if ($jobs->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                                <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Featured</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach ($jobs as $id => $job)
                                    <tr>
                                        <td>{{++$id}}</td>
                                        <td>
                                            <span class="fw-medium">{{ucwords($job->job_title)}}</span>
                                        </td>
                                        <td>
                                            @if($job->status == 1)
                                                <span class="badge bg-label-success me-1">Published</span>
                                            @else
                                                <span class="badge bg-label-danger me-1">Rejected</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($job->is_featured == 1)
                                                <span class="badge bg-label-success me-1">Featured</span>
                                            @else
                                                <span class="badge bg-label-danger me-1">Not Featured</span>
                                            @endif
                                        </td>
                                    <td class="d-flex gap-2">
                                        <button class="btn btn-warning btn-sm " data-bs-toggle="modal" data-bs-target="{{'#edit'.$job->id.'jobModal'}}">
                                            <i class="ti ti-pencil me-1"></i>Edit
                                        </button>
                                        <form action="{{route('manage-jobs.destroy', $job->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="ti ti-trash me-1"></i>Delete
                                            </button>
                                        </form>
                                        <div class="modal fade" id="{{'edit'.$job->id.'jobModal'}}" data-bs-backdrop="static" tabindex="-2">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <form class="modal-content" method="POST" action="{{route('manage-jobs.update', $job->id)}}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="backDropModalTitle">Manage Job</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12 mb-2">
                                                                <label for="permissionName" class="form-label">Job Status</label>
                                                                <select class="form-select" name="status" id="status">
                                                                    <option value="1" @if($job->status == 1) selected @endif>Published</option>
                                                                    <option value="0" @if($job->status == 0) selected @endif>Rejected</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12 mb-2">
                                                                <label for="description" class="form-label">Featured</label>
                                                                <select class="form-select" name="is_featured" id="is_featured">
                                                                    <option value="1" @if($job->is_featured == 1) selected @endif>Yes</option>
                                                                    <option value="0" @if($job->is_featured == 0) selected @endif>No</option>
                                                                </select>
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
@endsection
