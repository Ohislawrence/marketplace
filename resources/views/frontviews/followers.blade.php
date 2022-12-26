@php
    if (request()->route('username') == auth()->user()->userdetail->username) {
        $userpage = auth()->user();
    }elseif (request()->route('username') != auth()->user()->userdetail->username) {
        $userpage = $userdetail->user;
    }

@endphp


@extends('layouts.guest')

@section('tittletop',  $userdetail->user->name.' Followers')

@section('tittle', $userdetail->user->name.' Followers')
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
        <h4>Followers ({{ $userpage->followers()->count() }})</h4>
    </div>
    <!-- /HEADLINE -->

    <!-- FOLLOW LIST -->
    <div class="follow-list">
        @forelse ( $userpage->followers as $follower )



        <!-- FOLLOW LIST ITEM -->
        <div class="follow-list-item">
            <a href="author-profile.html">
                <figure class="user-avatar medium liquid">
                    <img src="{{ asset('users/profileimages/'. $follower->userdetail->profileimage ) }}" alt="">
                </figure>
            </a>

            <!-- FL ITEM INFO -->
            <div class="fl-item-info fl-description">
                <p class="text-header"><a href="author-profile.html">{{ $follower->name }}</a></p>
                <p>Member since {{ $follower->created_at->diffForHumans() }}</p>
                <p>{{ $follower->userdetail->location }}</p>
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
                        <img src="images/items/westeros_s.jpg" alt="">
                    </figure>
                </a>

                <a href="item-v1.html">
                    <figure class="product-preview-image small">
                        <img src="images/items/flat_s.jpg" alt="">
                    </figure>
                </a>

                <a href="item-v1.html">
                    <figure class="product-preview-image small">
                        <img src="images/items/pixel_s.jpg" alt="">
                    </figure>
                </a>
            </div>
            <!-- /FL ITEM INFO -->

            <!-- FL ITEM INFO -->
            <div class="fl-item-info fl-button">
                @if (auth()->user()->isFollowedBy($follower))
                    <a href="{{ route('follow.button', ['username'=> $follower->userdetail->username]) }}" class="button mid-short primary follow-btn">Follow</a>
                    @else
                    <a href="{{ route('unfollow.button', ['username'=> $follower->userdetail->username]) }}" class="button mid-short dark follow-btn">Unfollow</a>
                    @endif
            </div>
            <!-- /FL ITEM INFO -->
        </div>
        <!-- /FOLLOW LIST ITEM -->
        @empty
        <div class="follow-list-item">
            <div class="fl-item-info fl-description">
                <p class="text-header"><a href="author-profile.html">You do not have any follower(s), yet.</a></p>
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
