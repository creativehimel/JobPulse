@extends('layouts.app')
@section('page_title', 'Profile')
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Candidate Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="{{asset('images/profile-banner.png')}}" alt="Banner image" class="rounded-top" />
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img
                            src="{{asset('assets/img/avatars/14.png')}}"
                            alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{Auth::user()->name}}</h4>
                            </div>
                            <a href="{{route('my-profiles.edit', $candidate->id)}}" class=" btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Header -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-text text-uppercase mt-2 ">Personal Information</h5>
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-4 mt-3">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Name :</span> <span>{{$candidate->user->name}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Father Name :</span> <span>{{$candidate->father_name}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Date of Birth :</span> <span>{{$candidate->dob}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Religion :</span> <span>{{ ucwords($candidate->religion->name)}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Bllod Group :</span> <span>{{ ucwords($candidate->bloodGroup->name)}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">National Id No :</span> <span>{{ ucwords($candidate->national_id)}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-4 mt-3">
                                
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Email :</span> <span>{{$candidate->user->email}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Mother Name :</span> <span>{{$candidate->mother_name}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Gender :</span> <span>{{ ucwords($candidate->gender->name)}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Marital Status :</span> <span>{{$candidate->maritalStatus->name}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">Nationality :</span> <span>{{ ucwords($candidate->nationality)}}</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="ti ti-target-arrow"></i><span class="fw-medium mx-2 text-heading">National Id No :</span> <span>{{ ucwords($candidate->passport_id)}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
