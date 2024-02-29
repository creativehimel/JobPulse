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
                <a href="#">Candidate</a>
                </li>
                <li class="breadcrumb-item active">Create Education Details</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Create Eduction Details</h4>
                    <a href="{{route('educations.index')}}" class="btn btn-danger">Back</a>
                </div>
                <div class="card-body">
                    <form  action="{{route('educations.store')}}" method="post">
                        @csrf
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-6 mb-2">
                                <label for="roll" class="form-label">Roll : <span class="text-danger">*</span></label>
                                <input class="form-control @error('roll') is-invalid @enderror" type="text" name="roll" id="roll" value="{{old('roll')}}"/>
                                @error('roll')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="registration" class="form-label">Registration : </label>
                                <input class="form-control @error('registration') is-invalid @enderror" type="text" name="registration" id="registration" value="{{old('registration')}}"/>
                                @error('registration')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="institute_name" class="form-label">Institute Name : <span class="text-danger">*</span></label>
                                <input class="form-control @error('institute_name') is-invalid @enderror" type="text" name="institute_name" id="institute_name" value="{{old('institute_name')}}"/>
                                @error('institute_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="degree_type_id">Degree Type : <span class="text-danger">*</span></label>
                                <select id="degree_type_id" name="degree_type_id" class="select2 form-select @error('degree_type_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Degree Type</option>
                                    @foreach ($degreeTypes as $degreeType)
                                        <option @if (old('degree_type_id') == $degreeType->id)
                                            selected
                                        @endif value="{{$degreeType->id}}">{{ucwords($degreeType->name)}}</option>
                                    @endforeach
                                </select>
                                @error('degree_type_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="degree_level_id">Degree Level : <span class="text-danger">*</span></label>
                                <select id="degree_level_id" name="degree_level_id" class="select2 form-select @error('degree_level_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Degree Level</option>
                                    @foreach ($degreeLevels as $degreeLevel)
                                        <option @if (old('degree_level_id') == $degreeLevel->id)
                                            selected
                                        @endif value="{{$degreeLevel->id}}">{{ucwords($degreeLevel->name)}}</option>
                                    @endforeach
                                </select>
                                @error('degree_level_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="result_type_id">Result Type : <span class="text-danger">*</span></label>
                                <select id="result_type_id" name="result_type_id" class="select2 form-select @error('result_type_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Result Type</option>
                                    @foreach ($resultTypes as $resultType)
                                        <option @if (old('result_type_id') == $resultType->id)
                                            selected
                                        @endif value="{{$resultType->id}}">{{ucwords($resultType->name)}}</option>
                                    @endforeach
                                </select>
                                @error('result_type_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-2">
                                <label for="result" class="form-label">Result : <span class="text-danger">*</span></label>
                                <input class="form-control @error('result') is-invalid @enderror" type="text" name="result" id="result" value="{{old('result')}}" />
                                @error('result')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="passing_year" class="form-label">Passing Year : <span class="text-danger">*</span></label>
                                <input class="form-control @error('passing_year') is-invalid @enderror" type="text" name="passing_year" id="passing_year" value="{{old('passing_year')}}" />
                                @error('passing_year')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="duration">Duration : <span class="text-danger">*</span></label>
                                <select id="duration" name="duration" class="select2 form-select @error('duration') is-invalid @enderror">
                                    <option value="" disabled selected>Select Duration</option>
                                    @for ($i = 1; $i <= 6; $i++)
                                    <option @if (old('duration') == $i)
                                            selected
                                        @endif value="{{ $i }}">{{ $i }} Year</option>
                                    The current value is 
                                    @endfor
                                </select>
                                @error('duration')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-label-secondary">Reset</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection