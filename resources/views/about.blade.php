@extends('layouts.main')

@section('content')

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('images/bg/03.jpg') center;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <p class="text-white-50 para-desc mx-auto mb-0">Our story: {{ config('app.name') }}</p>
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
                    <h6 class="text-primary fw-medium mb-2">Our story: {{ config('app.name') }}</h6>
                    <h4 class="title mb-3">Efficiency. <br> Transparency. Control.</h4>
                    <p class="text-muted para-desc mb-0">
                        We provide a platform where real estate marketers, government
                        institutions, mortgage providers,
                        and private investors collaborate seamlessly to transform Nigeria’s
                        real estate industry.</p>
                    <p class="text-muted para-desc mb-0">
                        Through innovation, advocacy, and strategic partnerships,
                        we empower members to achieve sustainable growth while advancing professional
                        standards and fostering trust within the real estate ecosystem.
                    </p>

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

    <x-teams/>
    <!--end container-->

   {{-- <x-blog-section/>--}}
    <!--end container-->

    <x-get-in-touch/>
    <!--end container-->
</section><!--end section-->
<!-- End -->

@endsection
