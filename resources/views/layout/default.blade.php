<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/style.css') }}">

    @include('layout.partials.favicons')

</head>

<body>

    @include('layout.partials.header')


        @yield('content')


    @include('layout.partials.footer')
    <script src="{{ mix('/js/app.js') }}" defer></script>

</body>
</html>
