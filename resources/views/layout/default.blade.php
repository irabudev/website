<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.partials.header.meta')

    @include('layout.partials.header.favicons')

    @include('layout.partials.analytics')
    <script src="https://kit.fontawesome.com/6ab752ba48.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('layout.partials.header.loader')
        @include('layout.partials.header.header')

        <main>
            <div class="site-wrapper-reveal">
                @yield('content')
            </div>
        </main>

        @include('layout.partials.footer.footer')
        @include('layout.partials.header.mobileheader')
        <a href="#" class="scroll-top show" id="scroll-top">
            {{-- <img src="{{ asset('images/icons/arrow-up.svg') }}" class="arrow-top" alt="Go up" style="margin:
            1.2em;">
            <img src="{{ asset('images/icons/arrow-down.svg') }}" class="arrow-bottom" alt="Go down"> --}}
            {{-- <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i> --}}

            <i class="arrow-top fas fa-long-arrow-alt-up"></i>
            <i class="arrow-bottom fas fa-long-arrow-alt-up"></i>
        </a>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
