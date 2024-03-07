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
                @foreach ($jobCategories->take(7) as $jobCategory)
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp">
                            <div class="text-center">
                                <a href="job-grid.html">
                                    <figure><img alt="jobhub" src="assets/imgs/theme/icons/marketing.svg" /></figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">{{$jobCategory->name}}</a>
                            </h5>
                            <p class="text-center text-stroke-40 mt-20">156 Available Vacancy</p>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="text-center mt-15">
                            <h3>18,265+</h3>
                        </div>
                        <p class="text-center mt-30 text-stroke-40">Jobs are waiting for you</p>
                        <div class="text-center mt-30">
                            <div class="box-button-shadow"><a href="job-grid.html" class="btn btn-default">Explore more</a></div>
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
                    <p class="text-md-lh28 color-black-5wow animate__animated animate__fadeInUp" data-wow-delay=".1s">8 new
                        opportunities posted today!</p>
                </div>
                <div class="col-lg-8 text-xl-end text-start">
                    <ul class="nav nav-right float-xl-end float-start" role="tablist">
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><button id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one-1" aria-selected="true" class="active">Design</button></li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><button id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two-1" aria-selected="false">Marketing</button></li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".3s"><button id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three-1" aria-selected="false">Design</button></li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><button id="nav-tab-four-1" data-bs-toggle="tab" data-bs-target="#tab-four-1" type="button" role="tab" aria-controls="tab-four-1" aria-selected="false">Service</button></li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><button id="nav-tab-five-1" data-bs-toggle="tab" data-bs-target="#tab-five-1" type="button" role="tab" aria-controls="tab-five-1" aria-selected="false">Health Care</button></li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".6s"><button id="nav-tab-six-1" data-bs-toggle="tab" data-bs-target="#tab-six-1" type="button" role="tab" aria-controls="tab-six-1" aria-selected="false">Writing</button></li>
                    </ul>
                </div>
            </div>
            <div class="mt-70">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img src="assets/imgs/jobs/job-1.png" alt="jobhub" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-1.svg" alt="jobhub" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $3200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img src="assets/imgs/jobs/job-2.png" alt="jobhub" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-2.svg" alt="jobhub" /></span> <span>Gucci</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $1200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img src="assets/imgs/jobs/job-3.png" alt="jobhub" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-3.svg" alt="jobhub" /></span> <span>Versace</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $2600<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img src="assets/imgs/jobs/job-4.png" alt="jobhub" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-4.svg" alt="jobhub" /></span> <span>Hermes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img src="assets/imgs/jobs/job-5.png" alt="jobhub" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-5.svg" alt="jobhub" /></span> <span>Burberry</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $125<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img src="assets/imgs/jobs/job-6.png" alt="jobhub" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-6.svg" alt="jobhub" /></span> <span>Louis Vuitton</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A complete social media business pages setup</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="#">
                                            <figure><img src="assets/imgs/jobs/job-7.png" alt="jobhub" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent22</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-1.svg" alt="jobhub" /></span> <span>Levis</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">35 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $4200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img src="assets/imgs/jobs/job-8.png" alt="jobhub" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-2.svg" alt="jobhub" /></span> <span>Armani</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $1200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-9.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-3.svg" /></span> <span>Prada</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $2600<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-10.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-4.svg" /></span> <span>Adidas</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-1.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-5.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $125<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-2.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-6.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-1.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-1.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">39 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $5200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-2.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-2.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $1200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-3.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-3.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $2600<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-4.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-4.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-5.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-5.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $125<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-6.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-6.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-four-1" role="tabpanel" aria-labelledby="tab-four-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-1.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-1.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">53 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $700<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-2.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-2.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $1200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-3.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-3.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $2600<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-4.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-4.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-5.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-5.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $125<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-6.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-6.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-five-1" role="tabpanel" aria-labelledby="tab-five-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-1.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-1.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">46 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $800<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-2.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-2.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $1200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-3.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-3.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $2600<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-4.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-4.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-5.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-5.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $125<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-6.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-6.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-six-1" role="tabpanel" aria-labelledby="tab-six-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-1.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-1.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Senior Full Stack Engineer, Creator Success Full Time</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $3200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-2.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-2.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A professional Facebook cover photo banner design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $1200<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-3.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-3.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Unique and aesthetic Instagram post images</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $2600<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-4.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-4.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">Premium quality Instagram post and stories</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-5.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-5.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">An amazing facebook banner, cover design</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $125<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card-grid-2 hover-up">
                                    <div class="text-center card-grid-2-image">
                                        <a href="job-single.html">
                                            <figure><img alt="jobhub" src="assets/imgs/jobs/job-6.png" /></figure>
                                        </a>
                                        <label class="btn-urgent">Urgent</label>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-7 col-6">
                                                <a href="employers-single.html" class="card-2-img-text">
                                                    <span class="card-grid-2-img-small"><img alt="jobhub" src="assets/imgs/jobs/logos/logo-6.svg" /></span> <span>Alithemes</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-5 col-6 text-end">
                                                <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                            </div>
                                        </div>
                                        <h5 class="mt-20"><a href="job-single.html">A complete social media pages setup for your business.</a></h5>
                                        <div class="mt-15">
                                            <span class="card-time">3 mins ago</span>
                                            <span class="card-location">Chicago</span>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-8">
                                                    <span class="card-text-price"> $120<span>/Month</span> </span>
                                                </div>
                                                <div class="col-lg-5 col-4 text-end">
                                                    <span><img alt="jobhub" src="assets/imgs/theme/icons/shield-check.svg" /></span>
                                                    <span class="ml-5"><img alt="jobhub" src="assets/imgs/theme/icons/bookmark.svg" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection