@extends('layouts.app')
@section('page_title', 'Certificate Details')
@section('main_content')
<div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#">Candidate</a>
                    </li>
                    <li class="breadcrumb-item active">Certificates</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Candidate Certificates Details</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        @if ($candidateCerficates->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                            @foreach ($candidateCerficates as $key => $candidateCerficate)
                                <div class="col-md-12 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Certificate {{++$key}}</h5>
                                        <div class="d-flex gap-1">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="{{'#edit'.$candidateCerficate->id.'Modal'}}">Edit</button>
                                            <form action="{{route('certificates.destroy', $candidateCerficate->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger text-white">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Certificate Name :</span> <span class="fw-bold text-primary">{{$candidateCerficate->name}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Provider :</span> <span><span class="fw-bold text-primary">{{$candidateCerficate->provider}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-certificate"></i><span class="fw-medium mx-2 text-heading">Image :</span>
                                                   
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                     <img src="{{asset('images/certificate/'.$candidateCerficate->image)}}" width="300" height="300" alt="image">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @if(!($loop->last))
                                    <div class="divider divider-dashed">
                                        <div class="divider-text"><i class="ti ti-activity"></i></div>
                                    </div>
                                @endif
                                {{-- Edit Modal --}}
                                <div class="modal fade" id="{{'edit'.$candidateCerficate->id.'Modal'}}" data-bs-backdrop="static" tabindex="-2">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <form class="modal-content" method="POST" action="{{route('certificates.update', $candidateCerficate->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="backDropModalTitle">Edit Lnaguage Skill</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-2">
                                                            <label for="name" class="form-label">Certificate Name</label>
                                                            <input type="text" name="name" class="form-control" value="{{$candidateCerficate->name}}">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label for="provider" class="form-label">Provider</label>
                                                            <input type="text" name="provider" class="form-control" value="{{$candidateCerficate->provider}}">
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-center">
                                                            <img src="{{asset('images/certificate/'.$candidateCerficate->image)}}" width="100" height="100" alt="">
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <label for="image" class="form-label">Certificate File</label>
                                                            <input type="file" name="image" class="form-control">
                                                            <input type="hidden" name="old_image" value="{{$candidateCerficate->image}}">
                                                        </div>
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
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{route('certificates.store')}}" method="POST" class="modal-content" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Create Certificate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="name" class="form-label">Certificate Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="provider" class="form-label">Provider</label>
                            <input type="text" name="provider" class="form-control">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="image" class="form-label">Certificate File</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary saveBtn">Save</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
@endsection