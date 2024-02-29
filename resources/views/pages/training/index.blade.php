@extends('layouts.app')
@section('page_title', 'Training Details')
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
                    <li class="breadcrumb-item active">Training  Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Candidate Training Details</h4>
                    <a href="{{route('trainings.create')}}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        @if ($trainings->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                            @foreach ($trainings as $key => $training)
                                <div class="col-md-12 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Training {{++$key}}</h5>
                                        <div class="d-flex gap-1">
                                            <a href="{{route('trainings.edit', $training->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                                            <form action="{{route('trainings.destroy', $training->id)}}" method="post">
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
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Training Name :</span> <span class="fw-bold text-primary">{{$training->name}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Training Institute :</span> <span class="fw-bold text-primary">{{$training->institute_name}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Start Date :</span> <span><span class="fw-bold text-primary">{{$training->start_date}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">End Date :</span> <span><span class="fw-bold text-primary">{{$training->start_date}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <h6>Training Description</h6>
                                            <p>{{$training->description}}</p>
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