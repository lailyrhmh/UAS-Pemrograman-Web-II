<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Jake Sim</span>
                                <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                            </a>
                        </div>
                        <div class="logo-element">
                            GOODIES
                        </div>
                    </li>
                    <li class="{{ ($title === 'Dashboard') ? 'active' : '' }}">
                        <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
                    <li class="{{ ($title === 'Album') ? 'active' : '' }}">
                        <a href="/listalbum"><i class="fa fa-dot-circle-o"></i> <span class="nav-label">Album</span></a>
                    </li>
                    <li class="{{ ($title === 'Talents') ? 'active' : '' }}">
                        <a href="/listtalent"><i class="fa fa-group"></i> <span class="nav-label">Talent</span></a>
                    </li>
                    <li class="{{ ($title === 'Staffs') ? 'active' : '' }}">
                        <a href="/liststaff"><i class="fa fa-vcard-o"></i> <span class="nav-label">Staff</span></a>
                    </li>
                    <li class="{{ ($title === 'Labels') ? 'active' : '' }}">
                        <a href="/listlabel"><i class="fa fa-building"></i> <span class="nav-label">Label</span></a>
                    </li>
                    <li class="{{ ($title === 'Trainee') ? 'active' : '' }}">
                        <a href="/listtrainee"><i class="fa fa-user"></i> <span class="nav-label">Trainee</span></a>
                    </li>
                </ul>

            </div>
        </nav>