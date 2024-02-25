@extends('recruiter.layouts.app')
@section('page_title', "Recruiter Profile")
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Recruiter Profile</li>
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
                src="../../assets/img/avatars/14.png"
                alt="user image"
                class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-5">
            <div
                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                <div class="user-profile-info">
                    <div class="d-flex justify-content-between">
                        <h4>{{$companyDetails->recruiter->name}}</h4>
                        <a href="#" class=" btn btn-primary">Edit Profile</a>
                    </div>
                    <ul
                        class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                        <li class="list-inline-item d-flex gap-1">
                        <i class="ti ti-color-swatch"></i> {{$companyDetails->industry->name}}
                        </li>
                        <li class="list-inline-item d-flex gap-1"><i class="ti ti-map-pin"></i>{{$companyDetails->city->name}}, {{$companyDetails->country->name}}</li>
                        <li class="list-inline-item d-flex gap-1">
                        <i class="ti ti-calendar"></i> {{$companyDetails->recruiter->created_at->toFormattedDateString()}}
                        </li>
                    </ul>
                    <p class="pt-2 pb-0">{{$companyDetails->details}}</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!--/ Header -->

    <!-- User Profile Content -->
    <div class="row">
    <div class="col-xl-4 col-lg-5 col-md-5">
        <!-- About User -->
        <div class="card mb-4">
        <div class="card-body">
            <small class="card-text text-uppercase">About</small>
            <ul class="list-unstyled mb-4 mt-3">
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-user text-heading"></i
                ><span class="fw-medium mx-2 text-heading">CEO Name:</span> <span>{{$companyDetails->ceo}}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-check text-heading"></i
                ><span class="fw-medium mx-2 text-heading">Status:</span> <span>Active</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-crown text-heading"></i
                ><span class="fw-medium mx-2 text-heading">Industry Type:</span> <span>{{$companyDetails->industry->name}}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-crown text-heading"></i
                ><span class="fw-medium mx-2 text-heading">Ownership Type:</span> <span>{{$companyDetails->ownershipType->name}}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-flag text-heading"></i
                ><span class="fw-medium mx-2 text-heading">Country:</span> <span>{{$companyDetails->country->name}}</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-file-description text-heading"></i
                ><span class="fw-medium mx-2 text-heading">Languages:</span> <span>English</span>
            </li>
            </ul>
            <small class="card-text text-uppercase">Contacts</small>
            <ul class="list-unstyled mb-4 mt-3">
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-phone-call"></i><span class="fw-medium mx-2 text-heading">Contact:</span>
                <span>(123) 456-7890</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-brand-skype"></i><span class="fw-medium mx-2 text-heading">Skype:</span>
                <span>john.doe</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-mail"></i><span class="fw-medium mx-2 text-heading">Email:</span>
                <span>john.doe@example.com</span>
            </li>
            </ul>
            <small class="card-text text-uppercase">Teams</small>
            <ul class="list-unstyled mb-0 mt-3">
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-brand-angular text-danger me-2"></i>
                <div class="d-flex flex-wrap">
                <span class="fw-medium me-2 text-heading">Backend Developer</span><span>(126 Members)</span>
                </div>
            </li>
            <li class="d-flex align-items-center">
                <i class="ti ti-brand-react-native text-info me-2"></i>
                <div class="d-flex flex-wrap">
                <span class="fw-medium me-2 text-heading">React Developer</span><span>(98 Members)</span>
                </div>
            </li>
            </ul>
        </div>
        </div>
        <!--/ About User -->
        <!-- Profile Overview -->
        <div class="card mb-4">
        <div class="card-body">
            <p class="card-text text-uppercase">Overview</p>
            <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-check"></i><span class="fw-medium mx-2">Task Compiled:</span>
                <span>13.5k</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <i class="ti ti-layout-grid"></i><span class="fw-medium mx-2">Projects Compiled:</span>
                <span>146</span>
            </li>
            <li class="d-flex align-items-center">
                <i class="ti ti-users"></i><span class="fw-medium mx-2">Connections:</span> <span>897</span>
            </li>
            </ul>
        </div>
        </div>
        <!--/ Profile Overview -->
    </div>
    <div class="col-xl-8 col-lg-7 col-md-7">
        <!-- Activity Timeline -->
        <div class="card card-action mb-4">
        <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Activity Timeline</h5>
            <div class="card-action-element">
            <div class="dropdown">
                <button
                type="button"
                class="btn dropdown-toggle hide-arrow p-0"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="ti ti-dots-vertical text-muted"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                </ul>
            </div>
            </div>
        </div>
        
        </div>
        <!--/ Activity Timeline -->
        <div class="row"> 
    </div>
    </div>
   {{$companyDetails}}
@endsection