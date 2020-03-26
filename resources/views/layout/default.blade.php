<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
    @include('layout.partials.favicons')

</head>

<body class="flex flex-col min-h-screen">

    @include('layout.partials.header')


        @yield('content')
    

    @include('layout.partials.footer')
</body>
</html>
