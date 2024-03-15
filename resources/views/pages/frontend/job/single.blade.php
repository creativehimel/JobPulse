@extends('layouts.frontEnd')

@section('page_title', 'Job')

@section('content')

<section class="section-box">
    <div class="box-head-single">
        <div class="container">
            <h3>{{$job->job_title}}</h3>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li>Jobs listing</li>
            </ul>
        </div>
    </div>
</section>
<section class="section-box mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="single-image-feature">
                    <figure><img alt="jobhub" src="assets/imgs/page/job-single/img-job-feature.png" class="img-rd-15" />
                    </figure>
                </div>
                <div class="content-single">
                    <p class="text-justify">{!!$job->description!!}</p>
                </div>
                <div class="author-single">
                    <span>AliThemes</span>
                </div>
                <div class="single-apply-jobs">
                    <div class="row align-items-center">
                        <div class="col-md-5 d-flex">

                            <form action="{{route('job-applications.store')}}" method="post">
                                @csrf
                                <input type="hidden" name="job_id" value="{{$job->id}}">
                                <button type="submit" class="btn btn-default mr-15">Apply now</button>
                            </form>
                            <form action="{{route('favourite-jobs.store')}}" method="post">
                                @csrf
                                <input type="hidden" name="job_id" value="{{$job->id}}">
                                <button type="submit" class="btn btn-default mr-15">Save job</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="single-recent-jobs">
                    <h4 class="heading-border"><span>Recent jobs</span></h4>
                    <div class="list-recent-jobs">
                        @if($latestJobs->isEmpty())
                            <p class="text-center fs-3">No Recent Jobs Found</p>
                        @else
                            @foreach($latestJobs as $job)
                                <div class="card-job hover-up wow animate__animated animate__fadeIn">
                                    <div class="card-job-top">
                                        <div class="card-job-top--image">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/job/digital.png" /></figure>
                                        </div>
                                        <div class="card-job-top--info">
                                            <h6 class="card-job-top--info-heading"><a href="{{route('frontend.job.show', $job->slug)}}">{{$job->job_title}}</a></h6>
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <a href="employers-grid.html"> <a href="employers-grid.html"><span class="card-job-top--company">AliStudio, Inc</span></a></a>
                                                    <span class="card-job-top--location text-sm"><i class="fi-rr-marker"></i> {{$job->city->name}},
                                                    {{$job->country->name}}</span>
                                                    <span class="card-job-top--type-job text-sm"><i class="fi-rr-briefcase"></i> {{$job->jobType->name}}</span>
                                                    <span class="card-job-top--post-time text-sm"><i class="fi-rr-clock"></i> {{\Carbon\Carbon::parse($job->created_at)->format('d M, Y')}}</span>
                                                </div>
                                                <div class="col-lg-5 text-lg-end">
                                                    <span class="card-job-top--price">{{$job->salaryCurrency->currency_icon}} {{$job->salary_from}} - {{$job->salary_to}}<span>/{{$job->salaryPeriod->name}}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-job-description mt-20">
                                        We want someone who has been doing this for a solid 2-3 years. We want someone who can demonstrate an
                                        extremely strong portfolio. Create deliverables for your product area (for example competitive analyses,
                                        user flows.
                                    </div>
                                    <div class="card-job-bottom mt-25">
                                        <div class="row">
                                            <div class="col-lg-9 col-sm-8 col-12">
                                                @foreach($job->jobTags as $jobTag)
                                                    <a href="job-grid.html" class="btn btn-small background-blue-light btn-pink mr-5">{{$jobTag->name}}</a>
                                                @endforeach
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 text-lg-end d-lg-block d-none">
                                                <form action="{{route('favourite-jobs.store')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="job_id" value="{{$job->id}}">
                                                    <button type="submit" class="ml-5 btn text-white"><span class="ml-5"><img src="{{asset('frontEndAssets')}}/imgs/theme/icons/bookmark.svg" alt="jobhub"></span></button>
                                                </form>
                                                <form action="{{route('job-applications.store')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="job_id" value="{{$job->id}}">
                                                    <button type="submit" class="ml-5 btn btn-small btn-primary text-white">Apply</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="sidebar-shadow">
                    <div class="sidebar-heading">
                        <div class="avatar-sidebar">
                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/job-single/avatar-job.png" /></figure>
                            <div class="sidebar-info">
                                <span class="sidebar-company">AliStudio, Inc</span>
                                <span class="sidebar-website-text">alithemes.com</span>
                                <div class="dropdowm">
                                    <button class="btn btn-dots btn-dots-abs-right dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-menu-light">
                                        <li><a class="dropdown-item" href="#">Contact</a></li>
                                        <li><a class="dropdown-item" href="#">Bookmark</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-description mt-15">
                        We're looking to add more product designers to our growing teams.
                    </div>
                    <div class="text-start mt-20 d-flex">
                        <form action="{{route('job-applications.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="job_id" value="{{$job->id}}">
                            <button type="submit" class="btn btn-default mr-15">Apply now</button>
                        </form>
                        <form action="{{route('favourite-jobs.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="job_id" value="{{$job->id}}">
                            <button type="submit" class="btn btn-default mr-15">Save job</button>
                        </form>
                    </div>
                    <div class="sidebar-list-job">
                        <ul>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Job Type</span>
                                    <strong class="small-heading">{{$job->jobType->name}}</strong>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Location</span>
                                    <strong class="small-heading">{{$job->city->name}}, {{$job->country->name}}</strong>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Salary</span>
                                    <strong class="small-heading">{{$job->salaryCurrency->currency_icon}} {{$job->salary_from}} - {{$job->salary_to}}</strong>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Date posted</span>
                                    <strong class="small-heading">{{\Carbon\Carbon::parse($job->created_at)->format('d M, Y')}}</strong>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Expiration date</span>
                                    <strong class="small-heading">{{\Carbon\Carbon::parse($job->job_expiry_date)->format('d M, Y')}}</strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-team-member pt-40">
                        <h6 class="small-heading">Contact Info</h6>
                        <div class="info-address">
                            <span><i class="fi-rr-marker"></i> <span>{{$job->company->location}}, {{$job->city->name}}, {{$job->country->name}}</span></span>
                            <span><i class="fi-rr-headset"></i> <span>(+91) - 540-025-124553 </span></span>
                            <span><i class="fi-rr-world"></i> <span><a href="#" class="__cf_email__" data-cfemail="c6a5a9a8b2a7a5b286a8a3b5b2aba7b4b2e8a5a9ab">{{$job->company->website}}</a></span></span>
                            <span><i class="fi-rr-time-fast"></i> <span>10:00 - 18:00, Mon - Sat </span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-box mt-50 mb-60">
    <div class="container">
        <div class="box-newsletter">
            <h5 class="text-md-newsletter">Sign up to get</h5>
            <h6 class="text-lg-newsletter">the latest jobs</h6>
            <div class="box-form-newsletter mt-30">
                <form class="form-newsletter">
                    <input type="text" class="input-newsletter" value="" placeholder="contact.alithemes@gmail.com" />
                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="box-newsletter-bottom">
            <div class="newsletter-bottom"></div>
        </div>
    </div>
</section>

@endsection
