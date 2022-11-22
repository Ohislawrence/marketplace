@extends('layouts.guest')

@section('tittletop', $product->name)

@section('tittle', 'Get great deal on apps and more')
@section('description', 'A marketplace for great deals on apps, PDFs, courses, template and more.')
@section('image', 'Get great deal on apps and more')


@section('footer')

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
<!-- XM Tab -->
<script src="{{ asset('assets/js/vendor/jquery.xmtab.min.js') }}"></script>
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
                <hr class="line-separator">
                <form id="aux_form" name="aux_form"></form>


                <p class="text" style="display: block;">World-class customer support. There’s customer support, and then there’s Acarty customer support. We take pride in going above and beyond to keep our community happy. </p>
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
                <a href="user-profile.html" class="user-avatar-wrap medium">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('assets/images/avatars/avatar_09.jpg') }}" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->
                <p class="text-header">{{ $product->user->name }}</p>
                <p class="text-oneline">{{ Auth::user()->getRoleNames()->first() }}<br>{{ Auth::user()->userdetail->location }}</p>
                @if (Auth::user()->getRoleNames()->first() == 'Super Admin')
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
                        <p class="text-header">Sales:</p>
                        <p>22</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Upload Date:</p>
                        <p>August 18th, 2015</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Files Included:</p>
                        <p>PSD, AI<br>JPEG, PNG</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Requirements:</p>
                        <p>CS6 or Lower</p>
                    </div>
                    <!-- /INFORMATION LAYOUT ITEM -->

                    <!-- INFORMATION LAYOUT ITEM -->
                    <div class="information-layout-item">
                        <p class="text-header">Dimensions:</p>
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

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item author-items">
                <h4>More Author's Items</h4>
                <!-- PRODUCT LIST -->
                <div class="product-list grid column4-wrap">
                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PIN -->
                        <span class="pin featured">Featured</span>
                        <!-- /PIN -->

                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="images/items/flat_m.jpg" alt="product-image">
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
                                <p class="text-header">Flatland - Hero Image Composer</p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="shop-gridview-v1.html">
                                <p class="category primary">Hero Images</p>
                            </a>
                            <p class="price"><span>$</span>12</p>
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
                </div>
                <!-- /PRODUCT LIST -->
                <div class="clearfix"></div>
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
                        {!! $product->desc !!}
                    </div>
                    <!-- /POST PARAGRAPH -->

                    <!-- POST PARAGRAPH -->
                    <div class="post-paragraph">
                        <h3 class="post-title small">TL;DR</h3>
                        {!! $product->keypoints !!}
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

            <!-- POST TAB -->
            <div class="post-tab">
                <!-- TAB HEADER -->
                <div class="tab-header primary">
                    <!-- TAB ITEM -->
                    <div class="tab-item selected">
                        <p class="text-header">Comments (35)</p>
                    </div>
                    <!-- /TAB ITEM -->

                    <!-- TAB ITEM -->
                    <div class="tab-item">
                        <p class="text-header">Buyers Corner</p>
                    </div>
                    <!-- /TAB ITEM -->

                    <!-- TAB ITEM -->
                    <div class="tab-item">
                        <p class="text-header">Item FAQs</p>
                    </div>
                    <!-- /TAB ITEM -->
                </div>
                <!-- /TAB HEADER -->

                <!-- TAB CONTENT -->
                <div class="tab-content void">
                    <!-- COMMENTS -->
                    <div class="comment-list">
                        <!-- COMMENT -->
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_06.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <div class="comment">
                                <p class="text-header">View as Customer</p>
                                <!-- PIN -->
                                <span class="pin greyed">Purchased</span>
                                <!-- /PIN -->
                                <p class="timestamp">5 Hours Ago</p>
                                <a href="#" class="report">Report</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <!-- /COMMENT -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- COMMENT -->
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_11.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <div class="comment">
                                <p class="text-header">View as Author (Reply Option)</p>
                                <p class="timestamp">8 Hours Ago</p>
                                <a href="#" class="report">Report</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                        <!-- /COMMENT -->

                        <!-- COMMENT REPLY -->
                        <div class="comment-wrap comment-reply">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_09.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- COMMENT REPLY FORM -->
                            <form class="comment-reply-form">
                                <textarea name="treply1" placeholder="Write your comment here..."></textarea>
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="notif1" name="notif1" checked>
                                <label for="notif1">
                                    <span class="checkbox primary"><span></span></span>
                                    Receive email notifications
                                </label>
                                <!-- /CHECKBOX -->
                                <button class="button primary">Post Comment</button>
                            </form>
                            <!-- /COMMENT REPLY FORM -->
                        </div>
                        <!-- /COMMENT REPLY -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- COMMENT -->
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_12.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <div class="comment">
                                <p class="text-header">View as Author (Replies)</p>
                                <p class="timestamp">10 Hours Ago</p>
                                <a href="#" class="report">Report</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">Odin_Design</p>
                                    <!-- PIN -->
                                    <span class="pin">Author</span>
                                    <!-- /PIN -->
                                    <p class="timestamp">2 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_12.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">Customer Reply</p>
                                    <p class="timestamp">2 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam onsectetur elit</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- COMMENT REPLY -->
                            <div class="comment-wrap comment-reply">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- COMMENT REPLY FORM -->
                                <form class="comment-reply-form">
                                    <textarea name="treply2" placeholder="Write your comment here..."></textarea>
                                    <!-- CHECKBOX -->
                                    <input type="checkbox" id="notif2" name="notif2" checked>
                                    <label for="notif2">
                                        <span class="checkbox primary"><span></span></span>
                                        Receive email notifications
                                    </label>
                                    <!-- /CHECKBOX -->
                                    <button class="button primary">Post Comment</button>
                                </form>
                                <!-- /COMMENT REPLY FORM -->
                            </div>
                            <!-- /COMMENT REPLY -->
                        </div>
                        <!-- /COMMENT -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- COMMENT -->
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_03.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <div class="comment">
                                <p class="text-header">View as Customer</p>
                                <p class="timestamp">6 Days Ago</p>
                                <a href="#" class="report">Report</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            </div>
                        </div>
                        <!-- /COMMENT -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- PAGER -->
                        <div class="pager primary">
                            <div class="pager-item"><p>1</p></div>
                            <div class="pager-item active"><p>2</p></div>
                            <div class="pager-item"><p>3</p></div>
                            <div class="pager-item"><p>...</p></div>
                            <div class="pager-item"><p>17</p></div>
                        </div>
                        <!-- /PAGER -->

                        <div class="clearfix"></div>

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <h3>Leave a Comment</h3>

                        <!-- COMMENT REPLY -->
                        <div class="comment-wrap comment-reply">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_09.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- COMMENT REPLY FORM -->
                            <form class="comment-reply-form">
                                <textarea name="treply1" placeholder="Write your comment here..."></textarea>
                                <button class="button primary">Post Comment</button>
                            </form>
                            <!-- /COMMENT REPLY FORM -->
                        </div>
                        <!-- /COMMENT REPLY -->
                    </div>
                    <!-- /COMMENTS -->
                </div>
                <!-- /TAB CONTENT -->

                <!-- TAB CONTENT -->
                <div class="tab-content void">
                    <!-- COMMENTS -->
                    <div class="comment-list">
                        <!-- COMMENT -->
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_02.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <div class="comment">
                                <p class="text-header">MeganV.</p>
                                <!-- PIN -->
                                <span class="pin greyed">Purchased</span>
                                <!-- /PIN -->
                                <p class="timestamp">5 Hours Ago</p>
                                <a href="#" class="report">Report</a>
                                <p>I’ve recently bought your theme and let me say it’s fantastic! I have a small question regarding the main files and how to install the theme. Could you help me? Thanks!</p>
                            </div>
                        </div>
                        <!-- /COMMENT -->

                        <!-- COMMENT REPLY -->
                        <div class="comment-wrap comment-reply">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_09.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- COMMENT REPLY FORM -->
                            <form class="comment-reply-form">
                                <textarea name="treply10" placeholder="Write your comment here..."></textarea>
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="notif10" name="notif10" checked>
                                <label for="notif10">
                                    <span class="checkbox primary"><span></span></span>
                                    Receive email notifications
                                </label>
                                <!-- /CHECKBOX -->
                                <button class="button primary">Post Comment</button>
                            </form>
                            <!-- /COMMENT REPLY FORM -->
                        </div>
                        <!-- /COMMENT REPLY -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- COMMENT -->
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_19.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <div class="comment">
                                <p class="text-header">Cloud Templates</p>
                                <!-- PIN -->
                                <span class="pin greyed">Purchased</span>
                                <!-- /PIN -->
                                <p class="timestamp">8 Hours Ago</p>
                                <a href="#" class="report">Report</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                        <!-- /COMMENT -->

                        <!-- COMMENT REPLY -->
                        <div class="comment-wrap comment-reply">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_09.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- COMMENT REPLY FORM -->
                            <form class="comment-reply-form">
                                <textarea name="treply20" placeholder="Write your comment here..."></textarea>
                                <!-- CHECKBOX -->
                                <input type="checkbox" id="notif20" name="notif20" checked>
                                <label for="notif20">
                                    <span class="checkbox primary"><span></span></span>
                                    Receive email notifications
                                </label>
                                <!-- /CHECKBOX -->
                                <button class="button primary">Post Comment</button>
                            </form>
                            <!-- /COMMENT REPLY FORM -->
                        </div>
                        <!-- /COMMENT REPLY -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- COMMENT -->
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_18.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <div class="comment">
                                <p class="text-header">Lucy Diamond</p>
                                <!-- PIN -->
                                <span class="pin greyed">Purchased</span>
                                <!-- /PIN -->
                                <p class="timestamp">10 Hours Ago</p>
                                <a href="#" class="report">Report</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">Odin_Design</p>
                                    <!-- PIN -->
                                    <span class="pin">Author</span>
                                    <!-- /PIN -->
                                    <p class="timestamp">2 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_18.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">Lucy Diamond</p>
                                    <!-- PIN -->
                                    <span class="pin greyed">Purchased</span>
                                    <!-- /PIN -->
                                    <p class="timestamp">2 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam onsectetur elit.</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- COMMENT REPLY -->
                            <div class="comment-wrap comment-reply">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- COMMENT REPLY FORM -->
                                <form class="comment-reply-form">
                                    <textarea name="treply30" placeholder="Write your comment here..."></textarea>
                                    <!-- CHECKBOX -->
                                    <input type="checkbox" id="notif30" name="notif30" checked>
                                    <label for="notif30">
                                        <span class="checkbox primary"><span></span></span>
                                        Receive email notifications
                                    </label>
                                    <!-- /CHECKBOX -->
                                    <button class="button primary">Post Comment</button>
                                </form>
                                <!-- /COMMENT REPLY FORM -->
                            </div>
                            <!-- /COMMENT REPLY -->
                        </div>
                        <!-- /COMMENT -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- PAGER -->
                        <div class="pager primary">
                            <div class="pager-item"><p>1</p></div>
                            <div class="pager-item active"><p>2</p></div>
                            <div class="pager-item"><p>3</p></div>
                            <div class="pager-item"><p>...</p></div>
                            <div class="pager-item"><p>17</p></div>
                        </div>
                        <!-- /PAGER -->

                        <div class="clearfix"></div>

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <h3>Leave a Comment</h3>

                        <!-- COMMENT REPLY -->
                        <div class="comment-wrap comment-reply">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="images/avatars/avatar_09.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- COMMENT REPLY FORM -->
                            <form class="comment-reply-form">
                                <textarea name="treply100" placeholder="Write your comment here..."></textarea>
                                <button class="button primary">Post Comment</button>
                            </form>
                            <!-- /COMMENT REPLY FORM -->
                        </div>
                        <!-- /COMMENT REPLY -->
                    </div>
                    <!-- /COMMENTS -->
                </div>
                <!-- /TAB CONTENT -->

                <!-- TAB CONTENT -->
                <div class="tab-content">
                    <!-- ITEM-FAQ -->
                    <div class="accordion item-faq primary">
                        <!-- ACCORDION ITEM -->
                        <div class="accordion-item">
                            <h6 class="accordion-item-header">Read Before Buying</h6>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                            <div class="accordion-item-content">
                                <h4>Bidding for the First Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <h4>Winning the Auction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                        <!-- /ACCORDION ITEM -->

                        <!-- ACCORDION ITEM -->
                        <div class="accordion-item">
                            <h6 class="accordion-item-header">How Does Bidding Work?</h6>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                            <div class="accordion-item-content">
                                <h4>Bidding for the First Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <h4>Winning the Auction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                        <!-- /ACCORDION ITEM -->

                        <!-- ACCORDION ITEM -->
                        <div class="accordion-item">
                            <h6 class="accordion-item-header">Our Return Policy</h6>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                            <div class="accordion-item-content">
                                <h4>Bidding for the First Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <h4>Winning the Auction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                        <!-- /ACCORDION ITEM -->

                        <!-- ACCORDION ITEM -->
                        <div class="accordion-item">
                            <h6 class="accordion-item-header">Shipping and Delivery</h6>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                            <div class="accordion-item-content">
                                <h4>Bidding for the First Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <h4>Winning the Auction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                        <!-- /ACCORDION ITEM -->

                        <!-- ACCORDION ITEM -->
                        <div class="accordion-item">
                            <h6 class="accordion-item-header">Quality Guarantee</h6>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                            <div class="accordion-item-content">
                                <h4>Bidding for the First Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <h4>Winning the Auction</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                        <!-- /ACCORDION ITEM -->
                    </div>
                    <!-- /ITEM-FAQ -->
                </div>
                <!-- /TAB CONTENT -->
            </div>
            <!-- /POST TAB -->
        </div>
        <!-- CONTENT -->
    </div>
</div>
<!-- /SECTION -->


@endsection
