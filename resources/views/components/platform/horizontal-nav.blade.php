<nav {{ $attributes->class(['navbar navbar-expand navbar-theme']) }}>
    <a class="sidebar-toggle d-flex me-2">
        <i class="hamburger align-self-center"></i>
    </a>

    <form class="d-none d-sm-inline-block">
        <input class="form-control form-control-lite" type="text" placeholder="Search agent...">
    </form>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">


            <li class="nav-item dropdown ms-lg-2">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown"
                   data-bs-toggle="dropdown">
                    <i class="align-middle fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> View Profile</a>

                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> {{ __('Log Out') }}</a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
