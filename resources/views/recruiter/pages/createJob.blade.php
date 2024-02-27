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
                    <li class="breadcrumb-item">
                        <a href="#">Job Board</a>
                    </li>
                    <li class="breadcrumb-item active">Create Job</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4 p-2">    
                <div class="card-body">
                    <form action="{{route('jobs.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Job Title : <span class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('job_title') is-invalid @enderror"
                                    type="text"
                                    id="firstName"
                                    name="job_title"
                                    value="{{old('job_title')}}"
                                    autofocus />
                                    @error('job_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="jobType">Job Type : <span class="text-danger">*</span></label>
                                <select id="jobType" name="job_type_id" class="select2 form-select @error('job_type_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Job Type</option>
                                    @foreach ($jobTypes as $jobType)
                                        <option @if (old('job_type_id') == $jobType->id)
                                            selected
                                        @endif value="{{$jobType->id}}">{{$jobType->name}}</option>
                                    @endforeach
                                </select>
                                @error('job_type_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="jobCategory">Job Category : <span class="text-danger">*</span></label>
                                <select id="jobCategory" name="job_category_id" class="select2 form-select @error('job_type_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Job Category</option>
                                    @foreach ($jobCategories as $jobCategory)
                                        <option @if (old('job_category_id') == $jobCategory->id)
                                            selected
                                        @endif value="{{$jobCategory->id}}">{{$jobCategory->name}}</option>
                                    @endforeach
                                </select>
                                @error('job_category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="select2Primary">Job Skill : <span class="text-danger">*</span></label>
                                <div class="select2-primary">
                                    <select id="select2Primary" name="job_skill_id[]" class="select2 form-select @error('job_type_id') is-invalid @enderror" multiple>
                                    <option value="" disabled>Select Job Skill</option>
                                        @foreach ($jobSkills as $jobSkill)
                                            <option @if (old('job_skill_id') == $jobSkill->id)
                                            selected
                                        @endif value="{{$jobSkill->id}}">{{$jobSkill->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('job_skill_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="description">Description : <span class="text-danger">*</span></label>
                                <textarea name="description" class="form-control summernote @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{old('description')}}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="select2PrimaryGender">Gender : <span class="text-danger">*</span></label>
                                <div class="select2-primary">
                                    <select name="gender_id" id="select2PrimaryGender" class="select2 form-select @error('gender_id') is-invalid @enderror">
                                    <option value="" selected disabled>Select Gender</option>
                                        @foreach ($genders as $gender)
                                            <option @if (old('gender_id') == $gender->id)
                                            selected
                                        @endif value="{{$gender->id}}">{{ucfirst($gender->name)}}</option>
                                        @endforeach
                                    </select>
                                    @error('gender_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-default-dob">Job Expiry Date : <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon11">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                    <input type="date" name="job_expiry_date" class="form-control @error('job_expiry_date') is-invalid @enderror" value="{{old('job_expiry_date')}}"/>
                                </div>
                                @error('job_expiry_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-default-dob">Salary From : <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon11">
                                        <i class="ti ti-currency-dollar"></i>
                                    </span>
                                    <input type="text" name="salary_from" class="form-control @error('salary_from') is-invalid @enderror" value="{{old('salary_from')}}"/>
                                </div>
                                @error('salary_from')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-default-dob">Salary To : <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon11">
                                        <i class="ti ti-currency-dollar"></i>
                                    </span>
                                    <input type="text" name="salary_to" class="form-control @error('salary_to') is-invalid @enderror" value="{{old('salary_to')}}"/>
                                </div>
                                @error('salary_to')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="salaryCurrency">Currency : <span class="text-danger">*</span></label>
                                <select name="salary_currency_id" id="salaryCurrency" class="select2 form-select @error('salary_currency_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Currency</option>
                                    @foreach ($salaryCurrencies as $salaryCurrency)
                                        <option @if (old('salary_currency_id') == $salaryCurrency->id)
                                            selected
                                        @endif value="{{$salaryCurrency->id}}">{{$salaryCurrency->currency_name}}</option>
                                    @endforeach
                                </select>
                                @error('salary_currency_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="salaryPeriod">Salary Period : <span class="text-danger">*</span></label>
                                <select name="salary_period_id" id="salaryPeriod" class="select2 form-select @error('salary_period_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Salary Period</option>
                                    @foreach ($salaryPeriods as $salaryPeriod)
                                        <option @if (old('salary_period_id') == $salaryPeriod->id)
                                            selected
                                        @endif value="{{$salaryPeriod->id}}">{{$salaryPeriod->name}}</option>
                                    @endforeach
                                </select>
                                @error('salary_period_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Country : <span class="text-danger">*</span></label>
                                <select name="country_id" id="country" class="select2 form-select @error('country_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Country</option>
                                    @foreach ($countries as $country)
                                        <option @if (old('country_id') == $country->id)
                                            selected
                                        @endif value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="city">City : <span class="text-danger">*</span></label>
                                <select name="city_id" id="city" class="select2 form-select @error('city_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select City</option>
                                    @foreach ($cities as $city)
                                        <option @if (old('city_id') == $city->id)
                                            selected
                                        @endif value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="careerLevel">Career Level : <span class="text-danger">*</span></label>
                                <select name="career_level_id" id="careerLevel" class="select2 form-select @error('career_level_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Career Level</option>
                                    @foreach ($careerLevels as $careerLevel)
                                        <option @if (old('career_level_id') == $careerLevel->id)
                                            selected
                                        @endif value="{{$careerLevel->id}}">{{$careerLevel->name}}</option>
                                    @endforeach
                                </select>
                                @error('career_level_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="jobShift">Job Shift : <span class="text-danger">*</span></label>
                                <select name="job_shift_id" id="jobShift" class="select2 form-select @error('job_type_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Job Shift</option>
                                    @foreach ($jobShifts as $jobShift)
                                        <option @if (old('job_shift_id') == $jobShift->id)
                                            selected
                                        @endif value="{{$jobShift->id}}">{{$jobShift->shift}}</option>
                                    @endforeach
                                </select>
                                @error('job_shift_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="select2PrimaryTag">Job Tag : <span class="text-danger">*</span></label>
                                <div class="select2-primary">
                                    <select name="job_tag_id[]" id="select2PrimaryTag" class="select2 form-select @error('job_tag_id') is-invalid @enderror" multiple>
                                    <option value="" disabled>Select Job Shift</option>
                                        @foreach ($jobTags as $jobTag)
                                            <option @if (old('job_tag_id') == $jobTag->id)
                                            selected
                                        @endif value="{{$jobTag->id}}">{{ucfirst($jobTag->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('job_tag_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="degreeType">Degree Type : <span class="text-danger">*</span></label>
                                <select name="degree_type_id" id="degreeType" class="select2 form-select @error('degree_type_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Degree Type</option>
                                    @foreach ($degreeTypes as $degreeType)
                                        <option @if (old('degree_type_id') == $degreeType->id)
                                            selected
                                        @endif value="{{$degreeType->id}}">{{$degreeType->name}}</option>
                                    @endforeach
                                </select>
                                @error('degree_type_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="functionalArea">Functional Areas : <span class="text-danger">*</span></label>
                                <select name="functional_area_id" id="functionalArea" class="select2 form-select @error('functional_area_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Functional Areas</option>
                                    @foreach ($functionalAreas as $functionalArea)
                                        <option @if (old('functional_area_id') == $functionalArea->id)
                                            selected
                                        @endif value="{{$functionalArea->id}}">{{$functionalArea->name}}</option>
                                    @endforeach
                                </select>
                                @error('functional_area_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="Experience">Job Experience : <span class="text-danger">*</span></label>
                                <select name="job_experiance_id" id="Experience" class="select2 form-select @error('job_experiance_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Job Experience</option>
                                    @foreach ($jobExperiences as $jobExperience)
                                        <option @if (old('job_experiance_id') == $jobExperience->id)
                                            selected
                                        @endif value="{{$jobExperience->id}}">{{$jobExperience->name}}</option>
                                    @endforeach
                                </select>
                                @error('job_experiance_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="jobExperience">Marital Status : <span class="text-danger">*</span></label>
                                <select name="marital_status_id" id="jobExperience" class="select2 form-select @error('marital_status_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Marital Status</option>
                                    @foreach ($maritalStatuses as $maritalStatus)
                                        <option @if (old('marital_status_id') == $maritalStatus->id)
                                            selected
                                        @endif value="{{$maritalStatus->id}}">{{$maritalStatus->name}}</option>
                                    @endforeach
                                </select>
                                @error('marital_status_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="languageLevel">Language Level : <span class="text-danger">*</span></label>
                                <select name="language_level_id" id="languageLevel" class="select2 form-select @error('language_level_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Marital Status</option>
                                    @foreach ($languageLevels as $languageLevel)
                                        <option @if (old('language_level_id') == $languageLevel->id)
                                            selected
                                        @endif value="{{$languageLevel->id}}">{{$languageLevel->name}}</option>
                                    @endforeach
                                </select>
                                @error('language_level_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Position : <span class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('position') is-invalid @enderror"
                                    type="text"
                                    id="firstName"
                                    name="position"
                                    value="{{old('position')}}"
                                     />
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-1 col-md-6">
                                <div class="text-light small fw-medium mb-3">Hide Salary</div>
                                    <label class="switch">
                                        <input name="hide_salary" value="1" type="checkbox" class="switch-input" />
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on">
                                            <i class="ti ti-check"></i>
                                            </span>
                                            <span class="switch-off">
                                            <i class="ti ti-x"></i>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="ml-4 mb-4">
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                            <a href="{{route('jobs.index')}}" class="btn btn-label-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
@endsection