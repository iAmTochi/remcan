<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
    <meta name="author" content="Bootlab">

    <title>{{ config('app.name') }} - Real Estate Marketers and Consultants Association of Nigeria</title>

    <!-- PICK ONE OF THE STYLES BELOW -->
    <link href="{{ asset('platform') }}/css/modern.css" rel="stylesheet">
    <!-- <link href="css/classic.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->
    <style>
        body {
            opacity: 0;
        }
    </style>
    <script src="{{ asset('platform') }}/js/settings.js"></script>
    <!-- END SETTINGS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body>
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<div class="wrapper">
    <x-platform.sidebar-nav/>
    <div class="main">
        <x-platform.horizontal-nav/>
        <main class="content">
            <div class="container-fluid">

                <div class="header">
                    <h1 class="header-title">
                        {{ config('app.name') }} Platform
                    </h1>
                    <p class="header-subtitle">Real Estate Marketers and Consultants Association of Nigeria</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">No of Agents</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="avatar">
                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                <i class="align-middle" data-feather="users"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="display-5 mt-1 mb-3">0</h1>
                                <div class="mb-0">
{{--                                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>--}}
                                    Less sales than usual
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Male</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="avatar">
                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                <i class="align-middle" data-feather="users"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="display-5 mt-1 mb-3">0</h1>
                                <div class="mb-0">
{{--                                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>--}}
                                    More visitors than usual
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Female</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="avatar">
                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                <i class="align-middle" data-feather="female"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="display-5 mt-1 mb-3">0</h1>
                                <div class="mb-0">
{{--                                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>--}}
                                    More earnings than usual
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Revenue</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="avatar">
                                            <div class="avatar-title rounded-circle bg-primary-dark">
                                                <i class="align-middle" data-feather="card"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="display-5 mt-1 mb-3">₦83.300</h1>
                                <div class="mb-0">
{{--                                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>--}}
                                    More earnings than usual
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-12  d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="card-actions float-end">
                                    <a href="#" class="me-1">
                                        <i class="align-middle" data-feather="refresh-cw"></i>
                                    </a>
                                    <div class="d-inline-block dropdown show">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="align-middle" data-feather="more-vertical"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">Recently Approved Agents</h5>
                            </div>
                            <table id="datatables-dashboard-products" class="table table-striped my-0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">License</th>
                                    <th class="d-none d-xl-table-cell">Technology</th>
                                    <th class="d-none d-xl-table-cell">Tickets</th>
                                    <th>Sales</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>AppStack</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-success">HTML</span></td>
                                    <td class="d-none d-xl-table-cell">50</td>
                                    <td class="d-none d-xl-table-cell">720</td>
                                </tr>
                                <tr>
                                    <td>Spark</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">20</td>
                                    <td class="d-none d-xl-table-cell">540</td>
                                </tr>
                                <tr>
                                    <td>Milo</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-warning">React</span></td>
                                    <td class="d-none d-xl-table-cell">40</td>
                                    <td class="d-none d-xl-table-cell">280</td>
                                </tr>
                                <tr>
                                    <td>Ada</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-info">Vue</span></td>
                                    <td class="d-none d-xl-table-cell">60</td>
                                    <td class="d-none d-xl-table-cell">610</td>
                                </tr>
                                <tr>
                                    <td>Abel</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">80</td>
                                    <td class="d-none d-xl-table-cell">150</td>
                                </tr>
                                <tr>
                                    <td>Spark</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-success">HTML</span></td>
                                    <td class="d-none d-xl-table-cell">20</td>
                                    <td class="d-none d-xl-table-cell">480</td>
                                </tr>
                                <tr>
                                    <td>Libre</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-warning">React</span></td>
                                    <td class="d-none d-xl-table-cell">30</td>
                                    <td class="d-none d-xl-table-cell">280</td>
                                </tr>
                                <tr>
                                    <td>Von</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-danger">Angular</span></td>
                                    <td class="d-none d-xl-table-cell">50</td>
                                    <td class="d-none d-xl-table-cell">350</td>
                                </tr>
                                <tr>
                                    <td>Material Blog</td>
                                    <td class="d-none d-xl-table-cell">Single license</td>
                                    <td><span class="badge bg-info">Vue</span></td>
                                    <td class="d-none d-xl-table-cell">10</td>
                                    <td class="d-none d-xl-table-cell">480</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if(false)
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <div class="card-actions float-end">
                                    <a href="#" class="me-1">
                                        <i class="align-middle" data-feather="refresh-cw"></i>
                                    </a>
                                    <div class="d-inline-block dropdown show">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="align-middle" data-feather="more-vertical"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">Sales / Revenue</h5>
                            </div>
                            <div class="card-body d-flex w-100">
                                <div class="align-self-center chart chart-lg">
                                    <canvas id="chartjs-dashboard-bar-alt"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>
        </main>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-8 text-start">
                        <ul class="list-inline">
{{--                            <li class="list-inline-item">--}}
{{--                                <a class="text-muted" href="#">Terms of Service</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <div class="col-4 text-end">
                        <p class="mb-0">
                            &copy; {{ date('Y') }} - <a class='text-muted' target="_blank" href='{{ route('home') }}'>{{ config('app.name') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
            </path>
        </symbol>
    </defs>
</svg>
<script src="{{ asset('platform') }}/js/app.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Orders",
                    fill: true,
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    borderWidth: 2,
                    data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9]
                },
                    {
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: "rgba(0, 0, 0, 0.05)",
                        borderColor: "rgba(0, 0, 0, 0.05)",
                        borderWidth: 2,
                        data: [5, 4, 10, 15, 16, 12, 10, 13, 20, 22, 18, 20]
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    intersect: false
                },
                hover: {
                    intersect: true
                },
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                elements: {
                    point: {
                        radius: 0
                    }
                },
                scales: {
                    xAxes: [{
                        reverse: true,
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: 5
                        },
                        display: true,
                        gridLines: {
                            color: "rgba(0,0,0,0)",
                            fontColor: "#fff"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar-alt"), {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Last year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                    barPercentage: .75,
                    categoryPercentage: .5
                }, {
                    label: "This year",
                    backgroundColor: "#E8EAED",
                    borderColor: "#E8EAED",
                    hoverBackgroundColor: "#E8EAED",
                    hoverBorderColor: "#E8EAED",
                    data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                    barPercentage: .75,
                    categoryPercentage: .5
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var markers = [{
            coords: [37.77, -122.41],
            name: "San Francisco: 375"
        },
            {
                coords: [40.71, -74.00],
                name: "New York: 350"
            },
            {
                coords: [39.09, -94.57],
                name: "Kansas City: 250"
            },
            {
                coords: [36.16, -115.13],
                name: "Las Vegas: 275"
            },
            {
                coords: [32.77, -96.79],
                name: "Dallas: 225"
            }
        ];
        var map = new jsVectorMap({
            map: "us_aea_en",
            selector: "#usa_map",
            zoomButtons: true,
            markers: markers,
            markerStyle: {
                initial: {
                    "r": 9,
                    "fill": window.theme.primary,
                    "fill-opacity": .9,
                    "stroke": "#fff",
                    "stroke-width": 7,
                    "stroke-opacity": .4
                },
                hover: {
                    fill: window.theme.primary,
                    stroke: window.theme.primary
                }
            },
            regionStyle: {
                initial: {
                    fill: "#DCE3E8"
                }
            },
            zoomOnScroll: false
        });
        window.addEventListener("resize", () => {
            map.updateSize();
        });
        setTimeout(function() {
            map.updateSize();
        }, 250);
    });
</script>
<script>
    $(function() {
        $('#datatables-dashboard-products').DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false
        });
    });
</script>

</body>
</html>
