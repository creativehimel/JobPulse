@extends('layouts.frontEnd')

@section('page_title', 'Filter By Category')

@section('content')
    <section class="section-box mt-80"></section>
<section class=" container my-5">
    <div class="row py-5">
        <div class="col-lg-12">
            @foreach($jobs as $job)
                @if($job->job == null)
                    <div class="text-center">
                        <h3 class="mb-5">Jobs are not found in this category</h3>
                        <img src="{{asset('frontEndAssets/imgs/page/no-search-found.svg')}}" alt="">
                    </div>
                @else
                    <div class="content-page">
                        <div class="job-list-list mb-15">
                            <div class="list-recent-jobs">
                                <!-- Item job -->
                                <div class="card-job hover-up wow animate__animated animate__fadeIn">
                                    <div class="card-job-top">
                                        <div class="card-job-top--image">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/job/digital.png" /></figure>
                                        </div>
                                        <div class="card-job-top--info">
                                            <h6 class="card-job-top--info-heading"><a href="job-single.html">{{$job->job->job_title}}</a></h6>
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <a href="employers-grid.html"> <a href="employers-grid.html"><span class="card-job-top--company">AliStudio, Inc</span></a></a>
                                                    <span class="card-job-top--location text-sm"><i class="fi-rr-marker"></i> ,
                                                NY</span>
                                                    <span class="card-job-top--type-job text-sm"><i class="fi-rr-briefcase"></i> Full
                                                time</span>
                                                    <span class="card-job-top--post-time text-sm"><i class="fi-rr-clock"></i> 3 mins ago</span>
                                                </div>
                                                <div class="col-lg-5 text-lg-end">
                                                    <span class="card-job-top--price">$500<span>/Hour</span></span>
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

                                                <a href="job-grid.html" class="btn btn-small background-urgent btn-pink mr-5">Urgent</a>
                                                <a href="job-grid-2.html" class="btn btn-small background-blue-light mr-5">Senior</a>
                                                <a href="job-grid.html" class="btn btn-small background-6 disc-btn">Full time</a>
                                            </div>
                                            <div class="col-lg-3 col-sm-4 col-12 text-lg-end d-lg-block d-none">
                                                <form action="{{route('favourite-jobs.store')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="job_id" value="{{$job->job->id}}">
                                                    <button type="submit" class="ml-5 btn text-white"><span class="ml-5"><img src="{{asset('frontEndAssets')}}/imgs/theme/icons/bookmark.svg" alt="jobhub"></span></button>
                                                </form>
                                                <form action="{{route('job-applications.store')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="job_id" value="{{$job->job->id}}">
                                                    <button type="submit" class="ml-5 btn btn-small btn-primary text-white">Apply</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End item job -->
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

@endsection
