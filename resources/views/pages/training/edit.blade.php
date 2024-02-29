@extends('layouts.app')
@section('page_title', 'Edit Training Details')
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
                <li class="breadcrumb-item active">Edit Training Details</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Edit Training Details</h4>
                    <a href="{{route('trainings.index')}}" class="btn btn-danger">Back</a>
                </div>
                <div class="card-body">
                    <form  action="{{route('trainings.update', $training->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-6 mb-2">
                                <label for="roll" class="form-label">Training Name : <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{$training->name}}"/>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="institute_name" class="form-label">Institute Name : </label>
                                <input class="form-control @error('institute_name') is-invalid @enderror" type="text" name="institute_name" id="institute_name" value="{{$training->institute_name}}"/>
                                @error('institute_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="start_date" class="form-label">Start Date : <span class="text-danger">*</span></label>
                                <input class="form-control @error('start_date') is-invalid @enderror" type="date" name="start_date" id="start_date" value="{{$training->start_date}}"/>
                                @error('start_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="end_date" class="form-label">End Date : <span class="text-danger">*</span></label>
                                <input class="form-control @error('end_date') is-invalid @enderror" type="date" name="end_date" id="end_date" value="{{$training->end_date}}"/>
                                @error('end_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="description" class="form-label">Course Description : <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="3">{{$training->description}}</textarea>
                                @error('description')
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