@extends('admin.layouts.app')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Permissions</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Permissions</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPermissionModal">Add Permission</button>
            </div>
            <div class="card-body">
                <div>
                    <table class="table table-hover table-responsive">
                        @if ($permissions->isEmpty())
                            <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                        @else
                        <thead class="table-light">
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($permissions as $id => $permission)
                                <tr>
                                    <td>{{++$id}}</td>
                                    <td>
                                        <span class="fw-medium">{{ucwords($permission->name)}}</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$permission->id.'PermissionModal'}}">
                                                    <i class="ti ti-pencil me-1"></i> Edit
                                                </button>
                                                <form action="{{route('permissions.destroy', $permission->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item delete">
                                                        <i class="ti ti-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- Edit Modal --}}
                                        <div class="modal fade" id="{{'edit'.$permission->id.'PermissionModal'}}" data-bs-backdrop="static" tabindex="-2">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <form class="modal-content" method="POST" action="{{route('permissions.update', $permission->id)}}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="backDropModalTitle">Edit Permission</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="permissionName" class="form-label">Permission Name</label>
                                                                <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter Permission Name" value="{{$permission->name}}">
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
<div class="modal fade" id="addPermissionModal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content" method="POST" action="{{route('permissions.store')}}">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="backDropModalTitle">Create Permission</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <label for="permissionName" class="form-label">Permission Name</label>
            <input type="text" id="permissionName" name="name" class="form-control" placeholder="Enter Permission Name">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Permission</button>
      </div>
    </form>
  </div>
</div>
    
@endsection