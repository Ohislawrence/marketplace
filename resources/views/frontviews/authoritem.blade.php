@php
    if (request()->route('username') == auth()->user()->userdetail->username) {
        $userpage = auth()->user();
    }elseif (request()->route('username') != auth()->user()->userdetail->username) {
        $userpage = $userdetail->user;
    }

@endphp


@extends('layouts.guest')

@section('tittletop', 'Get great deal on apps and more')

@section('tittle', 'Get great deal on apps and more')
@section('description', 'A marketplace for great deals on apps, PDFs, courses, template and more.')
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
    <div class="headline simple primary">
        <h4>Author's Items</h4>
    </div>
    <!-- /HEADLINE -->
    <!-- PRODUCT SHOWCASE -->
    <div class="product-showcase">
        <!-- PRODUCT LIST -->
        <div class="product-list grid column3-4-wrap">
            <div class="scrolling-pagination">
            @forelse ( $products as $product )
            @include('frontviews.justproduct')
            @empty

            @endforelse
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <!-- PAGER -->
    <div class="pager primary">
        {{ $products->links() }}
    </div>
    <!-- /PAGER -->
</div>
<div class="clearfix"></div>
</div>
</div>
<!-- /SECTION -->

@endsection
