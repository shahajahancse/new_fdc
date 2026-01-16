
    {{-- Dashboard --}}
    <li class="nav-item">
        <a class="nav-link {!! Request::is('dashboard') ? 'active' : '' !!}" aria-current="page" href="{{ url('/dashboard') }}">
            <i class="icon im im-icon-Home"></i>
            <span class="item-name"> Dashboard </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {!! Request::is('project-entry') ? 'active' : '' !!}" aria-current="page" href="{{ url('/project-entry') }}"> <i class="icon im im-icon-Home"></i> <span class="item-name">Entry Project Details</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {!! Request::is('project-list') ? 'active' : '' !!}" aria-current="page" href="{{ url('/project-list') }}"> <i class="icon im im-icon-Home"></i> <span class="item-name">Project List</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {!! Request::is('set-interval') ? 'active' : '' !!}" aria-current="page" href="{{ url('/set-interval') }}"> <i class="icon im im-icon-Home"></i> <span class="item-name">Set Interval Time</span>
        </a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link {!! Request::is('display-slider') ? 'active' : '' !!}" aria-current="page" href="{{ url('/display-slider') }}"> <i class="icon im im-icon-Home"></i> <span class="item-name">Display View</span>
        </a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link {!! Request::is('display') ? 'active' : '' !!}" aria-current="page" href="{{ url('/display') }}"> <i class="icon im im-icon-Home"></i> <span class="item-name">Full Display</span>
        </a>
    </li>

    {{-- ব্যবহারকারী ব্যবস্থাপনা --}}
    @if (can('user_management'))
        {{-- <li class="nav-item">
            <a class="nav-link {!! Request::is('users*') || Request::is('roleAndPermissions*') ? 'active' : '' !!}"
                data-bs-toggle="collapse" href="#users_menu" role="button" aria-expanded="false" aria-controls="users_menu">
                <i class="icon im im-icon-User"></i>
                <span class="item-name">{{ __('messages.user_management') }}</span>
                <i class="right-icon im im-icon-Arrow-Right"></i>
            </a>
            <ul class="sub-nav collapse {!! Request::is('users*') || Request::is('roleAndPermissions*') ? 'show' : '' !!}"
                id="users_menu" data-bs-parent="#sidebar-menu">
                @if (can('user'))
                    <li class="nav-item">
                        <a class="nav-link {!! Request::is('users*') ? 'active' : '' !!}" href="{{ route('users.index') }}">
                            <i class="icon im im-icon-User"></i>
                            <i class="sidenav-mini-icon"> ব্য</i>
                            <span class="item-name">{{ __('messages.user') }}</span>
                        </a>
                    </li>
                @endif
                @if (can('roll_and_permission'))
                    <li class="nav-item">
                        <a class="nav-link {!! Request::is('roleAndPermissions*') ? 'active' : '' !!}"
                            href="{{ route('roleAndPermissions.index') }}">
                            <i class="icon im im-icon-Security-Settings"></i>
                            <i class="sidenav-mini-icon"> রো </i>
                            <span class="item-name">{{ __('messages.role_management') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {!! Request::is('permissions*') ? 'active' : '' !!}"
                            href="{{ route('permissions.index') }}">
                            <i class="icon im im-icon-Security-Settings"></i>
                            <i class="sidenav-mini-icon"> অ </i>
                            <span class="item-name">অনুমতিসমূহ</span>
                        </a>
                    </li>
                @endif
            </ul>
        </li> --}}
    @endif
