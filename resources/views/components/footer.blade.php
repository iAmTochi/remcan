<section
        {{ $attributes->class(['bg-building-pic d-table w-100']) }} style="background: url('images/building.png') bottom no-repeat;"></section>
<footer class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60 footer-border">
                    <div class="row">
                        <div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <a href="{{ route('home') }}" class="logo-footer text-white fw-bold">
                                <img src="{{asset('images/logo.png')}}" alt="" width="60"> &nbsp;  {{ config('app.name') }}
                            </a>
                            <p class="mt-4">Contribute to the sustainable development of the
                                real estate sector in
                                Nigeria by promoting best practices,
                                innovation, and collaboration among stakeholders</p>
                            <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">


                                @if(false)
                                <li class="list-inline-item">
                                    <a href="http://linkedin.com/company/" target="_blank" class="rounded-3">
                                        <i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i>
                                    </a>
                                </li>
                                @endif
                                <li class="list-inline-item">
                                    <a href="https://web.facebook.com/profile.php?id=61567180021459" target="_blank" class="rounded-3"><i
                                                data-feather="facebook" class="fea icon-sm align-middle"
                                                title="facebook"></i></a></li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/officialremcan/" target="_blank" class="rounded-3">
                                        <i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://x.com/officialremcan" target="_blank" class="rounded-3">
                                        <i data-feather="x" class="fea icon-sm align-middle" title="x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="mailto:support@remcanonline.com" class="rounded-3">
                                        <i data-feather="mail" class="fea icon-sm align-middle" title="email"></i>
                                    </a>
                                </li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Company</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> About us</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Contact us</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Team</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Search</a></li>
                                <li><a href="javascript:void(0)" class="text-foot"><i
                                                class="mdi mdi-chevron-right align-middle me-1"></i> Login</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Usefull Links</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li>
                                    <a href="javascript:void(0)" class="text-foot">
                                        <i class="mdi mdi-chevron-right align-middle me-1"></i> Terms of Services
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-foot">
                                        <i class="mdi mdi-chevron-right align-middle me-1"></i> Privacy Policy
                                    </a>
                                </li>
                                <li><a href="javascript:void(0)" class="text-foot">
                                        <i class="mdi mdi-chevron-right align-middle me-1"></i> Faq
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Contact us
                                    </a>
                                </li>
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Contact Details</h5>

                            <div class="d-flex mt-4">
                                <i data-feather="map-pin" class="fea icon-sm text-primary mt-1 me-3"></i>
                                <div class="">
                                    <p class="mb-2"> Ekiti House 1st floor, opposite Ministry of Justice, <br> Beside This day Dome, <br>Central Business District, Abuja</p>
                                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.9846562500147!2d7.4936536750192815!3d9.065161690997618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0bb3bd9c078f%3A0x11ae136a3955745a!2sEkiti%20House!5e0!3m2!1sen!2sng!4v1744616078431!5m2!1sen!2sng" class="lightbox text-primary" data-type="iframe" data-group="iframe" data-width="1024px" data-height="576px">View on Google map</a>
                                </div>
                            </div>

                            <div class="d-flex mt-4">
                                <i data-feather="mail" class="fea icon-sm text-primary mt-1 me-3"></i>
                                <a href="mailto:remcanonline@yahoo.com" class="text-foot">remcanonline@yahoo.com</a>
                            </div>

                            <div class="d-flex mt-4">
                                <i data-feather="phone" class="fea icon-sm text-primary mt-1 me-3"></i>
                                <a href="tel:+234 813 331 2250" class="text-foot">+234 813 331 2250</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="footer-py-30 footer-bar">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Dynaton Technologies</a>.</p>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
</footer>
<!--end footer-->
