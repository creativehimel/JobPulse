<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
    <a href="{{route('recruiter.index')}}" class="app-brand-link">
        <img src="{{asset('images/logo.png')}}" alt="logo" width="100">
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
            <a href="{{route('recruiter.index')}}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Page 1">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-briefcase"></i>
                <div data-i18n="Job Attributes">Job Board</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('jobs.index')}}" class="menu-link">
                        Jobs
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('manage-applications.index')}}" class="menu-link">
                    Job Applications
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
