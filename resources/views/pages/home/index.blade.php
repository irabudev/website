@extends('layout.default')

@section('content')
<div class="preview-hero-area preview-hero-bg position-relative section-space--ptb_120">
    <div class="container-fluid container-fluid--cp-150">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="preview-hero-text wow move-up">
                    <h1 class="font-weight--reguler mb-30 intro-slogan">Building,to simplify</h1>
                    <h6 class="mb-30">We craft SIMPLE & VALUABLE
                        solutions to everday challenges</h6>
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
                                <h4 class="heading font-weight--reguler mb-10">Gorocket</h4>
                                <p class="sub-text text-color-primary">WEB, iOS , ANDROID</p>
                                <div class="text mb-10">A simple, instinctive and customizable cloud based tool that helps you manage your leads, sales and product delivery processes; ultimately boosting sales and productivity!</div>
                                <a href="https://app.gorocket.co/" class="text-color-primary"><span><i class="fas fa-chevron-right"></i> {{ __('app.gorocket.co') }}</span></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                            <div class="slide-image">
                                <div class="image-wrap">
                                    <div class="image">
                                        <img class="img-fluid" src="{{ asset('images/portfolio/gorocket.png') }}" alt="">
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
<div class="feature-images-wrapper section-space--ptb_100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center">
                    <h3 class="heading">What we do best.</h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="feature-images__one">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-01-image-01-100x108.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">Consultation </h5>
                                        <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>

                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-01-image-02-100x108.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">Lean design and development</h5>
                                        <div class="text">It’s possible to simultaneously manage and transform information from one server to another.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-01-image-06-100x108.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">Modular design</h5>
                                        <div class="text">Enhancing the strength and security of firewalls to protect online data from malicious sources.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>

                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-01-image-03-100x108.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">Simple solution</h5>
                                        <div class="text">Back up your database, store in a safe and secure place while still maintaining its accessibility.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>

                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-01-image-04-100x108.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">Testing and deployment</h5>
                                        <div class="text">We propose feasible & practical plans for successfully transform businesses based on their needs.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>

                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-01-image-05-100x108.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">Production and scaling</h5>
                                        <div class="text">Mitech takes into account all conditions and budgets needed for building infrastructure plan.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>



                    </div>
                </div>

                <div class="section-under-heading text-center section-space--mt_80">
                    We'd like to be a substantial part of your project. Read more on
                    <a href="{{ route('process') }}"><span>{{ __('how we work') }}</span></a>
                    , or
                    <a href="{{ route('process') }}"><span>{{ __('get in touch !') }}</span></a>
                </div>

            </div>
        </div>
    </div>
</div>

@include('partials.clients.clients')

@include('partials.contact')


@endsection