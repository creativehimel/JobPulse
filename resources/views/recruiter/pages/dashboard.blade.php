@extends('recruiter.layouts.app')
@section('page_title', "Dashboard")
@section('main_content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-border-shadow-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-list-check ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{$totalJobPost}}</h4>
                    </div>
                    <p class="mb-1">Total Jobs Posted</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-border-shadow-success">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-success"><i class="ti ti-checkbox ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{$totalJobApproved}}</h4>
                    </div>
                    <p class="mb-1">Total Jobs Approved</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-border-shadow-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-warning"><i class="ti ti-report ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{$totalJobPending}}</h4>
                    </div>
                    <p class="mb-1">Total Jobs Pending</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-border-shadow-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                            <span class="avatar-initial rounded bg-label-danger"><i class="ti ti-ban ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0">{{$totalJobRejected}}</h4>
                    </div>
                    <p class="mb-1">Total Jobs Rejected</p>
                </div>
            </div>
        </div>
    </div>
@endsection
