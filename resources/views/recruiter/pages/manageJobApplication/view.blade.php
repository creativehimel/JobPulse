@extends('recruiter.layouts.app')
@section('page_title', 'View Job Applications')
@section('main_content')
    {{--  Breadcrumb Start  --}}
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('recruiter.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Jobs</a>
                    </li>
                    <li class="breadcrumb-item active">Manage Job Application</li>
                </ol>
            </nav>
        </div>
    </div>
    {{--  Breadcrumb End  --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">View Job Application</h4>
                    <a href="{{route('manage-applications.index')}}" class="btn btn-danger">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                                <div class="col-md-12 mt-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Job Title :</span> <span class="fw-bold text-primary">{{$jobApplication->job->job_title}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Salary :</span> <span class="fw-bold text-primary">$ {{$jobApplication->job->salary_from}} - {{$jobApplication->job->salary_to}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="list-unstyled mb-4 mt-3">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-certificate"></i><span class="fw-medium mx-2 text-heading">Job Description :</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <span class="ms-5">{!!$jobApplication->job->description!!}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Applicant Name :</span> <span class="fw-bold text-primary">{{$jobApplication->user->name}}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Applicant Name :</span> <span class="fw-bold text-primary">{{$jobApplication->user->email}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
