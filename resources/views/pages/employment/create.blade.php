@extends('layouts.app')
@section('page_title', 'Create Employment Details')
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
                <li class="breadcrumb-item active">Create Employment Details</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Create Employment Details</h4>
                    <a href="{{route('employments.index')}}" class="btn btn-danger">Back</a>
                </div>
                <div class="card-body">
                    <form  action="{{route('employments.store')}}" method="post">
                        @csrf
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-6 mb-2">
                                <label for="company_name" class="form-label">Organization Name : <span class="text-danger">*</span></label>
                                <input class="form-control @error('company_name') is-invalid @enderror" type="text" name="company_name" id="company_name" value="{{old('company_name')}}"/>
                                @error('company_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="industry_id">Industry Type : <span class="text-danger">*</span></label>
                                <select id="industry_id" name="industry_id" class="select2 form-select @error('industry_id') is-invalid @enderror">
                                    <option value="" disabled selected>Select Degree Type</option>
                                    @foreach ($industries as $industry)
                                        <option @if (old('industry_id') == $industry->id)
                                            selected
                                        @endif value="{{$industry->id}}">{{ucwords($industry->name)}}</option>
                                    @endforeach
                                </select>
                                @error('industry_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="company_location" class="form-label">Company Location : <span class="text-danger">*</span></label>
                                <input class="form-control @error('company_location') is-invalid @enderror" type="text" name="company_location" id="company_location" value="{{old('company_location')}}"/>
                                @error('company_location')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="designation" class="form-label">Designation : <span class="text-danger">*</span></label>
                                <input class="form-control @error('designation') is-invalid @enderror" type="text" name="designation" id="designation" value="{{old('designation')}}"/>
                                @error('designation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="department" class="form-label">Department : <span class="text-danger">*</span></label>
                                <input class="form-control @error('department') is-invalid @enderror" type="text" name="department" id="department" value="{{old('department')}}"/>
                                @error('department')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="start_date" class="form-label">Start Date : <span class="text-danger">*</span></label>
                                <input class="form-control @error('start_date') is-invalid @enderror" type="date" name="start_date" id="start_date" value="{{old('start_date')}}"/>
                                @error('start_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="end_date" class="form-label">End Date : </label>
                                <input class="form-control @error('end_date') is-invalid @enderror" type="date" name="end_date" id="end_date" value="{{old('end_date')}}"/>
                                @error('end_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-12 mb-2">
                                <label for="responsibilities" class="form-label">Responsibilities : <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('responsibilities') is-invalid @enderror" name="responsibilities" id="responsibilities" cols="30" rows="3">{{old('responsibilities')}}</textarea>
                                @error('responsibilities')
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