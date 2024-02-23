@extends('admin.layouts.app')
@section('page_title', 'City')
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#">Locations</a>
                    </li>
                    <li class="breadcrumb-item active">City</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">All Cities</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCountryModal">Add City</button>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-hover table-responsive">
                            @if ($cities->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                                <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Country Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($cities as $id => $city)
                                        <tr>
                                            <td>{{++$id}}</td>
                                            <td>
                                                <span class="fw-medium">{{ucwords($city->name)}}</span>
                                            </td>
                                            <td>{{$city->country->name}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$city->id.'CountryModal'}}">
                                                            <i class="ti ti-pencil me-1"></i> Edit
                                                        </button>
                                                        <form action="{{route('cities.destroy', $city->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item delete">
                                                                <i class="ti ti-trash me-1"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal --}}
                                                <div class="modal fade" id="{{'edit'.$city->id.'CountryModal'}}" data-bs-backdrop="static" tabindex="-2">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <form class="modal-content" method="POST" action="{{route('cities.update', $city->id)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="backDropModalTitle">Edit Country</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="permissionName" class="form-label">Country Name</label>
                                                                        <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter Permission Name" value="{{$city->name}}">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="exampleFormControlSelect1" class="form-label">Country Name</label>
                                                                        <select name="country_id" class="form-select" id="exampleFormControlSelect1">
                                                                            <option selected disabled>Select Country</option>
                                                                            @foreach ($countries as $country)
                                                                                <option @if ($city->country->id == $country->id)
                                                                                    selected
                                                                                @endif value="{{$country->id}}">{{$country->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update Permission</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addCountryModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form id="addCityForm" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Create Country</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="permissionName" class="form-label">City Name</label>
                            <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter city name">
                            <span id="name_error" class="text-danger"></span>
                        </div>
                        <div class="col-md-12">
                            <label for="exampleFormControlSelect1" class="form-label">Country Name</label>
                            <select name="country_id" class="form-select" id="exampleFormControlSelect1">
                                <option selected disabled>Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            <span id="country_id_error" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary saveBtn">Save</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('custom_js')
    <script>
        $(document).ready(()=>{
            $('#addCityForm').submit((event)=>{
                event.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('cities.store') }}',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: ()=>{
                        $('.saveBtn').html('<span class="spinner-border me-1" role="status" aria-hidden="true"></span>Loading...')
                        $('.saveBtn').prop('disabled', true);
                    },
                    complete: ()=>{
                        $('.saveBtn').html('Save')
                        $('.saveBtn').prop('disabled', false);
                    },
                    success: (data)=>{
                        // if(data.success == true){
                        //     printSuccessMsg(data.msg);
                        // }else if(data.success == false){
                        //     printErrorMsg(data.msg);
                        // }else{
                        //     printValidationErrorMsg(data.msg)
                        // }
                        console.log(data.msg)
                    },
                    error: (error)=>{
                        console.log(error)
                    }
                });
                return false;

            });
        });
    </script>
    
@endpush