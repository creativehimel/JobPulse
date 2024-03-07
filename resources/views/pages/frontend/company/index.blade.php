@extends('layouts.frontEnd')
@section('page_title', 'Company')
@section('content')
    <section class="section-box-2">
        <div class="box-head-single none-bg">
            <div class="container">
                <h4>There Are 968 Companies<br />Here For you!</h4>
                <div class="row mt-15 mb-40">
                    <div class="col-lg-7 col-md-9">
                        <span class="text-mutted">Discover your next career move, freelance gig, or
                            internship</span>
                    </div>
                    <div class="col-lg-5 col-md-3 text-lg-end text-start">
                        <ul class="breadcrumbs mt-sm-15">
                            <li><a href="#">Home</a></li>
                            <li>Companies listing</li>
                        </ul>
                    </div>
                </div>
                <div class="box-shadow-bdrd-15 box-filters">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="box-search-job">
                                <form class="form-search-job">
                                    <input type="text" class="input-search-job" placeholder="UI Designer" />
                                </form>
                            </div>
                            <div class="list-tags-job">
                                <a href="#" class="text-normal job-tag">UI/UX designing <span class="remove-tags-job"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex job-fillter">
                                <div class="d-block d-lg-flex">
                                    <div class="dropdown job-type">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownJobType" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" data-bs-display="static"><i class="fi-rr-briefcase"></i>
                                            <span>Full time</span> <i class="fi-rr-angle-small-down"></i></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownJobType">
                                            <li><a class="dropdown-item active" href="#">Full time</a></li>
                                            <li><a class="dropdown-item" href="#">Part time</a></li>
                                            <li><a class="dropdown-item" href="#">Freelancer</a></li>
                                            <li><a class="dropdown-item" href="#">Online work</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownLocation" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><i class="fi-rr-marker"></i> <span>New
                                                York, USA</span> <i class="fi-rr-angle-small-down"></i></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownLocation">
                                            <li><a class="dropdown-item active" href="#">New York, USA</a></li>
                                            <li><a class="dropdown-item" href="#">Dallas, USA</a></li>
                                            <li><a class="dropdown-item" href="#">Chicago, USA</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownLocation2" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><i class="fi-rr-dollar"></i> <span>Salary Range</span> <i class="fi-rr-angle-small-down"></i></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownLocation2">
                                            <li><a class="dropdown-item active" href="#">$100 - $500</a></li>
                                            <li><a class="dropdown-item" href="#">$500 - $1000</a></li>
                                            <li><a class="dropdown-item" href="#">$1000 - $1500</a></li>
                                            <li><a class="dropdown-item" href="#">$1500 - $2000</a></li>
                                            <li><a class="dropdown-item" href="#">Over $2000</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-button-find">
                                    <button class="btn btn-default float-right">Find Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-80">
        <div class="container">
            <div class="content-page">
                <div class="box-filters-job mt-15 mb-10">
                    <div class="row">
                        <div class="col-lg-7">
                            <span class="text-small">Showing <strong>41-60 </strong>of <strong>944 </strong>Companies</span>
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
                                    <div class="box-view-type">
                                        <a href="employers-list.html" class="view-type"><img src="{{asset('frontEndAssets')}}/imgs/theme/icons/icon-list.svg" alt="jobhub" /></a>
                                        <a href="employers-grid.html" class="view-type"><img src="{{asset('frontEndAssets')}}/imgs/theme/icons/icon-grid.svg" alt="jobhub" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd online">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-1.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Invision</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">12 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-2.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Bing Search</strong></a></h5>
                                    <span class="text-sm">Startup Team</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> New York, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">10 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-3.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Dailymotion</strong></a></h5>
                                    <span class="text-sm">Startup Team</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Iowa, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Designer
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">16 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd online">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-4.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>LinkedIN</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">122 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-5.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Adobe Illustrator</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">23 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-6.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>StumbleUpon</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">24 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd online">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-7.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Quora JSC</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">12 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-8.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Nintendo</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">12 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-9.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Periscope</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">12 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd online">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-10.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Dribbble</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">12 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-11.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Intercom</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">12 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="card-grid-2-link">
                                <a href="#"><i class="fi-rr-shield-check"></i></a>
                                <a href="#"><i class="fi-rr-bookmark"></i></a>
                            </div>
                            <div class="text-center card-grid-2-image-rd">
                                <a href="employers-single.html">
                                    <figure><img alt="jobhub" src="{{asset('frontEndAssets')}}/imgs/page/employers/employer-12.png" /></figure>
                                </a>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <h5><a href="employers-single.html"><strong>Bing Search</strong></a></h5>
                                    <span class="text-sm">UI/UX Designer</span>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <div class="rate small pr-0">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" class="">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" class="checked">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text" class="checked">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text" class="checked">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text" class="checked">1 star</label>
                                        </div>
                                        <span class="text-muted text-small">360 rates (5.0)</span>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="row">
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-marker mr-5"></i> Chicago, US
                                        </div>
                                        <div class="col-sm-6 text-center d-flex align-items-center">
                                            <i class="fi-rr-briefcase mr-5"></i>Software
                                        </div>
                                    </div>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center mt-25 mb-5">
                                        <a href="job-grid.html" class="btn btn-border btn-brand-hover">12 Open Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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