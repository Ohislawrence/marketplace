<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/tooltipster.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- favicon -->
        <link rel="icon" href="{{ asset('favicon2.png') }}">

        <title>@yield('tittletop') | {{ config('app.name') }}</title>


        @yield('header')
    </head>
    <body>
        @include('layouts.partial.appheader')

        @yield('body')

        <!-- SVG ARROW -->
        <svg style="display: none;">
            <symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
                <path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
                    L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
            </symbol>
        </svg>
        <!-- /SVG ARROW -->

        <!-- SVG PLUS -->
        <svg style="display: none;">
            <symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
                <rect x="5" width="3" height="13"/>
                <rect y="5" width="13" height="3"/>
            </symbol>
        </svg>
        <!-- /SVG PLUS -->

        <!-- SVG MINUS -->
        <svg style="display: none;">
            <symbol id="svg-minus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
                <rect y="5" width="13" height="3"/>
            </symbol>
        </svg>
        <!-- /SVG MINUS -->

        @yield('footer')
        <!-- jQuery -->
        <script src="{{ asset('assets/js/vendor/jquery-3.1.0.min.js') }}"></script>
        <!-- Side Menu -->
        <script src="{{ asset('assets/js/side-menu.js') }}"></script>
        <!-- Dashboard Header -->
        <script src="{{ asset('assets/js/dashboard-header.js') }}"></script>
    </body>
</html>
