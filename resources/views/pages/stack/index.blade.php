@extends('layout.default', [
'title' => '❤️ Open source',
'description' => 'Get to know our packages and side projects for Laravel & JavaScript. Read insights from the team and
learn how to support us.',
])

@section('content')
<div class="about-banner-wrap banner-space our-stack-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">

                    <h1 class="heading  text-white">
                        Code is for humans
                        not machine
                    </h1>
                    <h5 class="font-weight--normal text-white">
                        Let it be tooling, frontend, backend, devops.

                        We try to follow almost all best practice
                    </h5>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>
    </div>
</div>

@include('pages.stack.partials.icons')

@include('pages.stack.partials.stack')

@include('pages.stack.partials.hire')

@endsection
