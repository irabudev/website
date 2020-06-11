<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.partials.header.meta')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @include('layout.partials.header.favicons')

    @include('layout.partials.analytics')

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
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
    </div>
</body>

</html>
