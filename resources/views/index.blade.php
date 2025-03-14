@extends('layouts.main')

@section('content')
<!-- Hero Start -->
<section class="swiper-slider-hero position-relative d-block vh-100" id="home">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex align-items-center overflow-hidden">
                <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="{{ asset('images/bg/03.jpg') }}">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title-heading">
                                    <h1 class="heading fw-bold text-white title-dark mb-3">Promoting Professionalism in Real Estate <br> </h1>
                                    <p class="para-desc text-white-50 title-dark mb-0">Elevate the standards of practice among real estate professionals in Nigeria through
                                        continuous education, certification, and adherence to a code of ethics.</p>

                                    <div class="mt-4 pt-2">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-primary">View Details <i class="mdi mdi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!-- end slide-inner -->
            </div> <!-- end swiper-slide -->


                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                    <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/bg/04.jpg">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title-heading">
                                        <h1 class="heading fw-bold text-white title-dark mb-3">Enhance Public Trust<br></h1>
                                        <p class="para-desc text-white-50 title-dark mb-0">Foster trust and transparency amongst her members in the real estate market by ensuring that members
                                            adhere to the highest ethical standards and provide reliable,
                                            professional services to clients.
                                        </p>

                                        <div class="mt-4 pt-2">
                                            <a href="javascript:void(0)" class="btn btn-pills btn-primary">View Details <i class="mdi mdi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div><!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                <div class="swiper-slide d-flex align-items-center overflow-hidden">
                <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/bg/05.jpg">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title-heading">
                                    <h1 class="heading fw-bold text-white title-dark mb-3">Provide Networking Opportunities<br></h1>
                                    <p class="para-desc text-white-50 title-dark mb-0">Create platforms for real estate professionals to connect, share knowledge,
                                        and collaborate on projects, thereby enhancing business opportunities and professional growth.
                                    </p>

                                    <div class="mt-4 pt-2">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-primary">View Details <i class="mdi mdi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
                    <!-- end slide-inner -->
            </div> <!-- end swiper-slide -->
        </div>
        <!-- end swiper-wrapper -->


        <!-- swipper controls -->
        <div class="swiper-button-next rounded-circle text-center"></div>
        <div class="swiper-button-prev rounded-circle text-center"></div>
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
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
                    <h6 class="text-primary fw-medium mb-2">Our story: {{ config('app.name') }}</h6>
                    <h4 class="title mb-3">Efficiency. <br> Transparency. Control.</h4>
                    <p class="text-muted para-desc mb-0">Towntor developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Towntor is Real Estate Redefined.</p>

                    <div class="mt-4">
                        <a href="{{ route('about') }}" class="btn btn-pills btn-primary">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
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

        <x-mission-vision/>
        <!--end row-->
    </div>

    <!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Featured Properties</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4 mt-0">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                    <div class="property-image position-relative overflow-hidden shadow">
                        <img src="images/property/1.jpg" class="img-fluid" alt="">
                        <ul class="list-unstyled property-icon">
                            <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content p-4">
                        <a href="" class="title fs-5 text-dark fw-medium">Guzape, Abuja</a>

                        <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                <span class="text-muted">8000sqf</span>
                            </li>

                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                <span class="text-muted">4 Beds</span>
                            </li>

                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                <span class="text-muted">4 Baths</span>
                            </li>
                        </ul>

                    </div>
                </div><!--end items-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12">
                <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                    <div class="property-image position-relative overflow-hidden shadow">
                        <img src="images/property/2.jpg" class="img-fluid" alt="">
                        <ul class="list-unstyled property-icon">
                            <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content p-4">
                        <a href="" class="title fs-5 text-dark fw-medium">Wuye, Abuja</a>
                        <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                <span class="text-muted">8000sqf</span>
                            </li>

                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                <span class="text-muted">4 Beds</span>
                            </li>

                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                <span class="text-muted">4 Baths</span>
                            </li>
                        </ul>

                    </div>
                </div><!--end items-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12">
                <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                    <div class="property-image position-relative overflow-hidden shadow">
                        <img src="images/property/3.jpg" class="img-fluid" alt="">
                        <ul class="list-unstyled property-icon">
                            <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content p-4">
                        <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Jabi, Abuja</a>
                        <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                <span class="text-muted">8000sqf</span>
                            </li>

                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                <span class="text-muted">4 Beds</span>
                            </li>

                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                <span class="text-muted">4 Baths</span>
                            </li>
                        </ul>

                    </div>
                </div><!--end items-->
            </div><!--end col-->



            <div class="col-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="javascript:void(0)" class="mt-3 fs-6 text-primary">View More Properties <i class="mdi mdi-arrow-right align-middle"></i></a>
                </div>
            </div>
        </div>
        <!--end row-->
    </div><!--end container-->

    <div class="container-fluid mt-100 mt-60">
        <div class="position-relative overflow-hidden rounded-3 shadow py-5" style="background: url('images/bg/05.jpg') center center fixed;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-4 py-3">
                        <div class="counter-box text-center">
                            <h1 class="mb-0 text-white fw-bold"><span class="counter-value" data-target="1548">1</span>+</h1>
                            <h6 class="counter-head text-white fs-5 fw-semibold mb-0">Investment</h6>
                        </div><!--end counter box-->
                    </div><!--end col-->

                    <div class="col-4 py-3">
                        <div class="counter-box text-center">
                            <h1 class="mb-0 text-white fw-bold"><span class="counter-value" data-target="25">1</span>+</h1>
                            <h6 class="counter-head text-white fs-5 fw-semibold mb-0">Awards</h6>
                        </div><!--end counter box-->
                    </div><!--end col-->

                    <div class="col-4 py-3">
                        <div class="counter-box text-center">
                            <h1 class="mb-0 text-white fw-bold"><span class="counter-value" data-target="9">1</span>+</h1>
                            <h6 class="counter-head text-white fs-5 fw-semibold mb-0">Profitability</h6>
                        </div><!--end counter box-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </div><!--end container fluid-->

    <x-teams/>
    <!--end container-->

    <x-get-in-touch/>
    <!--end container-->
</section><!--end section-->
<!-- End -->

@endsection
