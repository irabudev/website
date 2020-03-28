@extends('layout.default')
@section('content')
<div class="site-wrapper-reveal">
  <div class="infotechno-hero infotechno-bg">
      <div class="container-fluid">
          <div class="row align-items-center">
              <!--baseline-->
              <div class="col-lg-6 col-md-6">
                  <div class="infotechno-hero-text  wow move-up">
                      <h1 class="font-weight--reguler mb-15">
                        Building,<br>
to simplify </h1>
                          <p>We craft SIMPLE & VALUABLE
solutions to everday challenges. </p>

                  </div>
              </div>
              <div class="col-lg-6 col-md-6">
                  <div class="infotechno-hero-inner-images">
                      <div class="infotechno-inner-one">
                          <img class="img-fluid" src="{{ asset('images/hero/home-infotechno-main-slider-slide-01-image-01.png') }}" alt="">
                      </div>
                      <div class="infotechno-inner-two  wow move-up">
                          <img class="img-fluid" src="{{ asset('images/hero/home-infotechno-main-slider-slide-01-image-02.png') }}" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <div class="tabs-wrapper bg-gray section-space--ptb_100">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        <h6 class="section-sub-title mb-20">discover our company</h6>
                        <h3 class="section-title">We’ve been thriving in<span class="text-color-primary"> 38 years</span> </h3>
                    </div>
                </div>
            </div> -->




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
                                            <div class="text mb-30">
                                              One of our proud product is gorocket.co. Gorocket is a simple, instinctive and customizable cloud based tool that helps you manage your leads, sales and product delivery processes; ultimately boosting sales and productivity!
                                            </div>

                                                <div class="tab-button">
                                                    <a class="btn-text" href="http://app.gorocket.co">
                                                        <span class="button-text"><i class="far fa-long-arrow-right"></i> app.gorocket.co</span>
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
