<div class="service-projects-wrapper section-space--pt_100 mb-20" id="case-studies">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center section-space--mb_60">
                    <h6 class="section-sub-title mb-20">{{__('Case studies')}}</h6>
                    <h3 class="heading">
                        {{__('Proud projects that')}}
                        <span class="text-color-primary">{{__('make us stand out')}}</span>
                    </h3>
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
                                <div class="text mb-10">
                                    {{__('index.gorocket')}}
                                </div>
                                <a href="https://app.gorocket.co/" class="text-color-primary">
                                    <span>
                                        <i class="fas fa-chevron-right"></i>
                                        {{ __('app.gorocket.co') }}
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                            <div class="slide-image">
                                <div class="image-wrap">
                                    <div class="image">
                                        <img class="img-fluid" src="{{ asset('images/portfolio/gorocket.png') }}"
                                            alt="Rocket Inc">
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
                                <h4 class="heading font-weight--reguler mb-10">The House of 78inc</h4>
                                <p class="sub-text text-color-primary">ETHOS, PATHOS, LOGOS</p>
                                <div class="text">
                                    {{__('index.78inc')}}
                                </div>
                                <a href="https://78inc.co/" class="text-color-primary">
                                    <span>
                                        <i class="fas fa-chevron-right"></i>
                                        {{ __('Visit www.78inc.co to see their portfolio') }}
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                            <div class="slide-image">
                                <div class="image-wrap">
                                    <div class="image">
                                        <img class="img-fluid" src="{{ asset('images/portfolio/78art.png') }}"
                                            alt="The House of 78inc">
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
