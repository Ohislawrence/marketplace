<!-- POST TAB -->
<div class="post-tab">
    <!-- TAB HEADER -->
    <div class="tab-header primary">
        <!-- TAB ITEM -->
        <div class="tab-item selected">
            <p class="text-header">Comments ({{ $product->comment->where('comment_id', null)->where('review', null)->count() }})</p>
        </div>
        <!-- /TAB ITEM -->

        <!-- TAB ITEM -->
        <div class="tab-item">
            <p class="text-header">Review ({{ $product->comment->where('comment_id', null)->whereNotNull('review')->count() }})</p>
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
        @forelse ( $product->comment->where('comment_id', null)->where('review', null) as $comment )

        <!-- COMMENT -->
        <div class="comment-wrap">
            <!-- USER AVATAR -->
            <a href="{{ route('account.page', ['username'=> $comment->user->userdetail->username]) }}">
                <figure class="user-avatar medium">
                    <img src="{{ asset('users/profileimages/'. $comment->user->userdetail->profileimage ) }}" alt="">
                </figure>
            </a>
            <!-- /USER AVATAR -->
            <div class="comment">
                <p class="text-header">{{ $comment->user->name }}</p>
                <!-- PIN -->
                <span class="pin greyed">Purchased</span>
                <!-- /PIN -->
                <p class="timestamp">{{ $comment->created_at }}</p>
                <a href="#" class="report">Report</a>
                <p>{{ $comment->comment }}</p>
            </div>

        <!-- /COMMENT -->
        @auth

        <!-- COMMENT REPLY FORM -->

        @if ($comment->user_id == auth()->user()->id || $product->user_id == auth()->user()->id)


        <form class="comment-reply-form" method="POST" action="{{ route('comment.post') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $product->slug }}">
            <input type="hidden" name="productuuid" value="{{ $product->id }}">
            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
            <textarea name="reply" placeholder="Reply here..."></textarea>
            <!-- CHECKBOX -->
            <input type="checkbox" id="notif1" name="notif1" checked>
            <label for="notif1">
                <span class="checkbox primary"><span></span></span>
                Receive email notifications
            </label>
            <!-- /CHECKBOX -->
            <button type="submit" class="button primary">Reply</button>
        </form>
        <!-- /COMMENT REPLY FORM -->
        @endif
        @endauth
        <!-- COMMENT reply -->
        @forelse ( $product->comment->where('comment_id', $comment->id) as  $reply)
            <div class="comment-wrap">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('users/profileimages/'. $reply->user->userdetail->profileimage ) }}" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->
                <div class="comment">
                    <p class="text-header">{{ $reply->user->name }}</p>
                    <!-- PIN -->
                    <span class="pin">Author</span>
                    <!-- /PIN -->
                    <p class="timestamp">{{ $reply->created_at }}</p>
                    <a href="#" class="report">Report</a>
                    <p>{{ $reply->comment }}</p>
                </div>
        </div>
        <!-- /COMMENT REPLY -->
        @empty

        @endforelse

        <!-- /COMMENT reply -->
    </div>
        <!-- LINE SEPARATOR -->
        <hr class="line-separator">
        <!-- /LINE SEPARATOR -->

        @empty


            <!-- PAGER -->
            <div class="pager primary">
            </div>
            <!-- /PAGER -->

    @endforelse

            <div class="clearfix"></div>

            <!-- LINE SEPARATOR -->
            <hr class="line-separator">
            <!-- /LINE SEPARATOR -->

            <h3>Leave a Comment</h3>
            @auth

            <!-- COMMENT REPLY -->
            <div class="comment-wrap comment-reply">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('users/profileimages/'. auth()->user()->userdetail->profileimage ) }}" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->

                <!-- COMMENT REPLY FORM -->
                <form class="comment-reply-form" method="POST" action="{{ route('comment.post') }}">
                    @csrf
                    <input type="hidden" name="slug" value="{{ $product->slug }}">
                    <input type="hidden" name="productuuid" value="{{ $product->id }}">
                    <textarea name="comment" placeholder="Write your comment here..."></textarea>
                    <button type="submit" class="button primary">Comment</button>
                </form>
                <!-- /COMMENT REPLY FORM -->
            </div>
            <!-- /COMMENT REPLY -->
            @else
            <div class="comment-wrap comment-reply">
                <p>Sign in to leave a comment</p>
            </div>

            @endauth
        </div>
        <!-- /COMMENTS -->
    </div>
    <!-- /TAB CONTENT -->

    <!-- TAB CONTENT -->
    <div class="tab-content void">
        <!-- COMMENTS -->
        <div class="comment-list">
        @forelse ( $product->comment->where('comment_id', null)->whereNotNull('review') as $review )

        <!-- COMMENT -->
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

        <!-- /COMMENT -->
        @auth

        <!-- COMMENT REPLY FORM -->

        @if ($comment->user_id == auth()->user()->id || $product->user_id == auth()->user()->id)


        <form class="comment-reply-form" method="POST" action="{{ route('review.post') }}">
            @csrf
            <input type="hidden" name="productuuid" value="{{ $product->id }}">
            <input type="hidden" name="comment_id" value="{{ $review->id }}">
            <textarea name="reviewreply" placeholder="Reply here..."></textarea>
            <!-- CHECKBOX -->
            <input type="checkbox" id="notif1" name="notif1" checked>
            <label for="notif1">
                <span class="checkbox primary"><span></span></span>
                Receive email notifications
            </label>
            <!-- /CHECKBOX -->
            <button type="submit" class="button primary">Reply</button>
        </form>
        <!-- /COMMENT REPLY FORM -->
        @endif
        @endauth
        <!-- COMMENT reply -->
        @forelse ( $product->comment->where('comment_id', $review->id) as  $reply)
            <div class="comment-wrap">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('users/profileimages/'. $reply->user->userdetail->profileimage ) }}" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->
                <div class="comment">
                    <p class="text-header">{{ $reply->user->name }}</p>
                    <!-- PIN -->
                    <span class="pin">Author</span>
                    <!-- /PIN -->
                    <p class="timestamp">{{ $reply->created_at }}</p>
                    <a href="#" class="report">Report</a>
                    <p>{{ $reply->comment }}</p>
                </div>
        </div>
        <!-- /COMMENT REPLY -->
        @empty

        @endforelse

        <!-- /COMMENT reply -->
    </div>
        <!-- LINE SEPARATOR -->
        <hr class="line-separator">
        <!-- /LINE SEPARATOR -->

        @empty


            <!-- PAGER -->
            <div class="pager primary">
            </div>
            <!-- /PAGER -->

    @endforelse

            <div class="clearfix"></div>

            <!-- LINE SEPARATOR -->
            <hr class="line-separator">
            <!-- /LINE SEPARATOR -->

            <h3>Write a review</h3>
            @auth

            <!-- COMMENT REPLY -->
            <div class="comment-wrap comment-reply">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('users/profileimages/'. auth()->user()->userdetail->profileimage ) }}" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->

                <!-- COMMENT REPLY FORM -->
                <form class="comment-reply-form" method="POST" action="{{ route('review.post') }}">
                    @csrf
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                    <input type="hidden" name="productuuid" value="{{ $product->id }}">
                    <textarea name="review" placeholder="Write your comment here..."></textarea>
                    <button type="submit" class="button primary">Review</button>
                </form>
                <!-- /COMMENT REPLY FORM -->
            </div>
            <!-- /COMMENT REPLY -->
            @else
            <div class="comment-wrap comment-reply">
                <p>Purchase this item to review it</p>
            </div>

            @endauth
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
