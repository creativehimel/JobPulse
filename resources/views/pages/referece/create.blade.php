@extends('layouts.app')
@section('page_title', 'Create Reference Details')
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
                <li class="breadcrumb-item active">Create Reference Details</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Create Reference Details</h4>
                    <a href="{{route('references.index')}}" class="btn btn-danger">Back</a>
                </div>
                <div class="card-body">
                    <form  action="{{route('references.store')}}" method="post">
                        @csrf
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-6 mb-2">
                                <label for="name" class="form-label">Name : <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}"/>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-2">
                                <label for="organization" class="form-label">Organization : <span class="text-danger">*</span></label>
                                <input class="form-control @error('organization') is-invalid @enderror" type="text" name="organization" id="organization" value="{{old('organization')}}"/>
                                @error('organization')
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
                                <label for="address" class="form-label">Address : <span class="text-danger">*</span></label>
                                <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" value="{{old('address')}}"/>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="phone" class="form-label">Enter your 11 digit mobile number : <span class="text-danger">*</span></label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{old('phone')}}"/>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="email" class="form-label">Email : </label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{old('email')}}"/>
                                @error('email')
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