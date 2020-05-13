@extends('layout.default', [
'title' => 'Legal',
'description' => 'General conditions, policies & disclaimers. A lot of difficult sentences.',
])

@section('content')
<div class="container" style="padding: 6.5em;">

    <div class="legal-banner-wrap banner-space legal-us-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">

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
    </div>

    <div class="legal-links section-space--pt_50 section-space--pb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="list-group-wrap section-space--mb_60">
                        <div class="separator-list-wrap">
                            <div class="element-title section-space--mb_30">
                                <h5>{{__('GENERAL CONDITIONS')}}</h5>
                            </div>
                            <ul class="">
                                <li class="list-item">
                                    <a href="{{ route('legal.conditions',app()->getLocale())}}">General conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="list-group-wrap section-space--mb_60">
                        <div class="separator-list-wrap">
                            <div class="element-title section-space--mb_30">
                                <h5>{{__('POLICIES & DISCLAIMERS')}}</h5>
                            </div>
                            <ul class="">
                                <li class="list-item">
                                    <a
                                        href="{{ route('legal.disclaimer', app()->getLocale())}}">{{__('Disclaimer')}}</a>
                                </li>
                                <li class="list-item">
                                    <a
                                        href="{{ route('legal.privacy', app()->getLocale())}}">{{__('Privacy policy')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
