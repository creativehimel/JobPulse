@extends('recruiter.layouts.app')
@section('page_title', "All Jobs")
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
                    <li class="breadcrumb-item active">Jobs</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">All Jobs</h4>
                    <a class="btn btn-primary" href="{{route('jobs.create')}}">Add</a>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-hover table-responsive">
                            @if ($jobs->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                                <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Job Category</th>
                                    <th>Created At</th>
                                    <th>Featured</th>
                                    <th>Status</th>
                                    <th>Is Expired</th>
                                    <th>Applied</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($jobs as $id => $job)
                                        <tr>
                                            <td>{{++$id}}</td>
                                            <td>
                                                <span class="fw-medium">{{ucwords($job->job_title)}}</span>
                                            </td>
                                            <td>
                                                <span class="fw-medium">{{ucwords($job->jobCategory->name)}}</span>
                                            </td>
                                            <td>{{\Carbon\Carbon::parse($job->created_at)->format('d M, Y')}}</td>
                                            <td>
                                                @if ($job->is_featured == 1)
                                                    <span class="badge bg-label-primary me-1">Yes</span>
                                                @else
                                                    <span class="badge bg-label-danger me-1">No</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($job->status == 1)
                                                    <span class="badge bg-label-primary me-1">Published</span>
                                                @else
                                                    <span class="badge bg-label-danger me-1">Pending</span>
                                                @endif
                                            </td>
                                            <td>{{\Carbon\Carbon::parse($job->job_expiry_date)->format('d M, Y')}}</td>
                                            <td>{{count($job->jobApplication)}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="{{'#edit'.$job->id.'CountryModal'}}">
                                                            <i class="ti ti-pencil me-1"></i> Edit
                                                        </button>
                                                        <form action="{{route('jobs.destroy', $job->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item delete">
                                                                <i class="ti ti-trash me-1"></i> Delete
                                                            </button>
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
@endsection
