@extends('layouts.guest')

@section('tittletop', 'Your Favourite')

@section('tittle', 'Get great deal on apps and more')
@section('description', 'A marketplace for great deals on apps, PDFs, courses, template and more.')
@section('image', 'Get great deal on apps and more')

@section('body')

<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>Your Favourites</h2>
        <p>Home<span class="separator">/</span><span class="current-section">Your Favourites</span></p>
    </div>
</div>
<!-- /SECTION HEADLINE -->

<!-- SECTION -->
<div class="section-wrap">
    <div class="section">
        <!-- CONTENT -->
        <div class="content full">
            <!-- HEADLINE -->
            <div class="headline primary">
                <h4>124 Favourites Found</h4>
                <!-- VIEW SELECTORS -->
                <div class="view-selectors">
                    <a href="favourites.html" class="view-selector grid active"></a>
                    <a href="favourites-listview.html" class="view-selector list"></a>
                </div>
                <!-- /VIEW SELECTORS -->
                <form id="shop_filter_form" name="shop_filter_form">
                    <label for="price_filter" class="select-block">
                        <select name="price_filter" id="price_filter">
                            <option value="0">Price (High to Low)</option>
                            <option value="1">Price (Low to High)</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                    <label for="itemspp_filter" class="select-block">
                        <select name="itemspp_filter" id="itemspp_filter">
                            <option value="0">12 Items Per Page</option>
                            <option value="1">6 Items Per Page</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                </form>
                <div class="clearfix"></div>
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT SHOWCASE -->
            <div class="product-showcase">
                <!-- PRODUCT LIST -->
                <div class="product-list grid column4-wrap">
                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="images/items/westeros_m.jpg" alt="product-image">
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
                                <p class="text-header">Westeros Custom Clothing</p>
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
                                    <img src="images/avatars/avatar_01.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="author-profile.html">
                                <p class="text-header tiny">Johnny Fisher</p>
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

                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="images/items/shadow_m.jpg" alt="product-image">
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
                                <p class="text-header">8 Long Shadow Flat Icons</p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="shop-gridview-v1.html">
                                <p class="category primary">Icon Packs</p>
                            </a>
                            <p class="price"><span>$</span>6</p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="author-profile.html">
                                <figure class="user-avatar small">
                                    <img src="images/avatars/avatar_04.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="author-profile.html">
                                <p class="text-header tiny">Red Thunder Graphics</p>
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
                                <img src="images/items/monsters_m.jpg" alt="product-image">
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
                                <p class="text-header">Little Monsters - 40 Pack Button...</p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="shop-gridview-v1.html">
                                <p class="category primary">Graphics</p>
                            </a>
                            <p class="price"><span>$</span>10</p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="author-profile.html">
                                <figure class="user-avatar small">
                                    <img src="images/avatars/avatar_10.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="author-profile.html">
                                <p class="text-header tiny">Haunted Mouse</p>
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
                                <img src="images/items/trickster_m.jpg" alt="product-image">
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
                                <p class="text-header">The Trickster Product Builder</p>
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

            <div class="clearfix"></div>

            <!-- PAGER -->
            <div class="pager primary">
                <div class="pager-item"><p>1</p></div>
                <div class="pager-item active"><p>2</p></div>
                <div class="pager-item"><p>3</p></div>
                <div class="pager-item"><p>...</p></div>
                <div class="pager-item"><p>17</p></div>
            </div>
            <!-- /PAGER -->
        </div>
        <!-- CONTENT -->
    </div>
</div>
<!-- /SECTION -->
@endsection
