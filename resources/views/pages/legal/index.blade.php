@extends('layout.default', [
'title' => 'Legal',
'description' => 'General conditions, policies & disclaimers. A lot of difficult sentences.',
])

@section('content')

<div class="legal-banner-wrap banner-space legal-us-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">

                    <h1 class="heading">
                        Legal stuff
                    </h1>
                    <h5 class="font-weight--normal ">
                        Let's agree on some stuffs
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
                            <h5>GENERAL CONDITIONS</h5>
                        </div>
                        <ul class="">
                            <li class="list-item">
                                <a href="{{ route('legal.conditions')}}">General conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="list-group-wrap section-space--mb_60">
                    <div class="separator-list-wrap">
                        <div class="element-title section-space--mb_30">
                            <h5>POLICIES & DISCLAIMERS</h5>
                        </div>
                        <ul class="">
                            <li class="list-item">
                                <a href="{{ route('legal.disclaimer')}}">Disclaimer</a>
                            </li>
                            <li class="list-item">
                                <a href="{{ route('legal.privacy')}}">Privacy policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
