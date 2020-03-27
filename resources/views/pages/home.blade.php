@extends('layout.default')
@section('content')
<div class="site-wrapper-reveal">
    <div class="preview-hero-area preview-hero-bg position-relative section-space--ptb_120">
        <div class="container-fluid container-fluid--cp-150">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="preview-hero-text wow move-up">
                        <h1 class="mb-30">
                          Building,<br>
                          to simplify
                      </h1>
                        <h2 class="font-weight--reguler text-white mb-30">       We craft SIMPLE &amp; VALUABLE <br> solutions to everday challenges</h2>
                        <!-- <div class="hero-button mt-40">
                            <a href="index.html#section-demos" class="btn btn--white">Browse demos </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="preview-inner-img">
                        <img class="img-fluid min-img  animation_images one wow fadeInDown" src="assets/images/hero/mitech-landing-main-slider-slide-01-image-04.png" alt="">
                    </div>
                </div>
            </div>

            <img class="img-fluid pr-img-01 animation_images two wow fadeInDown" src="assets/images/hero/mitech-landing-main-slider-slide-01-image-01.png" alt="">
            <img class="img-fluid pr-img-02 animation_images two wow fadeInDown" src="assets/images/hero/mitech-landing-main-slider-slide-01-image-02.png" alt="">

            <img class="img-fluid pr-img-03 animation_images two wow fadeInDown" src="assets/images/hero/mitech-landing-main-slider-slide-01-image-03.png" alt="">

            <img class="img-fluid pr-img-04 animation_images two wow fadeInDown" src="assets/images/hero/mitech-landing-main-slider-slide-01-image-05.png" alt="">


        </div>

    </div>

    <div class="tabs-wrapper bg-gray section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        <h6 class="section-sub-title mb-20">discover our company</h6>
                        <h3 class="section-title">We’ve been thriving in<span class="text-color-primary"> 38 years</span> </h3>
                    </div>
                </div>
            </div>




                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="tab-history-image video-popup mt-30">

                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="{{ asset('images/bg/home-processing-video-intro-slider-slide-01-image-01-570x350.jpg') }}" alt="">

                                                </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">We’re available for 8 hours a day! <br>Contact to require a detailed analysis and assessment of your plan.</div>
                                                <ul class="check-list section-space--mb_40">
                                                    <li class="list-item">IT Consultancy </li>
                                                    <li class="list-item">IT Design </li>
                                                    <li class="list-item">Desktop Computing </li>
                                                    <li class="list-item">Software Engineering </li>
                                                </ul>

                                                <div class="tab-button">
                                                    <a class="btn-text" href="index-appointment.html#">
                                                        <span class="button-text">Let's get started <i class="far fa-long-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



            </div>
        </div>
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--one text-center">
                            <a href="element-cta.html#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="element-cta.html#" class="btn btn--secondary  btn-two"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="brand-logo-slider-area section-space--ptb_60 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__one">
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-01.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-01-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-02.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-02-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-03.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-03-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-04.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-04-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-05.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-05-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-06.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-06-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-07.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-07-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-08.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-08-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="element-client-logo.html#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('images/brand/mitech-client-logo-09.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('images/brand/mitech-client-logo-09-hover.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
