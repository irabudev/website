<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.partials.header.meta')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @include('layout.partials.header.favicons')

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
    </div>
</body>

</html>
