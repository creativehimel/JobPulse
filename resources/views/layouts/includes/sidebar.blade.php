<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
    <a href="{{route('candidate.dashboard')}}" class="app-brand-link">
        <img src="{{asset('images/logo.png')}}" alt="" width="100">
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item active">
            <a href="{{route('candidate.dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Page 1">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('educations.index')}}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-book"></i>
            <div data-i18n="Education Information">Education Info</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('trainings.index')}}" class="menu-link">
            <i class="menu-icon ti ti-stairs-up"></i>
            <div data-i18n="Training Information">Training Info</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('employments.index')}}" class="menu-link">
            <i class="menu-icon ti ti-briefcase"></i>
            <div data-i18n="Training Information">Employment Info</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('references.index')}}" class="menu-link">
            <i class="menu-icon ti ti-users-group"></i>
            <div data-i18n="Reference Info">Reference Info</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('skills.index')}}" class="menu-link">
            <i class="menu-icon ti ti-trending-up"></i>
            <div data-i18n="Skill Info">Skill Info</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('languages.index')}}" class="menu-link">
            <i class="menu-icon ti ti-language"></i>
            <div data-i18n="Skill Info">Language Info</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('certificates.index')}}" class="menu-link">
            <i class="menu-icon ti ti-certificate"></i>
            <div data-i18n="Skill Info">Certificate Info</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('favourite-jobs.index')}}" class="menu-link">
            <i class="menu-icon ti ti-device-floppy"></i>
            <div data-i18n="Skill Info">Favourite Jobs</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('job-applications.index')}}" class="menu-link">
            <i class="menu-icon ti ti-clipboard-check"></i>
            <div data-i18n="Skill Info">Application Jobs</div>
            </a>
        </li>
    </ul>
</aside>
