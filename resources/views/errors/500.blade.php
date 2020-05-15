@extends('layout.default', [
'title' => 'Server error',
])

@section('content')

<section id="banner" class="banner" role="banner">
    <div class="wrap">
        <h1 class="banner-slogan">
            Our server <br>is confused
        </h1>
        <p class="banner-intro">
            Our server seems to have a little trouble building this page… <br>
            We'll get to the bottom of this asap!
        </p>
    </div>
</section>

<div class="section-group pt-0">
    @include('errors.partials.suggestions')

    <section class=section>
        <div class="wrap">
            <p class="text-2xl">
                If you have a burning question at this point, <br>just contact us so we can help you out.
            </p>

            <p class="text-2xl mt-12 grid-rows gapx-16 gapy-4 | md:mt-16 md:grid-cols justify-start items-start"
                style="--cols: auto auto auto">
                <span>
                    <a class="link link-black" href="mailto:info@irabu.co.tz">info@irabu.co.tz</a>
                    <br>

                    <a href="tel:+255764556463" class="hover-style-link text-black font-weight--bold">
                        (+255)764 556 463
                    </a>
                </span>
                <a class="group block link link-black" href="https://g.page/kiotani?share" target="_blank"
                    rel="noreferrer noopener">
                    Irabu Company ltd <br>
                    Kilongawima Street <br>Dar es Salaam
                    <span class="icon px-2 fill-pink group-hover:opacity-75 transition-fill transition-fast">
                        {{ svg('icons/fas-map-marker-alt') }}
                    </span>
                </a>
                <span class="text-xs mt-2 leading-loose">
                    <a class="link link-black" href="https://github.com/irabu-dev" target="_blank"
                        rel="noreferrer noopener">Github</a>
                    <br>
                    <a class="link link-black" href="https://linkedin.com/company/irabu" target="_blank"
                        rel="noreferrer noopener">Linkedin</a>
                    <br>
                    <a class="link link-black" href="https://www.instagram.com/irabudev" target="_blank"
                        rel="noreferrer noopener">Instagram</a>
                    <br>
                    <a class="link link-black" href="https://twitter.com/intent/tweet?text=Dear+@irabudev+…"
                        target="_blank" rel="noreferrer noopener">Twitter</a>
                </span>
            </p>

        </div>
    </section>
</div>

@endsection
