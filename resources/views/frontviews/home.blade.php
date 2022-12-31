@extends('layouts.guest')

@section('tittletop', 'Get great deal on apps and more')

@section('tittle', 'Get great deal on apps and more')
@section('description', 'The marketplace for great deals on apps, PDFs, courses, template and more.')
@section('image', asset('assets/images/acarty-og-image.png'))


@section('header')
<link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
@endsection


@section('footer')
@endsection


@section('body')
@include('frontviews.loginmodal')
@include('frontviews.registermodal')
<!-- BANNER -->
<div class="banner-wrap">
    <section class="banner">
        <h5>Welcome to</h5>
        <h1>The Web App <span>Marketplace</span></h1>
        <p>The marketplace for great deals on apps, PDFs, courses, template and more...</p>
        <img src="{{ asset('assets/images/top_items.png') }}" alt="banner-img">

        <!-- SEARCH WIDGET -->
        <div class="search-widget">
            <form class="search-widget-form" method="POST" action="{{ route('homepagesearch.page')}}">
                @csrf
                <input type="text" name="search" placeholder="Search items here...">
                <label for="categories" class="select-block">
                    <select name="types" id="categories">
                        <option value="">All Categories</option>
                        <option value="1">Software</option>
                        <option value="3">Courses & Learning</option>
                        <option value="4">Templates</option>
                        <option value="5">Creative Resources</option>
                        <option value="6">Tickets</option>
                    </select>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </label>
                <button type="submit" class="button medium dark">Search Now!</button>
            </form>
        </div>
        <!-- /SEARCH WIDGET -->
    </section>
</div>
<!-- /BANNER -->
<div class="clearfix"></div>

<div id="product-sideshow-wrap">
    <div id="product-sideshow">
        <div class="product-showcase">
            <!-- HEADLINE -->
            <div class="headline primary">
                <h4>Latest Online Products</h4>
                <!-- SLIDE CONTROLS -->
                <div class="slide-control-wrap">
                    <div class="slide-control left">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>

                    <div class="slide-control right">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>
                </div>
                <!-- /SLIDE CONTROLS -->
            </div>
            <!-- /HEADLINE -->
            <!-- PRODUCT LIST -->
            <div id="pl-1" class="product-list grid column4-wrap owl-carousel">
                @foreach ($products->slice(5, 11) as $product )
                    @include('frontviews.justproduct')
                @endforeach
            </div>
            <!-- /PRODUCT LIST -->
                <!-- /PRODUCT ITEM -->


        </div>
        <!-- /PRODUCT SHOWCASE -->
    </div>
</div>


<!-- PROMO -->
<div class="promo-banner dark left">
    <span class="icon-wallet"></span>
    <h5>Make money with your product!</h5>
    <h1>Start <span>Selling</span></h1>
    @auth
    <a href="#" class="button medium primary">Sell Here!</a>
    @else
    <button href="#login"  class="button medium primary modal-button">Log In!</button>
    @endauth
</div>
<!-- /PROMO -->

<!-- PROMO -->
<div class="promo-banner secondary right">
    <span class="icon-tag"></span>
    <h5>Find any web app you want</h5>
    <h1>Start Buying</h1>
    @auth
    <a href="{{ route('items.page') }}" class="button medium dark">Browse Items!</a>
    @else
    <button href="#register" class="button medium dark modal-button">Register Now!</a>
    @endauth

</div>
<!-- /PROMO -->

<div class="clearfix"></div>

<!-- PRODUCT SIDESHOW -->
<div id="product-sideshow-wrap">
    <div id="product-sideshow">
        <!-- PRODUCT SHOWCASE -->
        <div class="product-showcase">
            <!-- HEADLINE -->
            <div class="headline primary">
                <h4>Latest Online Products</h4>
                <!-- SLIDE CONTROLS -->
                <div class="slide-control-wrap">
                    <div class="slide-control left">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>

                    <div class="slide-control right">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>
                </div>
                <!-- /SLIDE CONTROLS -->
            </div>
            <!-- /HEADLINE -->
            <!-- PRODUCT LIST -->
            <div id="pl-1" class="product-list grid column4-wrap owl-carousel">
                @foreach ($products->slice(0, 10) as $product )
                    @include('frontviews.justproduct')
                @endforeach
            </div>
            <!-- /PRODUCT LIST -->


            <!-- PRODUCT LIST -->
            <div id="pl-3" class="product-list grid column4-wrap owl-carousel">
                @foreach ($products->slice(10, 20) as $product )
                    @include('frontviews.justproduct')
                @endforeach
                </div>
                <!-- /PRODUCT ITEM -->


        </div>
        <!-- /PRODUCT SHOWCASE -->

        <!-- PRODUCT SHOWCASE -->
        <div class="product-showcase">
            <!-- HEADLINE -->
            <div class="headline secondary">
                <h4>Trending Services</h4>
                <!-- SLIDE CONTROLS -->
                <div class="slide-control-wrap">
                    <div class="slide-control left">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>

                    <div class="slide-control right">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>
                </div>
                <!-- /SLIDE CONTROLS -->
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT LIST -->
            <div id="pl-4" class="product-list grid column4-wrap owl-carousel">
                @foreach ($products->slice(4, 12) as $product )
                    @include('frontviews.justproduct')
                @endforeach
        </div>
        <!-- /PRODUCT SHOWCASE -->
    @auth
    <!-- PRODUCT SHOWCASE -->
        <div class="product-showcase">
            <!-- HEADLINE -->
            <div class="headline">
                <h4>Your Followers Feed</h4>
                <!-- SLIDE CONTROLS -->
                <div class="slide-control-wrap">
                    <div class="slide-control left">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>

                    <div class="slide-control right">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </div>
                </div>
                <!-- /SLIDE CONTROLS -->
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT LIST -->
            <div id="pl-5" class="product-list grid column4-wrap owl-carousel">
                @foreach ($products->slice(4, 12) as $product )
                    @include('frontviews.justproduct')
                @endforeach
            </div>
        <!-- PRODUCT SHOWCASE -->
        </div>
    @endauth
    </div>
</div>
<!-- /PRODUCTS SIDESHOW -->

@include('frontviews.justnewsletter')
@endsection
