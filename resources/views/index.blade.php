@extends('layouts.frontEnd')
@section('page_title', 'Home Page')

@section('content')
    <section class="section-box">
        <div class="banner-hero banner-homepage-3">
            <div class="banner-inner">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="block-banner">
                            <span class="text-small-primary text-small-primary--disk text-uppercase  wow animate__animated animate__fadeInUp">Best jobs place</span>
                            <h1 class="heading-banner wow animate__animated animate__fadeInUp">The Easiest Way to Get Your New Job</h1>
                            <div class="banner-description mt-30 wow animate__animated animate__fadeInUp">Each month, more than 3 million job seekers turn to
                                website in their search for work, making over 140,000 applications every single day</div>
                            <div class="form-find mt-60 wow animate__animated animate__fadeInUp">
                                <form>
                                    <input type="text" class="form-input input-keysearch mr-10" placeholder="Job title" />
                                    <select class="form-input mr-10 select-active">
                                        <option value="" selected disabled>Location</option>
                                        @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach

                                    </select>
                                    <button class="btn btn-default btn-find">Find now</button>
                                </form>
                            </div>
                            <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp">
                                <strong>Popular Searches:</strong>
                                <a href="#">Designer</a>, <a href="#">Developer</a>, <a href="#">Web</a>, <a href="#">Engineer</a>, <a href="#">Senior</a>,
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-imgs">
                            <img alt="jobhub" src="{{asset('frontEndAssets/imgs/page/homepage3/banner-main.png')}}" class="img-responsive shape-1" />
                            <span class="banner-sm1"><img alt="jobhub" src="{{asset('frontEndAssets/imgs/page/homepage3/banner-sm1.png')}}" class="img-responsive shape-3" /></span>
                            <span class="banner-sm2"><img alt="jobhub" src="{{asset('frontEndAssets/imgs/page/homepage3/banner-sm2.png')}}" class="img-responsive shape-2" /></span>
                            <span class="banner-sm3"><img alt="jobhub" src="{{asset('frontEndAssets/imgs/page/homepage3/banner-sm3.png')}}" class="img-responsive shape-2" /></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp">Browse by category</h2>
                    <p class="text-md-lh28 color-black-5 wow animate__animated animate__fadeInUp">Find the type of work
                        you need, clearly defined and ready to start. Work begins as soon as you purchase and provide
                        requirements.</p>
                </div>
                <div class="col-lg-5 text-lg-end text-start wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <a href="job-grid-2.html" class="mt-sm-15 mt-lg-30 btn btn-border icon-chevron-right">Browse all</a>
                </div>
            </div>
            <div class="row mt-70">
                @if($jobCategories->isNotEmpty())
                    @foreach ($jobCategories as $jobCategory)
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card-grid hover-up wow animate__animated animate__fadeInUp">
                                <h5 class="text-center card-heading"><a href="{{route('frontend.jobs.filter', $jobCategory->slug)}}">{{$jobCategory->name}}</a>
                                </h5>
                                <p class="text-center text-stroke-40">0 Available Vacancy</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="section-box mt-40">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-4">
                    <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp">Featured Jobs</h2>
                </div>
            </div>
            <div class="mt-70">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="row">
                            @if($featuredJobs->isEmpty())
                                <p class="text-center fs-4">No Featured Jobs Found</p>
                            @else
                                @foreach($featuredJobs as $job)
                                    @include('components.frontend.job.featuredJob')
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-40">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-4">
                    <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp">Recent Jobs</h2>
                </div>
            </div>
            <div class="mt-70">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="row">
                            @if($latestJobs->isNotEmpty())
                                @foreach($latestJobs as $job)
                                    @include('components.frontend.job.latestJob')
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
