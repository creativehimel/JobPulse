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
                    <form id="formAccountSettings" method="GET" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Job Title</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    id="firstName"
                                    name="name"
                                    autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Job Type</label>
                                <select id="country" class="select2 form-select">
                                    <option value="" disabled selected>Select Job Type</option>
                                    @foreach ($jobTypes as $jobType)
                                        <option value="{{$jobType->id}}">{{$jobType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Job Category</label>
                                <select id="country" class="select2 form-select">
                                    <option value="" disabled selected>Select Job Category</option>
                                    @foreach ($jobCategories as $jobCategory)
                                        <option value="{{$jobCategory->id}}">{{$jobCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="select2Primary">Job Skill</label>
                                <div class="select2-primary">
                                    <select id="select2Primary" class="select2 form-select" multiple>
                                    <option value="" disabled>Select Job Skill</option>
                                        @foreach ($jobSkills as $jobSkill)
                                            <option value="{{$jobSkill->id}}">{{$jobSkill->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control summernote" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="select2PrimaryGender">Gender</label>
                                <div class="select2-primary">
                                    <select id="select2PrimaryGender" class="select2 form-select" multiple>
                                    <option value="" disabled>Select Gender</option>
                                        @foreach ($genders as $gender)
                                            <option value="{{$gender->id}}">{{ucfirst($gender->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="basic-default-dob">DOB</label>
                                <input type="text" class="form-control flatpickr-validation" id="basic-default-dob" required />
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
@push('custom_js')
    <script>
        
    </script>
@endpush