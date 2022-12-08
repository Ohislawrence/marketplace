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
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
@endsection


@section('footer')


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
									<p>{!! $userpage->userdetail->about_me !!}</p>
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
                <a href="{{ route('myitem.page', ['username' => $userpage->userdetail->username]) }}" class="button mid-short dark-light">See all the items</a>
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
                @forelse ($userpage->product as $product )
                @foreach ( $product->comment->where('comment_id', null)->whereNotNull('review')->take(3) as $review )
                <div class="comment-wrap">
                    <!-- USER AVATAR -->
                    <a href="{{ route('account.page', ['username'=> $review->user->userdetail->username]) }}">
                        <figure class="user-avatar medium">
                            <img src="{{ asset('users/profileimages/'. $review->user->userdetail->profileimage ) }}" alt="">
                        </figure>
                    </a>
                    <!-- /USER AVATAR -->
            <div class="comment">
                <p class="text-header">{{ $review->user->name }}</p>
                <!-- PIN -->
                <span class="pin greyed">Purchased</span>
                <!-- /PIN -->
                <p class="timestamp">{{ $review->created_at }}</p>
                <a href="#" class="report">Report</a>
                <p>{{ $review->comment }}</p>
            </div>
                </div>
                <!-- /COMMENT -->
                <!-- LINE SEPARATOR -->
                <hr class="line-separator">
                <!-- /LINE SEPARATOR -->

                @endforeach

                @empty


                @endforelse

            </div>
            <!-- /COMMENTS -->
        </div>
        <!-- CONTENT -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- /SECTION -->

@endsection
