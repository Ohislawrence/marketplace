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
             <!-- INBOX MESSAGES PREVIEW -->
             <div class="inbox-messages-preview full">
                <!-- INBOX MESSAGE PREVIEW -->
                <div class="inbox-message-preview">
                    <div class="inbox-message-preview-header">
                        <p class="text-header">
                            About me
                        </p>
                    </div>

                    <div class="inbox-message-preview-body">
						<!-- COMMENT LIST -->
						<div class="comment-list">
							<!-- COMMENT -->
							<div class="comment-wrap">
								<div class="comment">
									{!! $userpage->userdetail->about_me !!}
								</div>
							</div>
							<!-- /COMMENT -->
                        </div>
                    </div>
                </div>
             </div>
             <br/>
            <!-- HEADLINE -->
            <div class="headline buttons primary">
                <h4>Latest Items</h4>
                <a href="author-profile-items.html" class="button mid-short dark-light">See all the items</a>
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT LIST -->
            <div class="product-list grid column3-4-wrap">
                @forelse ($userpage->product->take(3) as $product )
                @include('frontviews.justproduct')

            @empty

            @endforelse
        </div>

            <div class="clearfix"></div>

            <!-- HEADLINE -->
            <div class="headline buttons primary">
                <h4>Latest Reviews</h4>
                <a href="author-profile-messages.html" class="button mid-short dark-light">See all the Reviews</a>
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
