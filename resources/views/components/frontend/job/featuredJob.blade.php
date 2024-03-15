<div class="job-list-list mb-15">
    <div class="list-recent-jobs">
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
    </div>
</div>
