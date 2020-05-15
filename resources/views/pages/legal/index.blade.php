@extends('layout.default', [
'title' => 'Legal',
'description' => 'General conditions, policies & disclaimers. A lot of difficult sentences.',
])

@section('content')
<div class="container">
    <div class="legal-banner-wrap banner-space legal-us-bg">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center">

                    <h1 class="heading">
                        {{__('Legal stuff')}}
                    </h1>
                    <h5 class="font-weight--normal ">
                        {{__('Let\'s agree on some stuffs')}}
                    </h5>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>
    </div>

    <div class="legal-links section-space--pb_100">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4">
                <div class="list-group-wrap section-space--mb_60">
                    <div class="separator-list-wrap">
                        <div class="element-title section-space--mb_30">
                            <h5>{{__('GENERAL CONDITIONS')}}</h5>
                        </div>
                        <ul class="">
                            <li class="list-item">
                                <a href="{{ route('legal.conditions',app()->getLocale())}}" class="font-weight-bold hover-style-link">
                                    {{__(' General conditions')}}
                                    <span class="button-icon ml-1">
                                        <i class="far fa-long-arrow-right"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="list-group-wrap section-space--mb_60">
                    <div class="separator-list-wrap">
                        <div class="element-title section-space--mb_30">
                            <h5>{{__('POLICIES & DISCLAIMERS')}}</h5>
                        </div>
                        <ul class="">
                            <li class="list-item">
                                <a href="{{ route('legal.disclaimer', app()->getLocale())}}"
                                    class="font-weight-bold hover-style-link">
                                    {{__('Disclaimer')}}
                                    <span class="button-icon ml-1">
                                        <i class="far fa-long-arrow-right"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="{{ route('legal.privacy', app()->getLocale())}}"
                                    class="font-weight-bold hover-style-link">
                                    {{__('Privacy policy')}}
                                    <span class="button-icon ml-1">
                                        <i class="far fa-long-arrow-right"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
