@extends('layouts.app')
@section('page_title', 'Edit Personal Information')
@section('main_content')
    <div class="card">
        <h4 class="card-title ps-4 pt-4">Candidate Personal Information</h4>
        <div class="card-body">
            <form action="{{route('my-profiles.update', $candidate->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <input class="form-control @error('name') is-invalid @enderror" type="hidden" name="user_id" id="lastName" value="@if(!empty($candidate->user->id)) {{$candidate->user->id}} @endif" />
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="lastName" value="@if(!empty($candidate->user->name)) {{$candidate->user->name}} @endif" />
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="lastName" value="@if(!empty($candidate->user->email)) {{$candidate->user->email}} @endif" />
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Father Name</label>
                        <input class="form-control @error('father_name') is-invalid @enderror" type="text" name="father_name" id="lastName" value="@if(!empty($candidate->father_name)) {{$candidate->father_name}} @endif" />
                        @error('father_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Mother Name</label>
                        <input class="form-control @error('mother_name') is-invalid @enderror" type="text" name="mother_name" id="lastName" value="@if(!empty($candidate->mother_name)) {{$candidate->mother_name}} @endif" />
                        @error('mother_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="gender_id">Gender</label>
                        <select id="gender_id" name="gender_id" class="select2 form-select @error('gender_id') is-invalid @enderror">
                            <option value="" disabled selected>Select Gender</option>
                            @foreach ($genders as $gender)
                                <option @if(!empty($candidate->gender_id)) @if ($gender->id == $candidate->gender_id)
                                    selected
                                        @endif @endif value="{{$gender->id}}">{{ucwords($gender->name)}}</option>
                            @endforeach
                        </select>
                        @error('gender_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Date of Birth</label>
                        <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" id="lastName" value="@if(!empty($candidate->dob)) {{$candidate->dob}} @endif" />
                        @error('dob')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="religion_id">Religion</label>
                        <select id="gender_id" name="religion_id" class="select2 form-select @error('religion_id') is-invalid @enderror">
                            <option value="" disabled selected>Select Religion</option>
                            @foreach ($religions as $religion)
                                <option @if(!empty($candidate->religion_id)) @if ($religion->id == $candidate->religion_id)
                                    selected
                                        @endif @endif value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                        </select>
                        @error('religion_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="blood_group_id">Blood Group</label>
                        <select id="blood_group_id" name="blood_group_id" class="select2 form-select @error('blood_group_id') is-invalid @enderror">
                            <option value="" disabled selected>Select Blood Group</option>
                            @foreach ($bloodGroups as $bloodGroup)
                                <option @if(!empty($candidate->blood_group_id)) @if ($bloodGroup->id == $candidate->blood_group_id)
                                    selected
                                        @endif @endif value="{{$bloodGroup->id}}">{{$bloodGroup->name}}</option>
                            @endforeach
                        </select>
                        @error('blood_group_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="marital_status_id">Marital Status</label>
                        <select id="marital_status_id" name="marital_status_id" class="select2 form-select @error('marital_status_id') is-invalid @enderror">
                            <option value="" disabled selected>Select Industry</option>
                            @foreach ($maritalStatuses as $maritalStatus)
                                <option @if(!empty($candidate->marital_status_id)) @if ($maritalStatus->id == $candidate->marital_status_id)
                                    selected
                                        @endif @endif value="{{$maritalStatus->id}}">{{$maritalStatus->name}}</option>
                            @endforeach
                        </select>
                        @error('marital_status_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Nationality</label>
                        <input class="form-control @error('nationality') is-invalid @enderror" type="text" name="nationality" id="lastName" value="@if(!empty($candidate->nationality)) {{$candidate->nationality}} @endif" />
                        @error('nationality')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">National Id No</label>
                        <input class="form-control @error('passport_id') is-invalid @enderror" type="text" name="passport_id" id="lastName" value="@if(!empty($candidate->passport_id)) {{$candidate->passport_id}} @endif" />
                        @error('passport_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Passport Id No</label>
                        <input class="form-control @error('national_id') is-invalid @enderror" type="text" name="national_id" id="lastName" value="@if(!empty($candidate->national_id)) {{$candidate->national_id}} @endif" />
                        @error('national_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </form>

        </div>
    </div>

@endsection
