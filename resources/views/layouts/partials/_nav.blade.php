<nav id="sidebar">
    {{-- Sidebar Scroll Container --}}
    <div id="sidebar-scroll">
        {{-- Sidebar Content --}}
        <div class="sidebar-content">
            {{-- Side Header --}}
            <div class="content-header content-header-fullrow px-15">
                {{-- Mini Mode --}}
                <div class="content-header-section sidebar-mini-visible-b">
                    {{-- Logo --}}
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">A</span><span class="text-primary">N</span>
                    </span>
                    {{-- END Logo --}}
                </div>
                {{-- END Mini Mode --}}

                {{-- Normal Mode --}}
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    {{-- Close Sidebar, Visible only on mobile screens --}}
                    {{-- Layout API, functionality initialized in Codebase() -> uiApiLayout() --}}
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    {{-- END Close Sidebar --}}

                    {{-- Logo --}}
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="{{ url('/') }}">
                            <img src="{{ asset('/assets/img/ABE-logo.png') }}" height="30" width="102">
                        </a>
                    </div>
                    {{-- END Logo --}}
                </div>
                {{-- END Normal Mode --}}
            </div>
            {{-- END Side Header --}}

            {{-- Side User --}}
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    @if(count(Auth::user()->student) > 0)
                        <img class="img-avatar img-avatar32" src="{{config('app.fetch_student_image') . Auth::user()->student->photo }}" alt="">
                    @else
                        <img class="img-avatar" src="{{ asset('assets/img/avatar.jpg') }}" alt="">
                    @endif
                </div>
                {{-- END Visible only in mini mode --}}

                {{-- Visible only in normal mode --}}
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="{{ url('/profile') }}">
                        @if(count(Auth::user()->student) > 0)
                            <img class="img-avatar" src="{{config('app.fetch_student_image') . Auth::user()->student->photo }}" alt="">
                        @else
                            <img class="img-avatar" src="{{ asset('assets/img/avatar.jpg') }}" alt="">
                        @endif
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>
                        </li>
                    </ul>
                </div>
                {{-- END Visible only in normal mode --}}
            </div>
            {{-- END Side User --}}

            {{-- Side Navigation --}}
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a href="{{ url('/') }}"><i class="si si-home"></i><span class="sidebar-mini-hide">Home Dashboard</span></a>
                    </li>
                    @if(Auth::user()->role == 'Admin')
                        <li class="nav-main-heading"><span class="sidebar-mini-visible">AS</span><span class="sidebar-mini-hidden">Admin Section</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-pencil"></i><span class="sidebar-mini-hide">Registrations</span></a>
                            <ul>
                                <li>
                                    <a href="{{ url('/students') }}" class="active">Prospective Students</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Users</span></a>
                            <ul>
                                <li>
                                    <a href="{{ url('/users/create') }}" class="active">Create User</a>
                                </li>
                                <li>
                                    <a href="{{ url('/users') }}" class="active">View Users</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if(Auth::user()->role == 'User')
                        <li class="nav-main-heading"><span class="sidebar-mini-visible">STUDENT</span><span class="sidebar-mini-hidden">Student Section</span></li>
                        <li>
                            <a href="{{ url('/students/register/profile') }}"><i class="si si-note"></i><span class="sidebar-mini-hide">My Registration</span></a>
                        </li>
                    @endif

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">COURSE</span><span class="sidebar-mini-hidden">Help Section</span></li>
                    <li>
                        <a href="{{ url('/course-info') }}"><i class="si si-question"></i><span class="sidebar-mini-hide">Course Information</span></a>
                    </li>
                </ul>
            </div>
            {{-- END Side Navigation --}}
        </div>
        {{-- Sidebar Content --}}
    </div>
    {{-- END Sidebar Scroll Container --}}
</nav>
{{-- END Sidebar --}}