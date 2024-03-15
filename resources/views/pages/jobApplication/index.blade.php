@extends('layouts.app')
@section('page_title', 'Job Application Details')
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
                    <li class="breadcrumb-item active">Job Applications</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Job Application Details</h4>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        <table class="table table-hover table-responsive">
                            @if ($jobApplications->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                                <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>url</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach ($jobApplications as $key => $jobApplication)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <span class="fw-medium">{{ucwords($jobApplication->job->job_title)}}</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <a target="_blank" class="text-white" href="{{route('frontend.job.show', $jobApplication->job->slug)}}">View</a></button>
                                        </td>
                                        <td>
                                            @if($jobApplication->status == 1)
                                                <span class="badge bg-success">Approved</span>
                                            @elseif($jobApplication->status == 2)
                                                <span class="badge bg-danger">Rejected</span>
                                            @else
                                                <span class="badge bg-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{$jobApplication->created_at->toFormattedDateString()}}</td>
                                        <td>
                                            <form action="{{route('job-applications.destroy', $jobApplication->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item delete">
                                                    <i class="ti ti-trash me-1"></i> Delete
                                                </button>
                                            </form>
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
