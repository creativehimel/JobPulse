@extends('admin.layouts.app')
@section('page_title', 'Country')
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
                <li class="breadcrumb-item active">Country</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">All Countries</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCountryModal">Add Country</button>
            </div>
            <div class="card-body">
                <div>
                    <table class="table table-hover table-responsive">
                        @if ($countries->isEmpty())
                            <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                        @else
                            <thead class="table-light">
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>ISO Code</th>
                                <th>Country Number Code</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($countries as $id => $country)
                                    <tr>
                                        <td>{{++$id}}</td>
                                        <td>
                                            <span class="fw-medium">{{ucwords($country->name)}}</span>
                                        </td>
                                        <td>{{$country->short_code}}</td>
                                        <td>{{$country->phone_code}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$country->id.'CountryModal'}}">
                                                        <i class="ti ti-pencil me-1"></i> Edit
                                                    </button>
                                                    <form action="{{route('countries.destroy', $country->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item delete">
                                                            <i class="ti ti-trash me-1"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- Edit Modal --}}
                                            <div class="modal fade" id="{{'edit'.$country->id.'CountryModal'}}" data-bs-backdrop="static" tabindex="-2">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <form class="modal-content" method="POST" action="{{route('countries.update', $country->id)}}">
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
                                                                    <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter Permission Name" value="{{$country->name}}">
                                                                </div>
                                                                <div class="col-md-12 mb-2">
                                                                    <label for="permissionName" class="form-label">Country ISO code</label>
                                                                    <input type="text" id="permissionName" name="short_code" class="form-control" placeholder="ISO country code, uppercase. Ex: US." value="{{$country->short_code}}">
                                                                    <span class="fs-tiny ps-1">Find country ISO code from here: https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes</span>
                                                                </div>
                                                                <div class="col-md-12 mb-1">
                                                                    <label for="permissionName" class="form-label">Country phone code</label>
                                                                    <input type="text" id="permissionName" name="phone_code" class="form-control" placeholder="Enter country phone number code" value="{{$country->phone_code}}">
                                                                    <span class="fs-tiny ps-1">Find country phone number code from here: https://en.wikipedia.org/wiki/List_of_country_calling_codes</span>
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
    <form class="modal-content" method="POST" action="{{route('countries.store')}}">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="backDropModalTitle">Create Country</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 mb-2">
            <label for="permissionName" class="form-label">Country Name</label>
            <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter country name">
          </div>
          <div class="col-md-12 mb-2">
            <label for="permissionName" class="form-label">Country ISO code</label>
            <input type="text" id="permissionName" name="short_code" class="form-control" placeholder="ISO country code, uppercase. Ex: US.">
            <span class="fs-tiny ps-1">Find country ISO code from here: https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes</span>
          </div>
          <div class="col-md-12 mb-1">
            <label for="permissionName" class="form-label">Country phone code</label>
            <input type="text" id="permissionName" name="phone_code" class="form-control" placeholder="Enter country phone number code">
            <span class="fs-tiny ps-1">Find country phone number code from here: https://en.wikipedia.org/wiki/List_of_country_calling_codes</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>
    
@endsection()