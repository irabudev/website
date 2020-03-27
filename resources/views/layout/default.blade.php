<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @include('layout.partials.favicons')

</head>

<body>

    @include('layout.partials.header')


        @yield('content')


    @include('layout.partials.footer')
</body>
</html>
