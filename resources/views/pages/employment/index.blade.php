@extends('layouts.app')
@section('page_title', 'Employment Details')
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
                    <li class="breadcrumb-item active">Employment  Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Candidate Training Details</h4>
                    <a href="{{route('employments.create')}}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        @if ($emploments->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                            @foreach ($emploments as $key => $emploment)
                                <div class="col-md-12 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Employment {{++$key}}</h5>
                                        <div class="d-flex gap-1">
                                            <a href="{{route('employments.edit', $emploment->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                                            <form action="{{route('employments.destroy', $emploment->id)}}" method="post">
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
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Organization Name :</span> <span class="fw-bold text-primary">{{$emploment->company_name}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Company Location :</span> <span class="fw-bold text-primary">{{$emploment->company_location}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Employment Status :</span> <span class="fw-bold text-primary">{{$emploment->is_working}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Start Date :</span> <span class="fw-bold text-primary">{{$emploment->start_date}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Designation :</span> <span><span class="fw-bold text-primary">{{$emploment->designation}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Department :</span> <span><span class="fw-bold text-primary">{{$emploment->department}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Industry Type :</span> <span><span class="fw-bold text-primary">{{$emploment->industry->name}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">End Date :</span> <span class="fw-bold text-primary">{{$emploment->end_date}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <h6>Employment Responsibilities</h6>
                                            <p>{{$emploment->responsibilities}}</p>
                                        </div>
                                    </div>
                                </div>
                                @if(!($loop->last))
                                    <div class="divider divider-dashed">
                                        <div class="divider-text"><i class="ti ti-activity"></i></div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection