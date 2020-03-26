<!DOCTYPE html>
<html lang="en">

<head>


    @include('layout.partials.favicons')

</head>

<body class="flex flex-col min-h-screen">

    @include('layout.partials.header')

    <div class="flex-grow" role="main">
        @yield('content')
    </div>

    @include('layout.partials.footer')
</body>
</html>
