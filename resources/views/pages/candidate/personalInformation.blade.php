@extends('pages.candidateProfile')
@section('profile_content')
    <!-- User Profile Content -->
    <div class="row">
        <div class="col-md-12">
            <!-- About User -->
            <div class="card mb-4">
                <div class="card-body">
                    <h class="card-text text-uppercase d-flex justify-content-between align-items-center">Personal Information
                        <a href="{{route('personalInfo.edit')}}" class="btn btn-primary btn-sm">Edit</a>
                    </h>
                    @if (empty($userDetails->personalInfo))
                        <p class="text-center">Please Add Personal infromation</p>
                    @else

                    <ul class="list-unstyled mb-4 mt-3">
                        @if(!empty($userDetails->personalInfo->father_name))
                            <li class="d-flex align-items-center mb-3">
                                <i class="ti ti-user text-heading"></i
                                ><span class="fw-medium mx-2 text-heading">Father Name:</span> <span>{{$userDetails->personalInfo->father_name}}</span>
                            </li>
                        @endif

                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-check text-heading"></i
                            ><span class="fw-medium mx-2 text-heading">Status:</span> <span>Active</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-crown text-heading"></i
                            ><span class="fw-medium mx-2 text-heading">Industry Type:</span> <span></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-crown text-heading"></i
                            ><span class="fw-medium mx-2 text-heading">Ownership Type:</span> <span></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-flag text-heading"></i
                            ><span class="fw-medium mx-2 text-heading">Country:</span> <span></span>
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
                    @endif
                </div>
            </div>
            <!--/ About User -->
        </div>
@endsection
