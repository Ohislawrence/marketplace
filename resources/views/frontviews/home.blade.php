@extends('layouts.guest')

@section('tittletop', 'Get great deal on apps and more')

@section('tittle', 'Get great deal on apps and more')
@section('description', 'A marketplace for great deals on apps, PDFs, courses, template and more.')
@section('image', 'Get great deal on apps and more')


@section('header')
<link rel="stylesheet" href="{{ asset('assets/css/vendor/owl.carousel.css') }}">
@endsection


@section('footer')

@section('body')

<!-- BANNER -->
<div class="banner-wrap">
    <section class="banner">
        <h5>Welcome to</h5>
        <h1>The Biggest <span>Marketplace</span></h1>
        <p>A marketplace for great deals on apps, PDFs, courses, template and more...</p>
        <img src="{{ asset('assets/images/top_items.png') }}" alt="banner-img">

        <!-- SEARCH WIDGET -->
        <div class="search-widget">
            <form class="search-widget-form">
                <input type="text" name="category_name" placeholder="Search goods or services here...">
                <label for="categories" class="select-block">
                    <select name="categories" id="categories">
                        <option value="0">All Categories</option>
                        <option value="1">Software</option>
                        <option value="2">Courses & Learning</option>
                        <option value="3">Templates</option>
                        <option value="4">Creative Resources</option>
                        <option value="5">Tickets</option>
                    </select>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </label>
                <button class="button medium dark">Search Now!</button>
            </form>
        </div>
        <!-- /SEARCH WIDGET -->
    </section>
</div>
<!-- /BANNER -->

<!-- SERVICES -->
<div id="services-wrap">
    <section id="services">
        <!-- SERVICE LIST -->
        <div class="service-list column4-wrap">
            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-present"></span>
                </div>
                <h3>Buy &amp; Sell Easily</h3>
                <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-lock"></span>
                </div>
                <h3>Secure Transaction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-like"></span>
                </div>
                <h3>Products Control</h3>
                <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-diamond"></span>
                </div>
                <h3>Quality Platform</h3>
                <p>Lorem ipsum dolor sit amet, consectetur sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- /SERVICE ITEM -->
        </div>
        <!-- /SERVICE LIST -->
        <div class="clearfix"></div>
    </section>
</div>
<!-- /SERVICES -->

<!-- PROMO -->
<div class="promo-banner dark left">
    <span class="icon-wallet"></span>
    <h5>Make money instantly!</h5>
    <h1>Start <span>Selling</span></h1>
    <a href="#" class="button medium primary">Open Your Shop!</a>
</div>
<!-- /PROMO -->

<!-- PROMO -->
<div class="promo-banner secondary right">
    <span class="icon-tag"></span>
    <h5>Find anything you want</h5>
    <h1>Start Buying</h1>
    <a href="#" class="button medium dark">Register Now!</a>
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
    </div>
</div>
<!-- /PRODUCTS SIDESHOW -->

@include('frontviews.justnewsletter')
@endsection
