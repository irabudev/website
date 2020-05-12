@extends('layout.default')
@section('content')
<div class="feature-large-images-wrapper section-space--ptb_100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12  section-space--mb_60">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">

                    <h3 class="heading mb-20">It seems this page is missing</h3>
                    <h6 class="section-sub-title mb-20">Could be a typo in your URL or a deprecated hyperlink… <br>
                        We're here to help!</h6>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>

        <div class="cybersecurity-about-box">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="modern-number-01 number-two">
                        <h5 class="heading mt-30">Here is a few
                            suggestions</h5>
                    </div>
                </div>

                <div class="col-lg-5 ml-auto">
                    <div class="faq-wrapper">
                        <div class="card">
                            <a href="{{ route('home') }}">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn-link">
                                            Home
                                        </button>
                                    </h5>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                            <a class="link-white link-underline" href="{{ mailto(
                            'Potential project brief',
                            'Tell us as much as you can about
                            - your online project
                            - your planning
                            - your budget
                            - …

                            Anything that helps us to start straightforward!'
                            ) }}">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn-link ">
                                            Brief us
                                        </button>
                                    </h5>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{ route('about') }}">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn-link">
                                            About us
                                        </button>
                                    </h5>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<section class="section-space--pt_50 section-space--pb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h6 class="section-sub-title mb-20">If you have a burning question at this point,
                    just contact us so we can help you out.</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 offset-lg-1 text-center">
                <span class="text">
                    <a class="" href="mailto:info@irabu.co.tz">info@irabu.co.tz</a>
                    <br>

                    <a class="" href="#tel">+255 744 650 849</a>
                </span>

            </div>

            <div class="col-lg-6 text-center">
                <a class="" href="https://goo.gl/maps/mxz4TfEfKQciCeog8" target="_blank" rel="noreferrer noopener">
                    Irabu Company Ltd
                    <br>
                    Kilongawima Street <br>Dar es Salaam
                    <span class="icon px-2 fill-pink group-hover:opacity-75 transition-fill transition-fast">
                        {{ svg('icons/fas-map-marker-alt') }}
                    </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
