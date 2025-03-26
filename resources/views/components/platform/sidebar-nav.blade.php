<nav id="sidebar" {{ $attributes->class(['sidebar']) }}>
    <a class='sidebar-brand text-center' href='{{ route('home') }}' target="_blank">
        <img src="{{asset('images/logo.png')}}" class="l-dark me-2" alt="" width="50">
        {{ config('app.name') }}
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img src="{{ asset('platform') }}/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2"
                 alt="Linda Miller"/>
            <div class="fw-bold">{{ auth()->user()->name }}</div>
            <small>{{ ucfirst(auth()->user()->type) }}</small>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>
            <li class="sidebar-item active">
                <a href="{{ route('dashboard') }}" class="sidebar-link">
                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-users-gear"></i> <span class="align-middle">Agents</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-settings.html'>Settings</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-clients.html'>Clients <span
                                    class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>

                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-user-shield"></i> <span class="align-middle">Users Management</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-settings.html'>Settings</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-clients.html'>Clients <span
                                    class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>

                </ul>
            </li>


            <li class="sidebar-header">
                Elements
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-flask"></i> <span
                            class="align-middle">User Interface</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-alerts.html'>Alerts</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-buttons.html'>Buttons</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-cards.html'>Cards</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-general.html'>General</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-grid.html'>Grid</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-modals.html'>Modals</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-offcanvas.html'>Offcanvas</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-placeholders.html'>Placeholders</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-notifications.html'>Notifications</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-tabs.html'>Tabs</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-typography.html'>Typography</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Charts</span>
                    <span class="sidebar-badge badge rounded-pill bg-primary">New</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='charts-chartjs.html'>Chart.js</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='charts-apexcharts.html'>ApexCharts</a></li>
                </ul>
            </li>
            <li class="sidebar-header">
                Elements
            </li>

            <li class="sidebar-item">
                <a  class="sidebar-link">
                    <i class="align-middle me-2 fas fa-fw fa-power-off"></i> <span class="align-middle">Logout</span>
                </a>
            </li>


        </ul>
    </div>
</nav>
