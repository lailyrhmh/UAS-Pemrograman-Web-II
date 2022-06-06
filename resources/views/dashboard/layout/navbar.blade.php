<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            @auth
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">{{ auth()->user()->name }}</span>
                                <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" method="post" href="{{route('actionlogout')}}">Logout</a></li>
                            </ul>
                            @endauth
                        </div>
                        <div class="logo-element">
                            GOODIES
                        </div>
                    </li>
                    <li class="{{ ($title === 'Dashboard') ? 'active' : '' }}">
                        <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
                    <li class="{{ ($title === 'Album') ? 'active' : '' }}">
                        <a href="{{route('album.index')}}"><i class="fa fa-dot-circle-o"></i> <span class="nav-label">Album</span></a>
                    </li>
                    <li class="{{ ($title === 'Talents') ? 'active' : '' }}">
                        <a href="{{route('talent.index')}}"><i class="fa fa-group"></i> <span class="nav-label">Talent</span></a>
                    </li>
                    <li class="{{ ($title === 'Staffs') ? 'active' : '' }}">
                        <a href="{{route('staff.index')}}"><i class="fa fa-vcard-o"></i> <span class="nav-label">Staff</span></a>
                    </li>
                    <li class="{{ ($title === 'Labels') ? 'active' : '' }}">
                        <a href="/listlabel"><i class="fa fa-building"></i> <span class="nav-label">Label</span></a>
                    </li>
                    <li class="{{ ($title === 'Trainee') ? 'active' : '' }}">
                        <a href="{{ route('trainee.index') }}"><i class="fa fa-user"></i> <span class="nav-label">Trainee</span></a>
                    </li>
                </ul>

            </div>
        </nav>