@extends('admin.layouts.app')
@section('page_title', 'Salary Currency')
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#">Jobs</a>
                    </li>
                    <li class="breadcrumb-item active">Salary Currencies</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">All Salary Currencies</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-hover table-responsive">
                            @if ($salaryCurrencies->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                                <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Currency Name</th>
                                    <th>Currency Code</th>
                                    <th>Currency Icon</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($salaryCurrencies as $id => $salaryCurrency)
                                        <tr>
                                            <td>{{++$id}}</td>
                                            <td>
                                                <span class="fw-medium">{{ucwords($salaryCurrency->currency_name)}}</span>
                                            </td>
                                            <td>{{$salaryCurrency->currency_code}}</td>
                                            <td>{{$salaryCurrency->currency_icon}}</td>
                                            <td>
                                                @if ($salaryCurrency->status == 1)
                                                    <span class="badge bg-label-primary me-1">Active</span>
                                                @else
                                                    <span class="badge bg-label-danger me-1">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{$salaryCurrency->created_at->toFormattedDateString()}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$salaryCurrency->id.'Modal'}}">
                                                            <i class="ti ti-pencil me-1"></i> Edit
                                                        </button>
                                                        <form action="{{route('salary-currencies.destroy', $salaryCurrency->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item delete">
                                                                <i class="ti ti-trash me-1"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal --}}
                                                <div class="modal fade" id="{{'edit'.$salaryCurrency->id.'Modal'}}" data-bs-backdrop="static" tabindex="-2">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <form class="modal-content" method="POST" action="{{route('salary-currencies.update', $salaryCurrency->id)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="backDropModalTitle">Edit Salary Currency</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="permissionName" class="form-label">Currency Name</label>
                                                                        <input type="text" id="permissionName" name="currency_name" class="form-control" placeholder="Enter Permission Name" value="{{$salaryCurrency->currency_name}}">
                                                                        @error('currency_name')
                                                                            @php
                                                                                notify()->error($message)
                                                                            @endphp
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="permissionName" class="form-label">Currency Icon</label>
                                                                        <input type="text" id="permissionName" name="currency_icon" class="form-control" placeholder="Enter Permission Name" value="{{$salaryCurrency->currency_icon}}">
                                                                        @error('currency_icon')
                                                                            @php
                                                                                notify()->error($message)
                                                                            @endphp
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="permissionName" class="form-label">Currency Code</label>
                                                                        <input type="text" id="permissionName" name="currency_code" class="form-control" placeholder="Enter Permission Name" value="{{$salaryCurrency->currency_code}}">
                                                                        @error('currency_code')
                                                                            @php
                                                                                notify()->error($message)
                                                                            @endphp
                                                                        @enderror
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="exampleFormControlSelect1" class="form-label">Status</label>
                                                                        <select name="status" class="form-select" id="exampleFormControlSelect1">
                                                                            <option selected disabled>Select Status</option>
                                                                            <option @if ($salaryCurrency->status == 1)
                                                                                selected
                                                                            @endif value="1">Active</option>
                                                                            <option @if ($salaryCurrency->status == 0)
                                                                                selected
                                                                            @endif value="0">Inactive</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update</button>
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
    <div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content" method="POST" action="{{route('salary-currencies.store')}}">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Create Salary Currency</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <label for="categoryName" class="form-label">Currency Name</label>
                        <input type="text" id="categoryName" name="currency_name" class="form-control" placeholder="Enter career level name">
                        @error('currency_name')
                            @php
                                notify()->error($message)
                            @endphp
                        @enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="categoryName" class="form-label">Currency Icon</label>
                        <input type="text" id="categoryName" name="currency_icon" class="form-control" placeholder="Enter career level name">
                        @error('currency_icon')
                            @php
                                notify()->error($message)
                            @endphp
                        @enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="categoryName" class="form-label">Currency Code</label>
                        <input type="text" id="categoryName" name="currency_code" class="form-control" placeholder="Enter career level name">
                        @error('currency_code')
                            @php
                                notify()->error($message)
                            @endphp
                        @enderror
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