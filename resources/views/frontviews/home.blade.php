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
                @foreach ($products as $product )
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="{{ asset('products/featuredimage/' .$product->featureimage) }}" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->
                        @php
                        $productprice0 = $product->price * ($product->discount/100);
                        $productprice = $product->price - $productprice0;
                        @endphp
                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $productprice }}" name="price">
                                    <input type="hidden" value="{{ $product->slug }}" name="slug">
                                    <input type="hidden" value="{{ $product->type->name }}" name="type">
                                    <input type="hidden" value="{{ $product->featureimage }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                <button type="submit">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </button>
                                </form>
                                    <p>Add to Cart</p>
                            </div>
                            <!-- /PREVIEW ACTION -->


                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="{{ route('singleproduct.page', ['productslug' => $product->slug ]) }}">
                            <p class="text-header">{{ $product->name }}</p>
                        </a>
                        <p class="product-description">{!! Str::limit($product->desc, 30) !!}</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">{{$product->type->name}}</p>
                        </a>
                        <p class="price">${{$productprice}} </p><p class="price primary"><span><del> ${{ $product->price }}</del></span></p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="{{ asset('assets/images/avatars/avatar_01.jpg') }}" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">{{ $product->user->name }}</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
                @endforeach



            </div>
            <!-- /PRODUCT LIST -->


            <!-- PRODUCT LIST -->
            <div id="pl-3" class="product-list grid column4-wrap owl-carousel">
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/patriot_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">The Patriot - Flyer Template</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Flyers</p>
                        </a>
                        <p class="price"><span>$</span>6</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Vynil Brush</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/city_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">City Seamless Game Background</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Backgrounds</p>
                        </a>
                        <p class="price"><span>$</span>10</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_12.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Game Pix</p>
                        </a>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/alchemists_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">The Alchemists Sports Magazine</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">PSD Templates</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Odin_Design</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/park_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">Social Media Cover - Park at Night</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Social Covers</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_13.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Violet &amp; Jane</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/patriot_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">The Patriot - Flyer Template</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Flyers</p>
                        </a>
                        <p class="price"><span>$</span>6</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Vynil Brush</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/city_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">City Seamless Game Background</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Backgrounds</p>
                        </a>
                        <p class="price"><span>$</span>10</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_12.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Game Pix</p>
                        </a>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/alchemists_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">The Alchemists Sports Magazine</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">PSD Templates</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Odin_Design</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/park_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">Social Media Cover - Park at Night</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Social Covers</p>
                        </a>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_13.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Violet &amp; Jane</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- /PRODUCT LIST -->
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
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/logos_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Professional Corporate Logos</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">Graphic Design</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_14.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Jenny_Block</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/cartoon_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Clean Cartoon Characters</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">Illustration</p>
                        </a>
                        <p class="price"><span>$</span>180</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_15.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">AmyGlush</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/flyers_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Professional Party Flyers</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">Graphic Design</p>
                        </a>
                        <p class="price"><span>$</span>95</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Vynil Brush</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/app_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Vector Icons for Web Apps</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">UI/UX</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_03.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Thomas_Ket</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/logos_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Professional Corporate Logos</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">Graphic Design</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_14.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Jenny_Block</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/cartoon_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Clean Cartoon Characters</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">Illustration</p>
                        </a>
                        <p class="price"><span>$</span>180</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_15.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">AmyGlush</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/flyers_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Professional Party Flyers</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">Graphic Design</p>
                        </a>
                        <p class="price"><span>$</span>95</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_11.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Vynil Brush</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/app_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="service-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="service-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="service-page.html">
                            <p class="text-header">Vector Icons for Web Apps</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="services.html">
                            <p class="category secondary">UI/UX</p>
                        </a>
                        <p class="price"><span>$</span>260</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_03.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Thomas_Ket</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- /PRODUCT LIST -->
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
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/tablet_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">Axcom Drawing Tablet (New)</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="products.html">
                            <p class="category tertiary">Tablets</p>
                        </a>
                        <p class="price"><span>$</span>380</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_16.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Erika Thompson</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/westeroshtml_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">Westeros HTML Custom Cloth...</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">HTML Templates</p>
                        </a>
                        <p class="price"><span>$</span>28</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Odin_Design</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/pixel_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">Pixel Diamond Gaming Shop</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Shopify</p>
                        </a>
                        <p class="price"><span>$</span>86</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_06.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Sarah-Imaginarium</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/joystick_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">PX4 Crimson Joystick (Used)</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="products.html">
                            <p class="category tertiary">Accesories</p>
                        </a>
                        <p class="price"><span>$</span>24</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_17.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Kratos Cave</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/tablet_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">Axcom Drawing Tablet (New)</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="products.html">
                            <p class="category tertiary">Tablets</p>
                        </a>
                        <p class="price"><span>$</span>380</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_16.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Erika Thompson</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/westeroshtml_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">Westeros HTML Custom Cloth...</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">HTML Templates</p>
                        </a>
                        <p class="price"><span>$</span>28</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_09.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Odin_Design</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/pixel_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="item-v1.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="item-v1.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="item-v1.html">
                            <p class="text-header">Pixel Diamond Gaming Shop</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="shop-gridview-v1.html">
                            <p class="category primary">Shopify</p>
                        </a>
                        <p class="price"><span>$</span>86</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_06.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Sarah-Imaginarium</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->

                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/joystick_m.jpg" alt="product-image">
                        </figure>
                        <!-- /PRODUCT PREVIEW IMAGE -->

                        <!-- PREVIEW ACTIONS -->
                        <div class="preview-actions">
                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="product-page.html">
                                    <div class="circle tiny primary">
                                        <span class="icon-tag"></span>
                                    </div>
                                </a>
                                <a href="product-page.html">
                                    <p>Go to Item</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->

                            <!-- PREVIEW ACTION -->
                            <div class="preview-action">
                                <a href="#">
                                    <div class="circle tiny secondary">
                                        <span class="icon-heart"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <p>Favourites +</p>
                                </a>
                            </div>
                            <!-- /PREVIEW ACTION -->
                        </div>
                        <!-- /PREVIEW ACTIONS -->
                    </div>
                    <!-- /PRODUCT PREVIEW ACTIONS -->

                    <!-- PRODUCT INFO -->
                    <div class="product-info">
                        <a href="product-page.html">
                            <p class="text-header">PX4 Crimson Joystick (Used)</p>
                        </a>
                        <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                        <a href="products.html">
                            <p class="category tertiary">Accesories</p>
                        </a>
                        <p class="price"><span>$</span>24</p>
                    </div>
                    <!-- /PRODUCT INFO -->
                    <hr class="line-separator">

                    <!-- USER RATING -->
                    <div class="user-rating">
                        <a href="author-profile.html">
                            <figure class="user-avatar small">
                                <img src="images/avatars/avatar_17.jpg" alt="user-avatar">
                            </figure>
                        </a>
                        <a href="author-profile.html">
                            <p class="text-header tiny">Kratos Cave</p>
                        </a>
                        <ul class="rating tooltip" title="Author's Reputation">
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                            <li class="rating-item empty">
                                <!-- SVG STAR -->
                                <svg class="svg-star">
                                    <use xlink:href="#svg-star"></use>
                                </svg>
                                <!-- /SVG STAR -->
                            </li>
                        </ul>
                    </div>
                    <!-- /USER RATING -->
                </div>
                <!-- /PRODUCT ITEM -->
            </div>
            <!-- PRODUCT LIST -->
        </div>
        <!-- PRODUCT SHOWCASE -->
    </div>
</div>
<!-- /PRODUCTS SIDESHOW -->

<!-- SUBSCRIBE BANNER -->
<div id="subscribe-banner-wrap">
    <div id="subscribe-banner">
        <!-- SUBSCRIBE CONTENT -->
        <div class="subscribe-content">
            <!-- SUBSCRIBE HEADER -->
            <div class="subscribe-header">
                <figure>
                    <img src="{{ asset('assets/images/news_icon.png') }}" alt="subscribe-icon">
                </figure>
                <p class="subscribe-title">Subscribe to our Newsletter</p>
                <p>And receive the latest news and offers</p>
            </div>
            <!-- /SUBSCRIBE HEADER -->

            <!-- SUBSCRIBE FORM -->
            <form class="subscribe-form">
                <input type="text" name="subscribe_email" id="subscribe_email" placeholder="Enter your email here...">
                <button class="button medium dark">Subscribe!</button>
            </form>
            <!-- /SUBSCRIBE FORM -->
        </div>
        <!-- /SUBSCRIBE CONTENT -->
    </div>
</div>
<!-- /SUBSCRIBE BANNER -->
@endsection
