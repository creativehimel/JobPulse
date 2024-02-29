@extends('layouts.app')
@section('page_title', 'Reference Details')
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
                    <li class="breadcrumb-item active">Reference  Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Candidate Reference Details</h4>
                    <a href="{{route('references.create')}}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        @if ($refereces->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                            @foreach ($refereces as $key => $referece)
                                <div class="col-md-12 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Reference {{++$key}}</h5>
                                        <div class="d-flex gap-1">
                                            <a href="{{route('references.edit', $referece->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                                            <form action="{{route('references.destroy', $referece->id)}}" method="post">
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
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Name :</span> <span class="fw-bold text-primary">{{$referece->name}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Organization :</span> <span class="fw-bold text-primary">{{$referece->organization}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Address :</span> <span class="fw-bold text-primary">{{$referece->address}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Designation :</span> <span><span class="fw-bold text-primary">{{$referece->designation}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Phone :</span> <span><span class="fw-bold text-primary">{{$referece->phone}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Email :</span> <span><span class="fw-bold text-primary">{{$referece->email}}</span>
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
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection