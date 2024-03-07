@extends('layouts.frontEnd')
@section('page_title', 'About Us')
@section('content')
    <section class="section-box bg-banner-about">
        <div class="banner-hero banner-about pt-20">
            <div class="banner-inner">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="block-banner">
                            <h1 class="heading-banner heading-lg">The #1 Job Board for Graphic Design Jobs</h1>
                            <div class="banner-description box-mw-70 mt-30">Search and connect with the right candidates faster. This talent seach gives you the opportunity to find candidates who may be a perfect fit for your role</div>
                            <div class="mt-60">
                                <div class="box-button-shadow mr-10">
                                    <a href="#" class="btn btn-default">Contact us</a>
                                </div>
                                <a href="#" class="btn">Support center</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-imgs">
                            <img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/banner-img.png" class="img-responsive main-banner shape-3" />
                            <span class="banner-sm-1"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/banner-sm-1.png" class="img-responsive shape-1" /></span>
                            <span class="banner-sm-2"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/banner-sm-2.png" class="img-responsive shape-1" /></span>
                            <span class="banner-sm-3"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/banner-sm-3.png" class="img-responsive shape-2" /></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="row pt-5">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-md-30">
                            <div class="card-grid-4 hover-up">
                                <div class="image-top-feature">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/market-research.svg" /></figure>
                                </div>
                                <div class="card-grid-4-info">
                                    <h5 class="mt-20">Market Research</h5>
                                    <p class="text-normal mt-15 mb-20">It is a long established fact that a reader will be.</p>
                                    <a href="#" class="btn-readmore icon-arrow">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-md-30">
                            <div class="card-grid-4 hover-up">
                                <div class="image-top-feature">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/creative-layout.svg" /></figure>
                                </div>
                                <div class="card-grid-4-info">
                                    <h5 class="mt-20">Creative Layout</h5>
                                    <p class="text-normal mt-15 mb-20">It is a long established fact that a reader will be.</p>
                                    <a href="#" class="btn-readmore icon-arrow">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-md-30">
                            <div class="card-grid-4 hover-up">
                                <div class="image-top-feature">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/digital-marketing.svg" /></figure>
                                </div>
                                <div class="card-grid-4-info">
                                    <h5 class="mt-20">Digital Marketing</h5>
                                    <p class="text-normal mt-15 mb-20">It is a long established fact that a reader will be.</p>
                                    <a href="#" class="btn-readmore icon-arrow">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card-grid-4 hover-up">
                                <div class="image-top-feature">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/seo-backlink.svg" /></figure>
                                </div>
                                <div class="card-grid-4-info">
                                    <h5 class="mt-20">SEO & Backlinks</h5>
                                    <p class="text-normal mt-15 mb-20">It is a long established fact that a reader will be.</p>
                                    <a href="#" class="btn-readmore icon-arrow">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-90 mb-80">
        <div class="container">
            <div class="block-job-bg block-job-bg-homepage-2">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-none d-md-block">
                        <div class="box-image-findjob findjob-homepage-2 ml-0 wow animate__animated animate__fadeIn">
                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/img-findjob.png" /></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="box-info-job pl-90 pt-30 pr-90">
                            <span class="text-blue wow animate__animated animate__fadeInUp">Find jobs</span>
                            <h5 class="heading-36 mb-30 mt-30 wow animate__animated animate__fadeInUp">Create free count and start apply your dream job today</h5>
                            <p class="text-lg wow animate__animated animate__fadeInUp">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                                simply dummy.
                            </p>
                            <div class="mt-30 wow animate__animated animate__fadeInUp">
                                <a href="job-grid.html" class="btn btn-default">Explore more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-90 mt-md-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <span class="text-lg text-brand wow animate__animated animate__fadeInUp">Online Marketing</span>
                    <h3 class="mt-20 mb-30 wow animate__animated animate__fadeInUp">Committed to top quality and results</h3>
                    <p class="mb-20 wow animate__animated animate__fadeInUp">Proin ullamcorper pretium orci. Donec necscele risque leo. Nam massa dolor imperdiet neccon sequata congue idsem. Maecenas malesuada faucibus finibus. </p>
                    <p class="mb-30 wow animate__animated animate__fadeInUp">Proin ullamcorper pretium orci. Donec necscele risque leo. Nam massa dolor imperdiet neccon sequata congue idsem. Maecenas malesuada faucibus finibus. </p>
                    <div class="mt-10 wow animate__animated animate__fadeInUp">
                        <a href="#" class="btn btn-default">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12 pl-200 d-none d-lg-block">
                    <div class="banner-imgs banner-imgs-about">
                        <img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/banner-online-marketing.png" class="img-responsive main-banner shape-3" />
                        <span class="banner-sm-4"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/banner/congratulation.svg" class="img-responsive shape-2" /></span>
                        <span class="banner-sm-5"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/banner/web-dev.svg" class="img-responsive shape-1" /></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-90 mt-md-50">
        <div class="container">
            <h2 class="section-title text-center mb-15 wow animate__animated animate__fadeInUp">Meet our team</h2>
            <div class="text-normal text-center color-black-5 box-mw-60 wow animate__animated animate__fadeInUp">
                Find the type of work you need, clearly defined and ready to start. Work begins as soon as you purchase and provide requirements.
            </div>
            <div class="row mt-60">
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Elon Musk</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc2.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Bernard Arnault</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc3.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Jeff Bezos</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc4.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Bill Gates</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc5.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Larry Ellison</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc6.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Sergey Brin</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc7.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Mark Zucker</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-grid-2  wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-2-image">
                            <a href="#">
                                <figure><img src="{{asset('frontEndAssets')}}/imgs/page/about/marc8.png" alt="jobhub" /></figure>
                            </a>
                        </div>
                        <div class="card-block-info pt-10 text-center">
                            <h5 class="font-bold text-lg mb-5">Warren Buffett</h5>
                            <p class="text-small text-muted">Marketing Crew</p>
                            <div class="card-2-bottom mt-15">
                                <a href="#" class="card-grid-2-socials icon-fb-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-tw-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-inst-sym"></a>
                                <a href="#" class="card-grid-2-socials icon-linkedin-sym"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-80 mt-md-50">
        <div class="container">
            <h2 class="text-center mb-15 section-title wow animate__animated animate__fadeInUp">Our Happy Customer</h2>
            <div class="text-normal text-center color-black-5 box-mw-60 wow animate__animated animate__fadeInUp">
                When it comes to choosing the right web hosting provider, we know how easy it is to get overwhelmed with the number.
            </div>
            <div class="row mt-70">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-3">
                        <div class="swiper-wrapper pb-70 pt-5">
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image card-grid-3-image-circle">
                                        <a href="#">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/profile.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info mt-10">
                                        <p class="text-lg text-center">We are on the hunt for a designer who is exceptional in both making incredible product interfaces as well as</p>
                                        <div class="text-center mt-20 mb-25">
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                        </div>
                                        <div class="card-profile text-center">
                                            <strong>Sarah Harding</strong>
                                            <span>Visual Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image card-grid-3-image-circle">
                                        <a href="#">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/profile2.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info mt-10">
                                        <p class="text-lg text-center">We are on the hunt for a designer who is exceptional in both making incredible product interfaces as well as</p>
                                        <div class="text-center mt-20 mb-25 card-block-rating">
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                        </div>
                                        <div class="card-profile text-center">
                                            <strong>Sarah Harding</strong>
                                            <span>Visual Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image card-grid-3-image-circle">
                                        <a href="#">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/about/profile3.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info mt-10">
                                        <p class="text-lg text-center">We are on the hunt for a designer who is exceptional in both making incredible product interfaces as well as</p>
                                        <div class="text-center mt-20 mb-25">
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                            <span><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/star.svg" /></span>
                                        </div>
                                        <div class="card-profile text-center">
                                            <strong>Sarah Harding</strong>
                                            <span>Visual Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7 col-md-7">
                    <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">From blog</h2>
                    <p class="text-md-lh28 color-black-5 wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">Latest News & Events</p>
                </div>
                <div class="col-lg-5 col-md-5 text-lg-end text-start">
                    <a href="blog-grid.html" class="btn btn-border icon-chevron-right wow animate__animated animate__fadeInUp hover-up mt-15" data-wow-delay=".1s">View more</a>
                </div>
            </div>
            <div class="row mt-70">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-3">
                        <div class="swiper-wrapper pb-70 pt-5">
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image">
                                        <a href="blog-single.html">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/blog/img-blog-1.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-6 col-6 text-start">
                                                <span>Sarah Harding</span>
                                            </div>
                                            <div class="col-lg-6 col-6 text-end">
                                                <span>06 September</span>
                                            </div>
                                        </div>
                                        <h5 class="mt-15 heading-md"><a href="blog-single.html">Senior Full Stack, Creator
                                                Success Full Time</a></h5>
                                        <div class="card-2-bottom mt-50">
                                            <div class="row">
                                                <div class="col-lg-9 col-8">
                                                    <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                                </div>
                                                <div class="col-lg-3 text-end col-4">
                                                    <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/bookmark.svg" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image">
                                        <a href="blog-single.html">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/blog/img-blog-2.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-6 col-6 text-start">
                                                <span>Sarah Harding</span>
                                            </div>
                                            <div class="col-lg-6 col-6 text-end">
                                                <span>06 September</span>
                                            </div>
                                        </div>
                                        <h5 class="mt-15 heading-md"><a href="blog-single.html">21 Job Tips: How To Make a Great Impression</a></h5>
                                        <div class="card-2-bottom mt-50">
                                            <div class="row">
                                                <div class="col-lg-9 col-8">
                                                    <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                                </div>
                                                <div class="col-lg-3 text-end col-4">
                                                    <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/bookmark.svg" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image">
                                        <a href="blog-single.html">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/blog/img-blog-3.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-6 col-6 text-start">
                                                <span>Sarah Harding</span>
                                            </div>
                                            <div class="col-lg-6 col-6 text-end">
                                                <span>06 September</span>
                                            </div>
                                        </div>
                                        <h5 class="mt-15 heading-md"><a href="blog-single.html">Top SQL Query Interview Questions</a></h5>
                                        <div class="card-2-bottom mt-50">
                                            <div class="row">
                                                <div class="col-lg-9 col-8">
                                                    <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                                </div>
                                                <div class="col-lg-3 text-end col-4">
                                                    <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/bookmark.svg" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image">
                                        <a href="blog-single.html">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/blog/img-blog-4.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-6 col-6 text-start">
                                                <span>Sarah Harding</span>
                                            </div>
                                            <div class="col-lg-6 col-6 text-end">
                                                <span>06 September</span>
                                            </div>
                                        </div>
                                        <h5 class="mt-15 heading-md"><a href="blog-single.html">How To Write an Interview Reschedule
                                                Email</a></h5>
                                        <div class="card-2-bottom mt-50">
                                            <div class="row">
                                                <div class="col-lg-9 col-8">
                                                    <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                                </div>
                                                <div class="col-lg-3 text-end col-4">
                                                    <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/bookmark.svg" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up">
                                    <div class="text-center card-grid-3-image">
                                        <a href="blog-single.html">
                                            <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/blog/img-blog-5.png" /></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col-lg-6 col-6 text-start">
                                                <span>Sarah Harding</span>
                                            </div>
                                            <div class="col-lg-6 col-6 text-end">
                                                <span>06 September</span>
                                            </div>
                                        </div>
                                        <h5 class="mt-15 heading-md"><a href="blog-single.html">12 Peer Interview Questions and Answers</a></h5>
                                        <div class="card-2-bottom mt-50">
                                            <div class="row">
                                                <div class="col-lg-9 col-8">
                                                    <a href="blog-single.html" class="btn btn-border btn-brand-hover">Keep reading</a>
                                                </div>
                                                <div class="col-lg-3 text-end col-4">
                                                    <a href="#" class="mt-10 display-block mr-20"><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/theme/icons/bookmark.svg" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination3"></div>
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