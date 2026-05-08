<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="icon" href="{{ asset('assets/images/Logo.jpeg') }}" type="image/jpeg">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/styles.css') }}">
</head>

<body style="background:#e2e8f0">

    <x-navbar />

    @yield('content')

    <x-footer />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            // Carousel
            $('#myCarousel').carousel({
                interval: 3000,
                ride: 'carousel'
            });

            // Navbar scrolled effect
            $(window).scroll(function() {
                if ($(this).scrollTop() > 10) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });

        });
    </script>

</body>

</html>
