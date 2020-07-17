@extends('layout.default', [
'title' => __('About us'),
'description' => __('about.description'),
])

@section('content')
<div class="about-banner-wrap banner-space about-us-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">

                    <h1 class="heading  text-white">
                        {{__('Lets grab a')}}
                        <span class="text-color-primary">
                            {{__('cup of coffee')}} <br> {{__('or tea')}}
                        </span> &
                        <span class="text-color-primary"> {{__('chat')}}.</span>
                    </h1>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>
    </div>
</div>

@include('pages.about.vision')

@include('layout.partials.contact_alt')

@endsection
