@extends('layouts.guest')

@section('tittletop', $product->name)

@section('tittle', 'Get great deal on apps and more')
@section('description', 'A marketplace for great deals on apps, PDFs, courses, template and more.')
@section('image', 'Get great deal on apps and more')


@section('footer')
<!-- XM Tab -->
<script src="{{ asset('assets/js/vendor/jquery.xmtab.min.js') }}"></script>
<!-- Image Slides -->
<script src="{{ asset('assets/js/image-slides.js') }}"></script>
<!-- Post Tab -->
<script src="{{ asset('assets/js/post-tab.js') }}"></script>
<!-- XM Accordion -->
<script src="{{ asset('assets/js/vendor/jquery.xmaccordion.min.js') }}"></script>
<!-- XM Pie Chart -->
<script src="{{ asset('assets/js/vendor/jquery.xmpiechart.min.js') }}"></script>
<!-- ImgLiquid -->
<script src="{{ asset('assets/js/vendor/imgLiquid-min.js') }}"></script>

<!-- Liquid -->
<script src="{{ asset('assets/js/liquid.js') }}"></script>
<!-- Checkbox Link -->
<script src="{{ asset('assets/js/checkbox-link.js') }}"></script>
<!-- Item V1 -->
<script src="{{ asset('assets/js/item-v1.js') }}"></script>


@endsection

@section('body')
<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>{{ $product->name }}</h2>
    </div>
</div>
<!-- /SECTION HEADLINE -->
@php
    $productprice0 = $product->price * ($product->discount/100);
    $productprice = $product->price - $productprice0;
@endphp

<!-- SECTION -->
<div class="section-wrap">
    <div class="section">
        <!-- SIDEBAR -->
        <div class="sidebar right">
            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item">
                <p class="price large"><span>$</span>{{ $productprice }} </p>
                <center><p class="price tiny"><del>${{ $product->price }}</del></p></center>
                <br/>
                <hr class="line-separator">
                <form id="aux_form" name="aux_form"></form>


                <p class="text" style="display: block;">{{ $product->short_summary }}</p>
                @if ( $product->time_offer == 1)
                <p class="text" style="display: block;">Hurry! Offer ends in {{ $product->time_offer_ends }}</p>
                @endif

                <br/>
                @if ($product->plantype_id == 7)
                    <a href="{{ $product->url }}" class="button mid dark spaced" target="_blank"><span class="primary">Get it Now!</span></a>
                @else
                <form action="{{ route('buy.now') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $productprice }}" name="price">
                    <input type="hidden" value="{{ $product->slug }}" name="slug">
                    <input type="hidden" value="{{ $product->type->name }}" name="type">
                    <input type="hidden" value="{{ $product->featureimage }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                <button type="submit" class="button mid dark spaced"><span class="primary">Buy Now!</span></button>
                </form>

                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $productprice }}" name="price">
                        <input type="hidden" value="{{ $product->slug }}" name="slug">
                        <input type="hidden" value="{{ $product->type->name }}" name="type">
                        <input type="hidden" value="{{ $product->featureimage }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                    <button type="submit" class="button mid primary">Add to Cart </button>
                    </form>

                @endif


                <div class="clearfix"></div>
            </div>
            <!-- /SIDEBAR ITEM -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item author-bio">
                <h4>Product Author</h4>
                <hr class="line-separator">
                <!-- USER AVATAR -->
                <a href="{{ route('account.page', ['username'=> $product->user->userdetail->username]) }}" class="user-avatar-wrap medium">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('users/profileimages/'. $product->user->userdetail->profileimage ) }}" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->
                <p class="text-header">{{ $product->user->name }}</p>
                <p class="text-oneline">{{ $product->user->getRoleNames()->first() }}<br>{{ $product->user->userdetail->location }}</p>
                @if ($product->user->getRoleNames()->first() == 'Super Admin')
                    <!-- SHARE LINKS -->
                    <ul class="share-links">
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#" class="twt"></a></li>
                        <li><a href="#" class="db"></a></li>
                    </ul>
                <!-- /SHARE LINKS -->
                @endif

                <a href="{{ route('account.page', ['username'=> $product->user->userdetail->username]) }}" class="button mid dark spaced">Go to <span class="primary">Profile Page</span></a>
            </div>
            <!-- /SIDEBAR ITEM -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item product-info">
                <h4>Product Information</h4>
                <hr class="line-separator">
                <!-- INFORMATION LAYOUT -->
                <div class="information-layout">
                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Alternative to:</p>
                        <p>{{ $product->alternative_to }}</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Ideal for:</p>
                        <p>{{ $product->ideal_for }}</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Access:</p>
                        <p>{{ $product->access }}</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Integrations:</p>
                        <p>{{ $product->integrations }}</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Files:</p>
                        <p>4500x2800 Px</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="tags primary"><a href="#">photoshop</a>, <a href="#">flat</a>, <a href="#">icon</a>, <a href="#">devices</a>, <a href="#">mobile</a>, <a href="#">vector</a>, <a href="#">coffee</a>, <a href="#">scene</a>, <a href="#">hero</a>, <a href="#">image</a>, <a href="#">maker</a>, <a href="#">set</a>, <a href="#">tablet</a>, <a href="#">laptop</a>, <a href="#">mockup</a></p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->
                </div>
                <!-- INFORMATION LAYOUT -->
            </div>
            <!-- /SIDEBAR ITEM -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item author-reputation full">
                <h4>Author's Reputation</h4>
                <hr class="line-separator">
                <!-- PIE CHART -->
                <div class="pie-chart pie-chart1">
                    <p class="text-header percent">86<span>%</span></p>
                    <p class="text-header percent-info">Recommended</p>
                    <!-- RATING -->
                    <ul class="rating">
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
                    <!-- /RATING -->
                </div>
                <!-- /PIE CHART -->
                <a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
            </div>
            <!-- /SIDEBAR ITEM -->


        </div>
        <!-- /SIDEBAR -->

        <!-- CONTENT -->
        <div class="content left">
            <!-- POST -->
            <article class="post">
                <!-- POST IMAGE -->
                <div class="post-image">
                    <figure class="product-preview-image large liquid">
                        <img src="{{ asset('products/featuredimage/'.$product->featureimage )}}" alt="">
                    </figure>
                    <!-- SLIDE CONTROLS -->
                    <div class="slide-control-wrap">
                        <div class="slide-control rounded left">
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </div>

                        <div class="slide-control rounded right">
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </div>
                    </div>
                    <!-- /SLIDE CONTROLS -->
                    @if ($product->plantype_id != 7)
                    <a href="{{ $product->url }}" target="_blank" class="button mid primary">Go to Live Demo</a>
                    @endif

                </div>
                <!-- /POST IMAGE -->

                <!-- POST IMAGE SLIDES -->
                <div class="post-image-slides">
                    <!-- IMAGE SLIDES WRAP -->
                    <div class="image-slides-wrap full">
                        <!-- IMAGE SLIDES -->
                        <div class="image-slides" data-slide-visible-full="8"
                                                  data-slide-visible-small="2"
                                                  data-slide-count="{{ $product->images->count() + 1 }}">
                            <!-- IMAGE SLIDE -->
                            <div class="image-slide selected">
                                <div class="overlay"></div>
                                <figure class="product-preview-image thumbnail liquid">
                                    <img src="{{ asset('products/featuredimage/'.$product->featureimage )}}" alt="">
                                </figure>
                            </div>
                            <!-- /IMAGE SLIDE -->

                            @foreach ($product->images as $productimg )
                                <!-- IMAGE SLIDE -->
                            <div class="image-slide">
                                <div class="overlay"></div>
                                <figure class="product-preview-image thumbnail liquid">
                                    <img src="{{ asset('products/productimage/'.$productimg->name )}}" alt="">
                                </figure>
                            </div>
                            <!-- /IMAGE SLIDE -->
                            @endforeach
                        </div>
                        <!-- IMAGE SLIDES -->
                    </div>
                    <!-- IMAGE SLIDES WRAP -->
                </div>
                <!-- /POST IMAGE SLIDES -->

                <hr class="line-separator">

                <!-- POST CONTENT -->
                <div class="post-content">
                    <!-- POST PARAGRAPH -->
                    <div class="post-paragraph">
                        <h3 class="post-title">{{ $product->name }}</h3>
                        <p>{!! $product->desc !!}</p>
                    </div>
                    <!-- /POST PARAGRAPH -->

                    <!-- POST PARAGRAPH -->
                    <div class="post-paragraph">
                        <h3 class="post-title small">TL;DR</h3>
                        <p>{!! $product->keypoints !!}</p>
                    </div>
                    <!-- /POST PARAGRAPH -->

                    <div class="clearfix"></div>
                </div>
                <!-- /POST CONTENT -->

                <hr class="line-separator">

                <!-- SHARE -->
                <div class="share-links-wrap">
                    <p class="text-header small">Share this:</p>
                    <!-- SHARE LINKS -->
                    <ul class="share-links hoverable">
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#" class="twt"></a></li>
                        <li><a href="#" class="db"></a></li>
                        <li><a href="#" class="rss"></a></li>
                        <li><a href="#" class="gplus"></a></li>
                    </ul>
                    <!-- /SHARE LINKS -->
                </div>
                <!-- /SHARE -->
            </article>
            <!-- /POST -->

            @include('frontviews.producttabs')
        </div>
        <!-- CONTENT -->
    </div>
</div>
<!-- /SECTION -->


@endsection
