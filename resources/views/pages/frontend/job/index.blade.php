@extends('layouts.frontEnd')

@section('page_title', 'Job')

@section('content')


<section class="section-box mt-80">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                <div class="content-page">
                    <div class="box-filters-job mt-15 mb-10">
                        <div class="row">
                            <div class="col-lg-7">
                                <span class="text-small">Showing <strong>41-60 </strong>of <strong>944 </strong>jobs</span>
                            </div>
                            <div class="col-lg-5 text-lg-end mt-sm-15">
                                <div class="display-flex2">
                                    <span class="text-sortby">Sort by:</span>
                                    <div class="dropdown dropdown-sort">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownSort" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span> <i class="fi-rr-angle-small-down"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                            <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                            <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                            <li><a class="dropdown-item" href="#">Rating Post</a></li>
                                        </ul>
                                    </div>
                                    <div class="box-view-type">
                                        <a href="job-grid.html" class="view-type"><img src="{{asset('frontEndAssets')}}/imgs/theme/icons/icon-list.svg" alt="jobhub" /></a>
                                        <a href="job-list.html" class="view-type"><img src="{{asset('frontEndAssets')}}/imgs/theme/icons/icon-grid.svg" alt="jobhub" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-list-list mb-15">
                        <div class="list-recent-jobs">
                            <!-- Item job -->
                            @foreach($jobs as $job)
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
                                                    <a href="job-grid.html" class="btn btn-small background-urgent btn-pink mr-5">{{$jobTag->name}}</a>
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

                            <!-- End item job -->
                        </div>
                    </div>
                    <div class="paginations">
                        <ul class="pager">
                            <li><a href="#" class="pager-prev"></a></li>
                            <li><a href="#" class="pager-number">1</a></li>
                            <li><a href="#" class="pager-number">2</a></li>
                            <li><a href="#" class="pager-number">3</a></li>
                            <li><a href="#" class="pager-number">4</a></li>
                            <li><a href="#" class="pager-number">5</a></li>
                            <li><a href="#" class="pager-number active">6</a></li>
                            <li><a href="#" class="pager-number">7</a></li>
                            <li><a href="#" class="pager-next"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">

                <div class="sidebar-shadow none-shadow mb-30">
                    <div class="sidebar-filters">
                        <div class="filter-block mb-30">
                            <h5 class="medium-heading mb-15">Categoy</h5>
                            <div class="form-group select-style select-style-icon">
                                <select class="form-control form-icons select-active">
                                    <option selected disabled>Select Job Category</option>
                                    @foreach($jobCategories as $jobCategory)
                                        <option value="{{$jobCategory->id}}">{{$jobCategory->name}}</option>
                                    @endforeach
                                </select>
                                <i class="fi-rr-briefcase"></i>
                            </div>
                        </div>
                        <div class="filter-block mb-30">
                            <h5 class="medium-heading mb-15">Job type</h5>
                            <div class="form-group">
                                <ul class="list-checkbox">
                                    @foreach($jobTypes as $jobType)
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"> <span class="text-small">{{$jobType->name}}</span>
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="number-item">235</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="filter-block mb-30">
                            <h5 class="medium-heading mb-10">Experience Level</h5>
                            <div class="form-group">
                                <ul class="list-checkbox">
                                    @foreach($experienceLevels as $experienceLevel)
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"> <span class="text-small">{{$experienceLevel->name}}</span>
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="number-item">76</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="filter-block mb-40">
                            <h5 class="medium-heading mb-25">Salary Range</h5>
                            <div class="">
                                <div class="row mb-20">
                                    <div class="col-sm-12">
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="lb-slider">From</label>
                                        <div class="form-group minus-input">
                                            <input type="text" name="min-value-money" class="input-disabled form-control min-value-money" disabled="disabled" value="" />
                                            <input type="hidden" name="min-value" class="form-control min-value" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="lb-slider">To</label>
                                        <div class="form-group">
                                            <input type="text" name="max-value-money" class="input-disabled form-control max-value-money" disabled="disabled" value="" />
                                            <input type="hidden" name="max-value" class="form-control max-value" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons-filter">
                            <button class="btn btn-default">Apply filter</button>
                            <button class="btn">Reset filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-box">
    <div class="container">
        <ul class="list-partners">
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay="0s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/samsung.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/google.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/facebook.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/pinterest.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".4s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/avaya.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".5s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/forbes.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/avis.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/nielsen.svg" /></figure>
                </a>
            </li>
            <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">
                <a href="#">
                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/jobs/logos/doordash.svg" /></figure>
                </a>
            </li>
        </ul>
    </div>
</div>
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
