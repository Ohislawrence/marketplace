<!-- POST TAB -->
<div class="post-tab">
    <!-- TAB HEADER -->
    <div class="tab-header primary">
        <!-- TAB ITEM -->
        <div class="tab-item selected">
            <p class="text-header">Comments ({{ $product->comment->count() }})</p>
        </div>
        <!-- /TAB ITEM -->

        <!-- TAB ITEM -->
        <div class="tab-item">
            <p class="text-header">Buyers Corner</p>
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
        @forelse ( $product->comment->where('comment_id', null) as $comment )

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

        @endforelse
            <!-- PAGER -->
            <div class="pager primary">
                <div class="pager-item"><p>1</p></div>
                <div class="pager-item active"><p>2</p></div>
                <div class="pager-item"><p>3</p></div>
                <div class="pager-item"><p>...</p></div>
                <div class="pager-item"><p>17</p></div>
            </div>
            <!-- /PAGER -->

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

            <!-- COMMENT REPLY -->
            <div class="comment-wrap comment-reply">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="images/avatars/avatar_09.jpg" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->

                <!-- COMMENT REPLY FORM -->
                <form class="comment-reply-form">
                    <textarea name="treply10" placeholder="Write your comment here..."></textarea>
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="notif10" name="notif10" checked>
                    <label for="notif10">
                        <span class="checkbox primary"><span></span></span>
                        Receive email notifications
                    </label>
                    <!-- /CHECKBOX -->
                    <button class="button primary">Post Comment</button>
                </form>
                <!-- /COMMENT REPLY FORM -->
            </div>
            <!-- /COMMENT REPLY -->

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
                    <!-- PIN -->
                    <span class="pin greyed">Purchased</span>
                    <!-- /PIN -->
                    <p class="timestamp">8 Hours Ago</p>
                    <a href="#" class="report">Report</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div>
            </div>
            <!-- /COMMENT -->

            <!-- COMMENT REPLY -->
            <div class="comment-wrap comment-reply">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="images/avatars/avatar_09.jpg" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->

                <!-- COMMENT REPLY FORM -->
                <form class="comment-reply-form">
                    <textarea name="treply20" placeholder="Write your comment here..."></textarea>
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="notif20" name="notif20" checked>
                    <label for="notif20">
                        <span class="checkbox primary"><span></span></span>
                        Receive email notifications
                    </label>
                    <!-- /CHECKBOX -->
                    <button class="button primary">Post Comment</button>
                </form>
                <!-- /COMMENT REPLY FORM -->
            </div>
            <!-- /COMMENT REPLY -->

            <!-- LINE SEPARATOR -->
            <hr class="line-separator">
            <!-- /LINE SEPARATOR -->

            <!-- COMMENT -->
            <div class="comment-wrap">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="images/avatars/avatar_18.jpg" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->
                <div class="comment">
                    <p class="text-header">Lucy Diamond</p>
                    <!-- PIN -->
                    <span class="pin greyed">Purchased</span>
                    <!-- /PIN -->
                    <p class="timestamp">10 Hours Ago</p>
                    <a href="#" class="report">Report</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div>

                <!-- COMMENT -->
                <div class="comment-wrap">
                    <!-- USER AVATAR -->
                    <a href="user-profile.html">
                        <figure class="user-avatar medium">
                            <img src="images/avatars/avatar_09.jpg" alt="">
                        </figure>
                    </a>
                    <!-- /USER AVATAR -->
                    <div class="comment">
                        <p class="text-header">Odin_Design</p>
                        <!-- PIN -->
                        <span class="pin">Author</span>
                        <!-- /PIN -->
                        <p class="timestamp">2 Hours Ago</p>
                        <a href="#" class="report">Report</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
                <!-- /COMMENT -->

                <!-- COMMENT -->
                <div class="comment-wrap">
                    <!-- USER AVATAR -->
                    <a href="user-profile.html">
                        <figure class="user-avatar medium">
                            <img src="images/avatars/avatar_18.jpg" alt="">
                        </figure>
                    </a>
                    <!-- /USER AVATAR -->
                    <div class="comment">
                        <p class="text-header">Lucy Diamond</p>
                        <!-- PIN -->
                        <span class="pin greyed">Purchased</span>
                        <!-- /PIN -->
                        <p class="timestamp">2 Hours Ago</p>
                        <a href="#" class="report">Report</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam onsectetur elit.</p>
                    </div>
                </div>
                <!-- /COMMENT -->

                <!-- COMMENT REPLY -->
                <div class="comment-wrap comment-reply">
                    <!-- USER AVATAR -->
                    <a href="user-profile.html">
                        <figure class="user-avatar medium">
                            <img src="images/avatars/avatar_09.jpg" alt="">
                        </figure>
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- COMMENT REPLY FORM -->
                    <form class="comment-reply-form">
                        <textarea name="treply30" placeholder="Write your comment here..."></textarea>
                        <!-- CHECKBOX -->
                        <input type="checkbox" id="notif30" name="notif30" checked>
                        <label for="notif30">
                            <span class="checkbox primary"><span></span></span>
                            Receive email notifications
                        </label>
                        <!-- /CHECKBOX -->
                        <button class="button primary">Post Comment</button>
                    </form>
                    <!-- /COMMENT REPLY FORM -->
                </div>
                <!-- /COMMENT REPLY -->
            </div>
            <!-- /COMMENT -->

            <!-- LINE SEPARATOR -->
            <hr class="line-separator">
            <!-- /LINE SEPARATOR -->

            <!-- PAGER -->
            <div class="pager primary">
                <div class="pager-item"><p>1</p></div>
                <div class="pager-item active"><p>2</p></div>
                <div class="pager-item"><p>3</p></div>
                <div class="pager-item"><p>...</p></div>
                <div class="pager-item"><p>17</p></div>
            </div>
            <!-- /PAGER -->

            <div class="clearfix"></div>

            <!-- LINE SEPARATOR -->
            <hr class="line-separator">
            <!-- /LINE SEPARATOR -->

            <h3>Leave a Comment</h3>

            <!-- COMMENT REPLY -->
            <div class="comment-wrap comment-reply">
                <!-- USER AVATAR -->
                <a href="user-profile.html">
                    <figure class="user-avatar medium">
                        <img src="images/avatars/avatar_09.jpg" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->

                <!-- COMMENT REPLY FORM -->
                <form class="comment-reply-form">
                    <textarea name="treply100" placeholder="Write your comment here..."></textarea>
                    <button class="button primary">Post Comment</button>
                </form>
                <!-- /COMMENT REPLY FORM -->
            </div>
            <!-- /COMMENT REPLY -->
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
