@extends('recruiter.layouts.app')
@section('page_title', "Edit Profile")
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">    
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img
                        src="{{asset('assets/img/avatars/14.png')}}"
                        alt="user-avatar"
                        class="d-block w-px-100 h-px-100 rounded"
                        id="uploadedAvatar" />
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="ti ti-upload d-block d-sm-none"></i>
                        <input
                            type="file"
                            id="upload"
                            class="account-file-input"
                            hidden
                            accept="image/png, image/jpeg" />
                        </label>
                        <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                        <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                        </button>

                        <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                    </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="GET" onsubmit="return false">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Name</label>
                            <input
                                class="form-control"
                                type="text"
                                id="firstName"
                                name="name"
                                value="{{$companyDetails->recruiter->name}}"
                                autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                                class="form-control"
                                type="text"
                                id="email"
                                name="email"
                                value="{{$companyDetails->recruiter->email}}"
                                placeholder="john.doe@example.com" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">CEO Name</label>
                            <input class="form-control" type="text" name="ceo" id="lastName" value="{{$companyDetails->ceo}}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Industry</label>
                            <select id="country" class="select2 form-select">
                                <option value="" disabled selected>Select Industry</option>
                                @foreach ($industries as $industry)
                                    <option @if ($industry->id == $companyDetails->industry->id)
                                        selected                                    
                                    @endif value="{{$industry->id}}">{{$industry->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Ownership Type</label>
                            <select id="country" class="select2 form-select">
                                <option value="" disabled selected>Select Ownership Type</option>
                                @foreach ($ownershipTypes as $ownershipType)
                                    <option @if ($ownershipType->id == $companyDetails->ownershipType->id)
                                        selected                                    
                                    @endif value="{{$ownershipType->id}}">{{$ownershipType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Company Size</label>
                            <select id="country" class="select2 form-select">
                                <option value="" disabled selected>Select Company Size</option>
                                @foreach ($companySizes as $companySize)
                                    <option @if ($companySize->id == $companyDetails->companySize->id)
                                        selected                                    
                                    @endif value="{{$companySize->id}}">{{$companySize->size}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select">
                                <option value="" disabled selected>Select Country Name</option>
                                @foreach ($countries as $country)
                                    <option @if ($country->id == $companyDetails->country->id)
                                        selected                                    
                                    @endif value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">City</label>
                            <select id="country" class="select2 form-select">
                                <option value="" disabled selected>Select City Name</option>
                                @foreach ($cities as $city)
                                    <option @if ($city->id == $companyDetails->city->id)
                                        selected                                    
                                    @endif value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Established In</label>
                            <input
                                type="text"
                                class="form-control"
                                id="organization"
                                name="organization"
                                value="{{$companyDetails->established_in}}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Website</label>
                            <input
                                type="text"
                                class="form-control"
                                id="organization"
                                name="organization"
                                value="{{$companyDetails->website}}" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="details" class="form-label">Company Details</label>
                            <textarea class="form-control summernote" id="details" name="details" rows="3">{{$companyDetails->details}}</textarea>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Number of Offices</label>
                            <input type="text" class="form-control" id="address" name="no_of_offices" placeholder="No of offices" value="{{$companyDetails->no_of_offices}}"/>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="location" placeholder="Address" value="{{$companyDetails->location}}"/>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Facebook Link</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <i class="ti ti-brand-facebook text-primary"></i>
                                </span>
                                <input type="text" class="form-control" name="facebook_url" placeholder="social link" aria-label="Username" aria-describedby="basic-addon11" value="{{$companyDetails->facebook_url}}" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Twitter Link</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <i class="ti ti-brand-twitter text-primary"></i>
                                </span>
                                <input type="text" class="form-control" name="twitter_url" placeholder="social link" aria-label="Username" aria-describedby="basic-addon11" value="{{$companyDetails->twitter_url}}" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Linkedin Link</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <i class="ti ti-brand-linkedin text-primary"></i>
                                </span>
                                <input type="text" class="form-control" name="linkedin_url" placeholder="social link" aria-label="Username" aria-describedby="basic-addon11" value="{{$companyDetails->linkedin_url}}" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Google Plus Link</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <i class="ti ti-brand-google text-danger"></i>
                                </span>
                                <input type="text" class="form-control" name="google_plus_url" placeholder="social link" aria-label="Username" aria-describedby="basic-addon11" value="{{$companyDetails->google_plus_url}}" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Pinterest Link</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">
                                    <i class="ti ti-brand-pinterest text-danger"></i>
                                </span>
                                <input type="text" class="form-control" name="pinterest_url" placeholder="social link" aria-label="Username" aria-describedby="basic-addon11" value="{{$companyDetails->pinterest_url}}" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">US (+1)</span>
                                <input
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                placeholder="202 555 0111" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Fax</label>
                            <input type="text" class="form-control" id="address" name="fax" placeholder="Fax Address" />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
@endsection