@extends('layout.default', [
'title' => 'About us',
'description' => 'Contact us on info@irabu.co.tz or (+255) 764 556 463. See our contact details and get to know our
team.',
])

@section('content')
<div class="about-banner-wrap banner-space about-us-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">

                    <h1 class="heading  text-white">
                        Lets grab a <span class="text-color-primary">cup of coffee <br> (or
                            tea) </span> & <span class="text-color-primary"> chat.</span>
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
