<div class="col-lg-4 col-md-6">
    <div class="card-grid-2 hover-up">
        <div class="text-center card-grid-2-image">
            <a href="{{route('frontend.job.show', $job->slug)}}">
                <figure><img src="{{asset('frontEndAssets')}}/imgs/jobs/job-1.png" alt="jobhub" /></figure>
            </a>
            <label class="btn-urgent">Urgent</label>
        </div>
        <div class="card-block-info">
            <div class="row">
                <div class="col-lg-7 col-6">
                    <a href="{{route('frontend.job.show', $job->slug)}}" class="card-2-img-text">
                        <span class="card-grid-2-img-small"><img src="{{asset('frontEndAssets')}}/imgs/page/job/digital.png" alt="jobhub" /></span> <span>Alithemes</span>
                    </a>
                </div>
                <div class="col-lg-5 col-6 text-end">
                    <a href="#" class="btn btn-grey-small disc-btn">{{$job->jobType->name}}</a>
                </div>
            </div>
            <h5 class="mt-20"><a href="{{route('frontend.job.show', $job->slug)}}">{{$job->job_title}}</a></h5>
            <div class="mt-15">
                <span class="card-time">{{\Carbon\Carbon::parse($job->created_at)->format('d M, Y')}}</span>
                <span class="card-location">{{$job->city->name}}, {{$job->country->name}}</span>
            </div>
            <div class="card-2-bottom mt-30">
                <div class="row">
                    <div class="col-lg-7 col-8">
                        <span class="card-text-price">{{$job->salaryCurrency->currency_icon}} {{$job->salary_from}} - {{$job->salary_to}}<span>/{{$job->salaryPeriod->name}}</span> </span>
                    </div>
                    <div class="col-lg-5 col-4 text-end">
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
