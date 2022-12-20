@php
    if (request()->route('username') == auth()->user()->userdetail->username) {
        $userpage = auth()->user();
    }elseif (request()->route('username') != auth()->user()->userdetail->username) {
        $userpage = $userdetail->user;
    }

@endphp


@extends('layouts.guest')

@section('tittletop', 'People '.$userdetail->user->name. ' follow')

@section('tittle', 'People '.$userdetail->user->name. ' follow')
@section('description', 'The marketplace for great deals on apps, PDFs, courses, template and more.')
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
    <div class="headline simple primary">
        <h4>Following ({{ $userpage->followings()->count() }})</h4>
    </div>
    <!-- /HEADLINE -->
    @forelse ( $userpage->followings as $following)


    <!-- FOLLOW LIST -->
    <div class="follow-list">
        <!-- FOLLOW LIST ITEM -->
        <div class="follow-list-item">
            <a href="author-profile.html">
                <figure class="user-avatar medium liquid">
                    <img src="{{ asset('users/profileimages/'. $following->userdetail ) }}" alt="">
                </figure>
            </a>

            <!-- FL ITEM INFO -->
            <div class="fl-item-info fl-description">
                <p class="text-header"><a href="author-profile.html">{{ $following->user->name }}</a></p>
                <p>Member since {{ $following->user->created_at->diffForHumans() }}</p>
                <p>{{ $following->user->userdetail->location }}</p>
            </div>
            <!-- /FL ITEM INFO -->

            <!-- FL ITEM INFO -->
            <div class="fl-item-info fl-reputation">
                <p class="text-header">Reputation</p>
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
            <!-- /FL ITEM INFO -->

            <!-- FL ITEM INFO -->
            <div class="fl-item-info fl-product-items">
                <a href="item-v1.html">
                    <figure class="product-preview-image small">
                        <img src="images/items/shadow_s.jpg" alt="">
                    </figure>
                </a>

                <a href="item-v1.html">
                    <figure class="product-preview-image small">
                        <img src="images/items/monsters_s.jpg" alt="">
                    </figure>
                </a>

                <a href="item-v1.html">
                    <figure class="product-preview-image small">
                        <img src="images/items/patriot_s.jpg" alt="">
                    </figure>
                </a>
            </div>
            <!-- /FL ITEM INFO -->

            <!-- FL ITEM INFO -->
            <div class="fl-item-info fl-button">
                @if (auth()->user()->isFollowing($userpage))
                    <a href="{{ route('unfollow.button', ['username'=> request()->route('username')]) }}" class="button mid-short primary follow-btn">Unfollow</a>
                    @else
                    <a href="{{ route('follow.button', ['username'=> request()->route('username')]) }}" class="button mid dark spaced">Follow</a>
                @endif
            </div>
            <!-- /FL ITEM INFO -->
        </div>
        <!-- /FOLLOW LIST ITEM -->

        @empty
        <div class="follow-list-item">
            <div class="fl-item-info fl-description">
                <p class="text-header"><a href="author-profile.html">Not following anyone yet.</a></p>
            </div>
        </div>
        @endforelse

    </div>
</div>
<!-- CONTENT -->

<div class="clearfix"></div>
</div>
</div>
<!-- /SECTION -->

@endsection
