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
    @include('partials.loader')
    @include('partials.header')

    <main>
        <div class="site-wrapper-reveal">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')
    @include('partials.mobileheader')
</body>

</html>
