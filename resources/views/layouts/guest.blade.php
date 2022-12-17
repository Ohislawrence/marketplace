<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/tooltipster.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/mobilenav.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
        <!-- Fonts -->

        <link href='https://fonts.googleapis.com/css?family=Poppins+Web:400,600,700' type="text/html">

        @yield('header')
        <!-- favicon -->
        <link rel="icon" href="{{ asset('favicon2.png') }}">

        <title>@yield('tittletop') | {{ config('app.name') }}</title>

        @include('layouts.partial.meta')


    </head>
    <body>
        @include('layouts.partial.header')
        @include('layouts.partial.sidemenu')
        @include('layouts.partial.mainmenu')

        @yield('body')

        @include('layouts.partial.footer')
        @include('layouts.partial.mobilenav')


        <script src="{{ asset('assets/js/modal/modal.js') }}"></script>
        <!-- jQuery -->
        <script src="{{ asset('assets/js/vendor/jquery-3.1.0.min.js') }}"></script>
        <!-- Tooltipster -->
        <script src="{{ asset('assets/js/vendor/jquery.tooltipster.min.js') }}"></script>
        <!-- Owl Carousel -->
        <script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
        <!-- Side Menu -->
        <script src="{{ asset('assets/js/side-menu.js') }}"></script>
        <!-- Home -->
        <script src="{{ asset('assets/js/home.js') }}"></script>
        <!-- Tooltip -->
        <script src="{{ asset('assets/js/tooltip.js') }}"></script>
        <!-- User Quickview Dropdown -->
        <script src="{{ asset('assets/js/user-board.js') }}"></script>
        <!-- Home Alerts -->
        <script src="{{ asset('assets/js/home-alerts.js') }}"></script>
        <!-- Footer -->
        <script src="{{ asset('assets/js/footer.js') }}"></script>
        @yield('footer')
    </body>
</html>
