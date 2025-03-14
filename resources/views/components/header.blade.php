<header id="topnav" {{ $attributes->class(['defaultscroll sticky']) }}>
    <div class="container">
        <a class="logo d-flex align-items-center justify-content-center text-center" href="{{ url('/') }}">
            <span class="logo-light-mode d-flex align-items-center">
                <img src="{{asset('images/logo.png')}}" class="l-dark me-2" alt="" width="50">
                <img src="{{asset('images/logo.png')}}" class="l-light me-2" alt="" width="50">
            </span>
            <span class="mt-1">
                <p class="l-dark fw-bold" style="color: #1e293b !important;">{{ config('app.name') }}</p>
                <p class="l-light text-white-50 fw-bold">{{ config('app.name') }}</p>
            </span>
        </a>


        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>

        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item ps-1 mb-0">
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle btn btn-sm btn-icon btn-pills btn-primary"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="search" class="icons"></i>
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded-3 border-0 mt-3 p-0"
                         style="width: 240px;">
                        <div class="search-bar">
                            <div id="itemSearch" class="menu-search mb-0">
                                <form role="search" method="get" id="searchItemform" class="searchform">
                                    <input type="text" class="form-control rounded-3 border" name="s" id="searchItem"
                                           placeholder="Search...">
                                    <input type="submit" id="searchItemsubmit" value="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-inline-item ps-1 mb-0">
                <a href="{{ route('login') }}" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="user"
                                                                                                    class="icons"></i></a>
            </li>
        </ul>

        <div id="navigation">
            <ul class="navigation-menu nav-left nav-light">
                <li class=" {{ request()->routeIs('home') ? 'active':'' }} has-submenu parent-menu-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li class=" {{ request()->routeIs('about') ? 'active':'' }}">
                    <a href="{{ route('about') }}" class="sub-menu-item">About</a>
                </li>

                <li class=" {{ request()->routeIs('services') ? 'active':'' }}">
                    <a href="{{ route('services') }}" class="sub-menu-item">Services</a>
                </li>

                <li class=" {{ request()->routeIs('contact-us') ? 'active':'' }}">
                    <a href="{{ route('contact-us') }}" class="sub-menu-item">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</header>
