@extends('layout.default', [
'title' => 'Design & Development',
'description' => 'About our preferred tools to build modern web applications. Read more on our technology stack and hire
us as a team',
])

@section('content')
<div class="about-banner-wrap banner-space our-process-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">

                    <h1 class="heading  text-white">
                        {{__('Simple and custom is achievable')}}
                    </h1>
                    <h5 class="font-weight--normal text-white">
                        {{__('We craft SIMPLE & VALUABLE solutions to everday challenges')}}
                    </h5>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>
    </div>
</div>
<div class="gradation-process-area section-space--ptb_100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="gradation-title-wrapper section-space--mb_60">
                    <div class="gradation-title-wrap ">
                        <h6 class="section-sub-title text-black mb-20">{{__('How we work')}}</h6>
                        <h4 class="heading">
                            How we helps <span class="text-color-primary">your <br> business
                                succeed</span>
                        </h4>
                    </div>


                    <div class="gradation-sub-heading">
                        <h3 class="heading"><mark>07</mark> {{__('Steps')}}</h3>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="ht-gradation style-01">
                    <!-- Single item gradation Start -->
                    <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.1s">
                        <div class="line"></div>
                        <div class="circle-wrap">
                            <div class="mask">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                                <div class="wave-pulse wave-pulse-3"></div>
                            </div>

                            <h6 class="circle">1</h6>
                        </div>

                        <div class="content-wrap">

                            <h6 class="heading">01. {{__('DISCOVERY (Objectives, Ideas, Concepts)')}} 🔎 </h6>

                            <div class="text">
                                Learn more about the client's business and explore their current approach on solving the
                                problem to find insights that will inform and guide us during the project
                            </div>


                        </div>
                    </div>
                    <!-- Single item gradation End -->

                    <!-- Single item gradation Start -->
                    <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.15s">
                        <div class="line"></div>
                        <div class="circle-wrap">
                            <div class="mask">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                                <div class="wave-pulse wave-pulse-3"></div>
                            </div>

                            <h6 class="circle">2</h6>
                        </div>

                        <div class="content-wrap">

                            <h6 class="heading">02. {{__('DEFINE (Sketches & Stories)')}} ✍️</h6>

                            <div class="text">
                                This step is all about evolving the concept
                                Focus on the main objective of the piece and avoid getting hung up on all the little
                                details
                            </div>
                        </div>
                    </div>
                    <!-- Single item gradation End -->

                    <!-- Single item gradation Start -->
                    <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.20s">
                        <div class="line"></div>
                        <div class="circle-wrap">
                            <div class="mask">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                                <div class="wave-pulse wave-pulse-3"></div>
                            </div>

                            <h6 class="circle">3</h6>
                        </div>

                        <div class="content-wrap">

                            <h6 class="heading">03. {{__('DESIGN (Design, build & iterate')}}) 📐</h6>

                            <div class="text">
                                Now we can start to develop all of this into high fidelity designs and begin iterate on
                                our ideas
                            </div>

                        </div>
                    </div>
                    <!-- Single item gradation End -->

                    <!-- Single item gradation Start -->
                    <div class="item item-1 animate wow fadeInRight" data-wow-delay="0.25s">
                        <div class="line"></div>
                        <div class="circle-wrap">
                            <div class="mask">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                                <div class="wave-pulse wave-pulse-3"></div>
                            </div>

                            <h6 class="circle">4</h6>
                        </div>

                        <div class="content-wrap">

                            <h6 class="heading">04. {{__('DEVELOP (Iterate, iterate & iterate)')}} 🏗️</h6>

                            <div class="text">
                                Continue refining designs, story and assets. By the end of this step we
                                should be <b>95.998328%</b> done with the project
                            </div>
                        </div>
                    </div>
                    <!-- Single item gradation End -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ht-gradation style-01">
                    <!-- Single item gradation Start -->
                    <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.15s">
                        <div class="line"></div>
                        <div class="circle-wrap">
                            <div class="mask">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                                <div class="wave-pulse wave-pulse-3"></div>
                            </div>

                            <h6 class="circle">5</h6>
                        </div>

                        <div class="content-wrap">

                            <h6 class="heading">05. {{__('Concepts &amp; Initatives')}}</h6>

                            <div class="text">
                                Our experts come up with all kinds of ideas and initiatives for delivering
                                the best solutions for IT services chosen.
                            </div>

                            <a class="gradation-btn" href="index-services.html#">
                                <span class="button-text" data-text="{{__('Look more')}}">
                                    {{__('Look more')}}
                                </span>
                                <span class="button-icon far fa-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Single item gradation End -->

                    <!-- Single item gradation Start -->
                    <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.20s">
                        <div class="line"></div>
                        <div class="circle-wrap">
                            <div class="mask">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                                <div class="wave-pulse wave-pulse-3"></div>
                            </div>

                            <h6 class="circle">6</h6>
                        </div>

                        <div class="content-wrap">

                            <h6 class="heading">06. {{__('Testing & Trying')}}</h6>

                            <div class="text">
                                After agreeing on the ideas and plans, we will conduct as scheduled and
                                give comments on the results &amp; adaptations.
                            </div>

                            <a class="gradation-btn" href="index-services.html#">
                                <span class="button-text" data-text="Look more">
                                    {{__('Look more')}} </span>
                                <span class="button-icon far fa-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Single item gradation End -->

                    <!-- Single item gradation Start -->
                    <div class="item item-1 animate wow fadeInRight" data-wow-delay="0.25s">
                        <div class="line"></div>
                        <div class="circle-wrap">
                            <div class="mask">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                                <div class="wave-pulse wave-pulse-3"></div>
                            </div>

                            <h6 class="circle">7</h6>
                        </div>

                        <div class="content-wrap">

                            <h6 class="heading">07. {{__('Execute & install')}}</h6>

                            <div class="text">Once the final plan is approved, everything will be conducted according to
                                the agreed contract.</div>

                            <a class="gradation-btn" href="index-services.html#">
                                <span class="button-text" data-text="{{__('Look more')}}">
                                    {{__('Look more')}} </span>
                                <span class="button-icon far fa-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Single item gradation End -->
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.partials.contact')
@endsection
