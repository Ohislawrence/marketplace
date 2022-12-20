@php
    if (request()->route('username') == auth()->user()->userdetail->username) {
        $userpage = auth()->user();
    }elseif (request()->route('username') != auth()->user()->userdetail->username) {
        $userpage = $userdetail->user;
    }

@endphp

@extends('layouts.guest')

@section('tittletop', 'My Puchases')
@section('tittle', 'My Puchases')
@section('description', 'Get great deal on apps and more')
@section('image', asset('assets/images/acarty-og-image.png'))

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
        <h4>Your Purchases</h4>
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
    <div class="purchases-list">
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

        </div>
        <!-- /PURCHASES LIST HEADER -->

         <!-- PURCHASE ITEM -->

        @forelse ( $orderpayment as $item )
        @foreach ($item->order->orderitem as $purch )



         <div class="purchase-item">
            <div class="purchase-item-date">
                <p>{{ $item->created_at }}</p>
            </div>
            <div class="purchase-item-details">
                <!-- ITEM PREVIEW -->
                <div class="item-preview">
                    <figure class="product-preview-image small liquid">
                        <img src="{{ asset('products/featuredimage/'.$purch->product->featureimage )}}" alt="">
                    </figure>
                    <p class="text-header">{{ $purch->product->name }}</p>
                    <p class="description">{{ $purch->product->short_summary }}</p>
                </div>
                <!-- /ITEM PREVIEW -->
            </div>
            <div class="purchase-item-info">
                <p class="category primary">{{ $purch->product->type->name }}</p>
                <p><span class="light">License:</span> {{  $purch->product->access  }}</p>
                <p><span class="light">Author:</span> {{ $purch->product->user->name }}</p>
                <p class="text-header tiny">Check Invoice</p>
            </div>
            <div class="purchase-item-price">
                @if ($item->amount == 0)
                <p class="price">Free</p>
                @else
                <p class="price"><span>$</span>{{ $item->amount }}</p>
                @endif

            </div>

            <div class="purchase-item-download">
            @if ($purch->product->downloadable == 'link')
            <a href="{{ $purch->product->url}}" target="_blank" class="button dark-light">Claim Offer</a>
            @elseif ($purch->product->downloadable == 'yes')
                <a href="{{ route('download.item', ['productID' => $purch->product->id ]) }}" class="button dark-light">Download</a>

            @else
            <a href="#" class="button dark-light">Redeem Now</a>
            @endif

            </div>

        </div>
        @endforeach
         @empty

         @endforelse

        <!-- /PURCHASE ITEM -->
    </div>
    <!-- /PRODUCT LIST -->

    <div class="clearfix"></div>

    <!-- PAGER -->
    <div class="pager primary">
        {{ $orderpayment->links()}}
    </div>
    <!-- /PAGER -->
</div>
<!-- CONTENT -->

<div class="clearfix"></div>

</div>
</div>

@endsection
