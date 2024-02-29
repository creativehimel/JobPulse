@extends('layouts.app')
@section('page_title', 'Eduction Details')
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
                    <li class="breadcrumb-item active">Job Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Candidate Eduction Details</h4>
                    <a href="{{route('educations.create')}}" class="btn btn-primary">Add</a>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        @foreach ($educations as $education)
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5>{{$education->degreeLevel->name}}</h5>
                                    <div class="d-flex gap-1">
                                        <a href="{{route('educations.edit', $education->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                                        <form action="{{route('educations.destroy', $education->id)}}" method="post">
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
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Degree Level :</span> <span class="fw-bold text-primary">{{$education->degreeLevel->name}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Degree Type :</span> <span class="fw-bold text-primary">{{$education->degreeType->name}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Roll :</span> <span class="fw-bold text-primary">{{$education->roll}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Passing Year :</span> <span class="fw-bold text-primary">{{$education->passing_year}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Result Type :</span> <span class="fw-bold text-primary">{{$education->resultType->name}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled mb-4 mt-3">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Registration :</span> <span><span class="fw-bold text-primary">{{$education->registration}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Institution Name :</span> <span><span class="fw-bold text-primary">{{$education->institute_name}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Subject :</span> <span class="fw-bold text-primary">{{$education->subject}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Result :</span> <span class="fw-bold text-primary">{{$education->result}}</span>
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection