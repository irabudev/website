@extends('layout.default')

@section('content')
<div class="preview-hero-area preview-hero-bg position-relative section-space--ptb_120">
    <div class="container-fluid container-fluid--cp-150">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="preview-hero-text wow move-up">
                    <h6 class="mb-30">Technology and software</h6>
                    <h2 class="font-weight--reguler text-white mb-30">Mitech - A Technology, Digital Software HTML Template</h2>
                    <div class="hero-button mt-40">
                        <a href="index.html#section-demos" class="btn btn--white">Browse demos </a>
                    </div>
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
 <!--=========== Service Projects Wrapper Start =============-->
 <div class="service-projects-wrapper section-space--pt_100 mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h6 class="section-sub-title mb-20">Case studies</h6>
                            <h3 class="heading">Proud projects that <span class="text-color-primary">make us stand out</span></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-container service-slider__project-active">
                    <div class="swiper-wrapper service-slider__project">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <div class="service-project-slide-info">
                                        <h4 class="heading font-weight--reguler mb-10">Aqua Technology Case Studies</h4>
                                        <p class="sub-text text-color-primary">Cyber Security</p>
                                        <div class="text">ARM Holdings is the world's leading semiconductor Intellectual Property (IP) supplier. A semiconductor is the electronic controller at the heart of many devices that we use every day.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                    <div class="slide-image">
                                        <div class="image-wrap">
                                            <div class="image">
                                                <img class="img-fluid" src="{{ asset('images/home-services-hero-bg.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <div class="service-project-slide-info">
                                        <h4 class="heading font-weight--reguler mb-10">Aqua Technology Case Studies</h4>
                                        <p class="sub-text text-color-primary">Cyber Security</p>
                                        <div class="text">ARM Holdings is the world's leading semiconductor Intellectual Property (IP) supplier. A semiconductor is the electronic controller at the heart of many devices that we use every day.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                    <div class="slide-image">
                                        <div class="image-wrap">
                                            <div class="image">
                                                <img class="img-fluid" src="assets/images/features/home-services-case-study-slide-image-02.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== Service Projects Wrapper End =============-->
        
@include('partials.contact')

@include('partials.clients.clients')


@endsection