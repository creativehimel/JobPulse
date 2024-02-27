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
            <form action="{{route('profiles.update', $companyDetails->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                                name="image"
                                accept="image/png, image/jpeg" />
                            </label>
                            <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                        </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">CEO Name</label>
                                <input class="form-control @error('ceo') is-invalid @enderror" type="text" name="ceo" id="lastName" value="{{$companyDetails->ceo}}" />
                                @error('ceo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="industry">Industry</label>
                                <select id="industry" name="industry" class="select2 form-select @error('industry') is-invalid @enderror">
                                    <option value="" disabled selected>Select Industry</option>
                                    @foreach ($industries as $industry)
                                        <option @if ($industry->id == $companyDetails->industry->id)
                                            selected
                                        @endif value="{{$industry->id}}">{{$industry->name}}</option>
                                    @endforeach
                                </select>
                                @error('industry')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="ownership">Ownership Type</label>
                                <select id="ownership" name="ownership" class="select2 form-select @error('ownership') is-invalid @enderror">
                                    <option value="" disabled selected>Select Ownership Type</option>
                                    @foreach ($ownershipTypes as $ownershipType)
                                        <option @if ($ownershipType->id == $companyDetails->ownershipType->id)
                                            selected
                                        @endif value="{{$ownershipType->id}}">{{$ownershipType->name}}</option>
                                    @endforeach
                                </select>
                                @error('ownership')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="companySize">Company Size</label>
                                <select id="companySize" name="companySize" class="select2 form-select @error('companySize') is-invalid @enderror">
                                    <option value="" disabled selected>Select Company Size</option>
                                    @foreach ($companySizes as $companySize)
                                        <option @if ($companySize->id == $companyDetails->companySize->id)
                                            selected
                                        @endif value="{{$companySize->id}}">{{$companySize->size}}</option>
                                    @endforeach
                                </select>
                                @error('companySize')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" name="country" class="select2 form-select @error('country') is-invalid @enderror">
                                    <option value="" disabled selected>Select Country Name</option>
                                    @foreach ($countries as $country)
                                        <option @if ($country->id == $companyDetails->country->id)
                                            selected
                                        @endif value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="city">City</label>
                                <select id="city" name="city" class="select2 form-select @error('city') is-invalid @enderror">
                                    <option value="" disabled selected>Select City Name</option>
                                    @foreach ($cities as $city)
                                        <option @if ($city->id == $companyDetails->city->id)
                                            selected
                                        @endif value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Established In</label>
                                <input
                                    type="text"
                                    class="form-control @error('establishedIn') is-invalid @enderror"
                                    id="organization"
                                    name="establishedIn"
                                    value="{{$companyDetails->established_in}}" />
                                @error('establishedIn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Website</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="organization"
                                    name="website"
                                    value="{{$companyDetails->website}}" />
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="details" class="form-label">Company Details</label>
                                <textarea class="form-control summernote @error('details') is-invalid @enderror" id="details" name="details" rows="3">{{$companyDetails->details}}</textarea>
                                @error('details')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Number of Offices</label>
                                <input type="text" class="form-control @error('no_of_offices') is-invalid @enderror" id="address" name="no_of_offices" placeholder="No of offices" value="{{$companyDetails->no_of_offices}}"/>
                                @error('no_of_offices')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" id="address" name="location" placeholder="Address" value="{{$companyDetails->location}}"/>
                                @error('location')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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
                                <label for="address" class="form-label">Fax</label>
                                <input type="text" class="form-control" id="address" name="fax" placeholder="Fax Address" value="{{$companyDetails->fax}}" />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </div>
                    <!-- /Account -->
                </div>
            </form>
        </div>
    </div>
@endsection
