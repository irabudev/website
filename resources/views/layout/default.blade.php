<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.partials.meta')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/78c1a7d708.js"></script>

    @include('layout.partials.favicons')

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('layout.partials.loader')
        @include('layout.partials.header')

        <main>
            <div class="site-wrapper-reveal">
                @yield('content')
            </div>
        </main>

        @include('layout.partials.footer')
        @include('layout.partials.mobileheader')
    </div>
</body>

</html>
