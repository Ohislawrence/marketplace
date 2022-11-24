@php
    if (request()->route('username') == auth()->user()->userdetail->username) {
        $userpage = auth()->user();
    }elseif (request()->route('username') != auth()->user()->userdetail->username) {
        $userpage = $userdetail->user;
    }

@endphp

@extends('layouts.guest')

@section('tittletop', 'My Puchases')
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
    <div class="headline primary">
        <h4>103 Author's Items</h4>
        <!-- VIEW SELECTORS -->
        <div class="view-selectors">
            <a href="author-profile-items.html" class="view-selector grid"></a>
            <a href="author-profile-items-listview.html" class="view-selector list active"></a>
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

    <!-- PRODUCT LIST -->
    <div class="product-list">
        <!-- PURCHASES LIST HEADER -->
        <div class="purchases-list-header">
            <div class="purchases-list-header-date">
                <p class="text-header small">Date</p>
            </div>
            <div class="purchases-list-header-details">
                <p class="text-header small">Product Details</p>
            </div>
            <div class="purchases-list-header-info">
                <p class="text-header small">Additional Info</p>
            </div>
            <div class="purchases-list-header-price">
                <p class="text-header small">Price</p>
            </div>
            <div class="purchases-list-header-download">
                <p class="text-header small">Download</p>
            </div>
            <div class="purchases-list-header-recommend">
                <p class="text-header small">Recommend Item</p>
            </div>
        </div>
        <!-- /PURCHASES LIST HEADER -->

         <!-- PURCHASE ITEM -->
         <div class="purchase-item">
            <div class="purchase-item-date">
                <p>Dec 18th, 2015</p>
            </div>
            <div class="purchase-item-details">
                <!-- ITEM PREVIEW -->
                <div class="item-preview">
                    <figure class="product-preview-image small liquid">
                        <img src="images/items/westeros_s.jpg" alt="product-image">
                    </figure>
                    <p class="text-header">Westeros Custom Clothing</p>
                    <p class="description">Lorem ipsum dolor sit urarde adipisicing elit dem...</p>
                </div>
                <!-- /ITEM PREVIEW -->
            </div>
            <div class="purchase-item-info">
                <p class="category primary">PSD Templates</p>
                <p><span class="light">License:</span> Standard</p>
                <p><span class="light">Author:</span> Odin_Design</p>
                <p class="text-header tiny">Check Invoice</p>
            </div>
            <div class="purchase-item-price">
                <p class="price"><span>$</span>14</p>
            </div>
            <div class="purchase-item-download">
                <a href="#" class="button dark-light">Download Item</a>
            </div>
            <div class="purchase-item-recommend">
                <div class="recommendation-wrap">
                    <a href="#recommendation-popup" class="recommendation good hoverable open-recommendation-form">
                        <span class="icon-like"></span>
                    </a>
                    <a href="#recommendation-popup" class="recommendation bad hoverable open-recommendation-form">
                        <span class="icon-dislike"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /PURCHASE ITEM -->

        <!-- PURCHASE ITEM -->
        <div class="purchase-item">
            <div class="purchase-item-date">
                <p>May 4th, 2015</p>
            </div>
            <div class="purchase-item-details">
                <!-- ITEM PREVIEW -->
                <div class="item-preview">
                    <figure class="product-preview-image small liquid">
                        <img src="images/items/miniverse_s.jpg" alt="product-image">
                    </figure>
                    <p class="text-header">Miniverse - Hero Image Composer</p>
                    <p class="description">Lorem ipsum dolor sit urarde adipisicing elit dem...</p>
                </div>
                <!-- /ITEM PREVIEW -->
            </div>
            <div class="purchase-item-info">
                <p class="category primary">Hero Images</p>
                <p><span class="light">License:</span> Standard</p>
                <p><span class="light">Author:</span> Odin_Design</p>
                <p class="text-header tiny">Check Invoice</p>
            </div>
            <div class="purchase-item-price">
                <p class="price"><span>$</span>12</p>
            </div>
            <div class="purchase-item-download">
                <a href="#" class="button dark-light">Download Item</a>
            </div>
            <div class="purchase-item-recommend">
                <div class="recommendation-wrap">
                    <a href="#recommendation-popup" class="recommendation good open-recommendation-form">
                        <span class="icon-like"></span>
                    </a>
                    <a href="#recommendation-popup" class="recommendation bad hoverable open-recommendation-form">
                        <span class="icon-dislike"></span>
                    </a>
                </div>
                <p class="text-header">
                    <a href="#recommendation-popup" class="open-recommendation-form">Review Comment</a>
                </p>
            </div>
        </div>
        <!-- /PURCHASE ITEM -->
    </div>
    <!-- /PRODUCT LIST -->

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

<div class="clearfix"></div>

</div>
</div>

@endsection
