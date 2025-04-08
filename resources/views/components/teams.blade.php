<div {{ $attributes->class(['container mt-100 mt-60']) }}>
    <div class="row justify-content-center">
        <div class="col">
            <div class="section-title text-center mb-4 pb-2">
                <h4 class="title mb-3">Meet the Executives</h4>
                <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties
                    without any agent or commissions.</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row g-4 mt-0">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card team team-primary text-center">
                <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                    <img src="{{ asset('images/teams/Abdulhamed_salau_ladagu.jpeg') }}" class="img-fluid" alt="">
                    <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                    @if(false)
                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                            data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                            data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                            data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    @endif
                </div>

                <div class="content mt-3">
                    <a href="#" class="text-dark h5 mb-0 title">Abdulhamed salau ladagu</a>
                    <h6 class="text-muted mb-0 fw-normal">National Treasurer</h6>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-4 col-12">
            <div class="card team team-primary text-center">
                <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                    <img src="{{ asset('images/teams/Andenira_Ayuba_Ande.jpeg') }}" class="img-fluid" alt="">
                    <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                    @if(false)
                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                            data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                            data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                            data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    @endif
                </div>

                <div class="content mt-3">
                    <a href="#" class="text-dark h5 mb-0 title ">{{ ucwords(strtolower('ANDENIRA AYUBA ANDE PHILBERTS Esq.')) }}</a>
                    <h6 class="text-muted mb-0 fw-normal">Legal Adviser</h6>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-4 col-12">
            <div class="card team team-primary text-center">
                <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                    <img src="{{ asset('images/teams/Alhaji_Abba.jpeg') }}" class="img-fluid" alt="">
                    <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                    @if(false)
                    <ul class="list-unstyled team-social mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                        data-feather="facebook" class="icons fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                        data-feather="instagram" class="icons fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                        data-feather="twitter" class="icons fea-social"></i></a></li>
                    </ul><!--end icon-->
                    @endif
                </div>

                <div class="content mt-3">
                    <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Al-amin Alhaji Abba</a>
                    <h6 class="text-muted mb-0 fw-normal">Director of Media and Publicity</h6>
                </div>
            </div>
        </div><!--end col-->

        @if(false)
        <div class="col-lg-3 col-md-4 col-12">
            <div class="card team team-primary text-center">
                <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                    <img src="images/client/07.jpg" class="img-fluid" alt="">
                    <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                    <ul class="list-unstyled team-social mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                        data-feather="facebook" class="icons fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                        data-feather="instagram" class="icons fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i
                                        data-feather="twitter" class="icons fea-social"></i></a></li>
                    </ul><!--end icon-->
                </div>

                <div class="content mt-3">
                    <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Johnny English</a>
                    <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                </div>
            </div>
        </div><!--end col-->
        @endif
    </div><!--end row-->
</div>
