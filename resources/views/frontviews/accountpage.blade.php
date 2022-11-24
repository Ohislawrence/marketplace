@guest
    @php
        $userpage = $userdetail->user;
    @endphp
@else
    @php
        if (request()->route('username') == auth()->user()->userdetail->username) {
            $userpage = auth()->user();
        }elseif (request()->route('username') != auth()->user()->userdetail->username) {
            $userpage = $userdetail->user;
        }
    @endphp
@endguest

@extends('layouts.guest')

@section('tittletop',  $userdetail->user->name )
@section('tittle', 'Creative Resources')
@section('description', 'Get great deal on apps and more')
@section('image', 'Get great deal on apps and more')
@section('header')
    <style>
    .author-profile-banner {
        background: url("{{ asset('users/coverimages/'. $userpage->userdetail->coverimage ) }}") no-repeat center;
        background-size: cover;
        min-height: 300px; }
    </style>
@endsection


@section('body')

@include('frontviews.accountsidebar')
        <!-- CONTENT -->
        <div class="content right">
            <!-- HEADLINE -->
            <div class="headline buttons primary">
                <h4>Latest Items</h4>
                <a href="author-profile-items.html" class="button mid-short dark-light">See all the items</a>
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT LIST -->
            <div class="product-list grid column3-4-wrap">
                <!-- PRODUCT ITEM -->
                <div class="product-item column">
                    <!-- PRODUCT PREVIEW ACTIONS -->
                    <div class="product-preview-actions">
                        <!-- PRODUCT PREVIEW IMAGE -->
                        <figure class="product-preview-image">
                            <img src="images/items/miniverse_m.jpg" alt="product-image">
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
                            <p class="text-header">Miniverse - Hero Image Composer</p>
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
                            <img src="images/items/phantom_m.jpg" alt="product-image">
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
                            <p class="text-header">Phantom Cloud Illustration Shop</p>
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
            </div>
            <!-- /PRODUCT LIST -->

            <div class="clearfix"></div>

            <!-- HEADLINE -->
            <div class="headline buttons primary">
                <h4>Latest Messages</h4>
                <a href="author-profile-messages.html" class="button mid-short dark-light">See all the Messages</a>
            </div>
            <!-- /HEADLINE -->

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
                        <p class="timestamp">8 Hours Ago</p>
                        <a href="#" class="report">Report</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
                <!-- /COMMENT -->
            </div>
            <!-- /COMMENTS -->
        </div>
        <!-- CONTENT -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- /SECTION -->

@endsection
