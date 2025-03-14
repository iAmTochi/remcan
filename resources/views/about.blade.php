@extends('layouts.main')

@section('content')

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('images/bg/03.jpg') center;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <p class="text-white-50 para-desc mx-auto mb-0">Our story: Towntor</p>
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">About Us</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="about-left">
                    <div class="position-relative shadow p-2 rounded-top-pill rounded-5 bg-white img-one">
                        <img src="images/hero.jpg" class="img-fluid rounded-top-pill rounded-5" alt="work-image">

                        <div class="cta-video">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play mdi-24px text-primary"></i>
                            </a>
                        </div>

                        <div class="position-absolute top-0 start-0 z-n1">
                            <img src="images/svg/dots.svg" class="avatar avatar-xl-large" alt="">
                        </div>
                    </div>

                    <div class="img-two shadow rounded-3 overflow-hidden p-2 bg-white">
                        <img src="images/1.jpg" class="img-fluid rounded-3" alt="work-image">
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ms-lg-5">
                    <h6 class="text-primary fw-medium mb-2">Our story: Towntor</h6>
                    <h4 class="title mb-3">Efficiency. <br> Transparency. Control.</h4>
                    <p class="text-muted para-desc mb-0">Towntor developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Towntor is Real Estate Redefined.</p>

                    <div class="mt-4">
                        <a href="aboutus.html" class="btn btn-pills btn-primary">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">How It Works</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4 mt-0">
            <div class="col-md-4">
                <div class="position-relative features text-center mx-lg-4 px-md-1">
                    <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                        <i data-feather="hexagon" class="hexagon"></i>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i data-feather="home" class="fea icon-m-md text-primary"></i>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="fw-medium title text-dark fs-5">Evaluate Property</a>
                        <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4">
                <div class="position-relative features text-center mx-lg-4 px-md-1">
                    <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                        <i data-feather="hexagon" class="hexagon"></i>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i data-feather="briefcase" class="fea icon-m-md text-primary"></i>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="fw-medium title text-dark fs-5">Meeting with Agent</a>
                        <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4">
                <div class="position-relative features text-center mx-lg-4 px-md-1">
                    <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                        <i data-feather="hexagon" class="hexagon"></i>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i data-feather="key" class="fea icon-m-md text-primary"></i>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="fw-medium title text-dark fs-5">Close the Deal</a>
                        <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid bg-building-pic mt-100 mt-60">
        <div class="bg-overlay opacity-25" style="background: url('images/map.png') center center;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Trusted by more than 10K users</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-4 py-3">
                    <div class="counter-box text-center">
                        <h1 class="mb-0 fw-semibold"><span class="counter-value" data-target="1548">1</span>+</h1>
                        <h6 class="counter-head text-muted fw-normal">Investment</h6>
                    </div><!--end counter box-->
                </div><!--end col-->

                <div class="col-4 py-3">
                    <div class="counter-box text-center">
                        <h1 class="mb-0 fw-semibold"><span class="counter-value" data-target="25">1</span>+</h1>
                        <h6 class="counter-head text-muted fw-normal">Awards</h6>
                    </div><!--end counter box-->
                </div><!--end col-->

                <div class="col-4 py-3">
                    <div class="counter-box text-center">
                        <h1 class="mb-0 fw-semibold"><span class="counter-value" data-target="9">1</span>+</h1>
                        <h6 class="counter-head text-muted fw-normal">Profitability</h6>
                    </div><!--end counter box-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Property Broker</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4 mt-0">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="images/client/04.jpg" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Jack John</a>
                        <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="images/client/05.jpg" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Krista John</a>
                        <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="images/client/06.jpg" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Roger Jackson</a>
                        <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="images/client/07.jpg" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Johnny English</a>
                        <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blogs or News</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4 mt-0">
            <div class="col-lg-4 col-md-6">
                <div class="card blog blog-primary shadow rounded-3 overflow-hidden border-0">
                    <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                        <div class="position-relative overflow-hidden">
                            <img src="images/property/1.jpg" class="img-fluid" alt="">
                            <div class="card-overlay"></div>
                        </div>

                        <div class="blog-tag p-3">
                            <a href="#" class="badge bg-primary">Towntor</a>
                        </div>
                    </div>

                    <div class="card-body content p-0">
                        <div class="p-4">
                            <a href="blog-detail.html" class="title fw-medium fs-5 text-dark">Skills That You Can Learn In The Real Estate Market</a>
                            <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>

                            <a href="#" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="card blog blog-primary shadow rounded-3 overflow-hidden border-0">
                    <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                        <div class="position-relative overflow-hidden">
                            <img src="images/property/2.jpg" class="img-fluid" alt="">
                            <div class="card-overlay"></div>
                        </div>

                        <div class="blog-tag p-3">
                            <a href="#" class="badge bg-primary">Towntor</a>
                        </div>
                    </div>

                    <div class="card-body content p-0">
                        <div class="p-4">
                            <a href="blog-detail.html" class="title fw-medium fs-5 text-dark">Learn The Truth About Real Estate Industry</a>
                            <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>

                            <a href="#" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="card blog blog-primary shadow rounded-3 overflow-hidden border-0">
                    <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                        <div class="position-relative overflow-hidden">
                            <img src="images/property/3.jpg" class="img-fluid" alt="">
                            <div class="card-overlay"></div>
                        </div>

                        <div class="blog-tag p-3">
                            <a href="#" class="badge bg-primary">Towntor</a>
                        </div>
                    </div>

                    <div class="card-body content p-0">
                        <div class="p-4">
                            <a href="blog-detail.html" class="title fw-medium fs-5 text-dark">10 Quick Tips About Business Development</a>
                            <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>

                            <a href="#" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title mb-3">Have Question ? Get in touch!</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                    <div class="mt-4 pt-2">
                        <a href="contactus.html" class="btn btn-pills btn-primary"><span class="h5 mb-0 me-1"><i data-feather="mail" class="fea icon-sm"></i></span> Contact us</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endsection
