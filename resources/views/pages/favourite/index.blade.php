@extends('layouts.app')
@section('page_title', 'Employment Details')
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
                    <li class="breadcrumb-item active">Favourite Jobs</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Favourite Jobs Details</h4>
                </div>
                <div class="card-body mt-3">
                    <div class="row">
                        <table class="table table-hover table-responsive">
                            @if ($favouriteJobs->isEmpty())
                                <h6 class="text-center py-2">No Record Found. Please inster a new record</h6>
                            @else
                                <thead class="table-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>url</th>
                                    <th>Created At</th>
                                    <th>Apply Last Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach ($favouriteJobs as $key => $favouriteJob)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <span class="fw-medium">{{ucwords($favouriteJob->job->job_title)}}</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <a target="_blank" class="text-white" href="{{route('frontend.job.show', $favouriteJob->job->slug)}}">View</a></button>
                                        </td>
                                        <td>{{$favouriteJob->created_at->toFormattedDateString()}}</td>
                                        <td>{{\Carbon\Carbon::parse($favouriteJob->job->job_expiry_date)->format('d M, Y')}}</td>
                                        <td>
                                            <form action="{{route('favourite-jobs.destroy', $favouriteJob->id)}}" method="POST">
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
