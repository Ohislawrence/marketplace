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
<!-- SECTION HEADLINE -->

<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>{{ $userdetail->user->name }} Profile</h2>

    </div>
</div>
<!-- /SECTION HEADLINE -->

<!-- AUTHOR PROFILE BANNER -->
<div class="author-profile-banner" style=""></div>
<!-- /AUTHOR PROFILE BANNER -->

<!-- AUTHOR PROFILE META -->
<div class="author-profile-meta-wrap">
    <div class="author-profile-meta">
        <!-- AUTHOR PROFILE INFO -->
        <div class="author-profile-info">
            <!-- AUTHOR PROFILE INFO ITEM -->
            <div class="author-profile-info-item">
                <p class="text-header">Member Since:</p>
                <p>{{ $userdetail->created_at->diffForHumans() }}</p>
            </div>
            <!-- /AUTHOR PROFILE INFO ITEM -->

            <!-- AUTHOR PROFILE INFO ITEM -->
            <div class="author-profile-info-item">
                <p class="text-header">Total Sales:</p>
                <p>820</p>
            </div>
            <!-- /AUTHOR PROFILE INFO ITEM -->

            <!-- AUTHOR PROFILE INFO ITEM -->
            <div class="author-profile-info-item">
                <p class="text-header">Wallet Balance:</p>
                <p>$ {{ $userpage->wallet->balance }}</p>
            </div>
            <!-- /AUTHOR PROFILE INFO ITEM -->

            <!-- AUTHOR PROFILE INFO ITEM -->
            <div class="author-profile-info-item">
                <p class="text-header">Website:</p>
                <p><a href="{{ $userdetail->website }}" class="primary">{{ $userdetail->website }}</a></p>
            </div>
            <!-- /AUTHOR PROFILE INFO ITEM -->
        </div>
        <!-- /AUTHOR PROFILE INFO -->
    </div>
</div>
<!-- /AUTHOR PROFILE META -->

<!-- SECTION -->
<div class="section-wrap">
    <div class="section overflowable">
        <!-- SIDEBAR -->
        <div class="sidebar left author-profile">
            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item author-bio">
                <!-- USER AVATAR -->
                <a href="user-profile.html" class="user-avatar-wrap medium">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('users/profileimages/'. $userpage->userdetail->profileimage ) }}" alt="">
                    </figure>
                </a>
                <!-- /USER AVATAR -->
                <p class="text-header">{{ $userdetail->user->name }}</p>
                    @if ( Auth::user()->getRoleNames()->first() == 'general' )
                    <p class="text-oneline">Member</p>
                @elseif (Auth::user()->getRoleNames()->first() == 'seller')
                    <p class="text-oneline">Founder</p>
                @elseif (Auth::user()->getRoleNames()->first() == 'Super Admin')
                    <p class="text-oneline">Admin</p>
                @endif

                    <p class="text-oneline">{{ $userdetail->location }}</p>
                <!-- SHARE LINKS -->
                <ul class="share-links">
                    <li><a href="#" class="fb"></a></li>
                    <li><a href="#" class="twt"></a></li>
                    <li><a href="#" class="db"></a></li>
                </ul>
                @guest()

                <button id="myBtn" class="button mid dark spaced">Log in to Follow</button>
                @include('frontviews.loginmodal')

                @else
                <!-- /SHARE LINKS -->
                @if (request()->route('username') != auth()->user()->userdetail->username)

                    @if (auth()->user()->isFollowing($userdetail->user))
                    <a href="{{ route('unfollow.button', ['username'=> request()->route('username')]) }}" class="button mid dark spaced">Unfollow</a>
                    @else
                    <a href="{{ route('follow.button', ['username'=> request()->route('username')]) }}" class="button mid dark spaced">Follow</a>
                    @endif
                    <a href="#" class="button mid dark-light">Send a Private Message</a>
                @endif

                @endguest

            </div>
            <!-- /SIDEBAR ITEM -->
            @guest
            <!-- DROPDOWN -->
            <ul class="dropdown hover-effect">
                <li class="dropdown-item active">
                    <a href="{{ route('account.page', ['username'=> request()->route('username')]) }}">Profile Page</a>
                </li>
                @hasanyrole('seller|Super Admin')
                <li class="dropdown-item">
                    <a href="{{ route('myitem.page', ['username' => $userpage->userdetail->username]) }}">Author's Items</a>
                </li>
                @endhasanyrole

                <li class="dropdown-item">
                    <a >Followers ({{ $userdetail->user->followers()->count() }})</a>
                </li>
                <li class="dropdown-item">
                    <a >Following ({{ $userdetail->user->followings()->count() }})</a>
                </li>

            </ul>
            <!-- /DROPDOWN -->

            @else
            @if (request()->route('username') == auth()->user()->userdetail->username)
            <ul class="dropdown hover-effect">
                <li class="dropdown-item {{ request()->is('user/*/') ? 'active' : '' }}">
                    <a href="{{ route('account.page', ['username'=> auth()->user()->userdetail->username] ) }}">Profile Page</a>
                </li>
                @if ($userdetail->user->getRoleNames()->first() == 'seller')
                <li class="dropdown-item {{ request()->is('user/*/myitem') ? 'active' : '' }}">
                    <a href="{{ route('myitem.page', ['username' => $userpage->userdetail->username]) }}">Author's Items</a>
                </li>
                @endif
                <li class="dropdown-item {{ request()->is('user/*/followers') ? 'active' : '' }}">
                    <a href="{{ route('followers.page', ['username'=> auth()->user()->userdetail->username]) }}">Followers ({{ auth()->user()->followers()->count() }})</a>
                </li>
                <li class="dropdown-item {{ request()->is('user/*/following') ? 'active' : '' }}">
                    <a href="{{ route('following.page', ['username'=> auth()->user()->userdetail->username]) }}">Following ({{ auth()->user()->followings()->count() }})</a>
                </li>
                <li class="dropdown-item {{ request()->is('user/*/purchases') ? 'active' : '' }}">
                    <a href="{{ route('purchases.page',  ['username'=> auth()->user()->userdetail->username] ) }}">My Purchases</a>
                </li>
                <li class="dropdown-item {{ request()->is('user/*/account/settings') ? 'active' : '' }}">
                    <a href="{{ route('accountsetting.page',  ['username'=> auth()->user()->userdetail->username]) }}">Account Settings</a>
                </li>
                @hasanyrole('seller|Super Admin')
                <li class="dropdown-item">
                    <a href="author-profile-reviews.html">Reviews</a>
                </li>
                <li class="dropdown-item">
                    <a href="author-profile-reviews.html">Payouts</a>
                </li>
                <li class="dropdown-item">
                    <a href="author-profile-reviews.html">Earnings</a>
                </li>
                <li class="dropdown-item">
                    <a href="author-profile-reviews.html">Statements</a>
                </li>
                @endhasanyrole
            </ul>
            <!-- /DROPDOWN -->

            @else

            <!-- DROPDOWN -->
            <ul class="dropdown hover-effect">
                <li class="dropdown-item active">
                    <a href="{{ route('account.page', ['username'=> request()->route('username')]) }}">Profile Page</a>
                </li>
                @if ($userdetail->user->getRoleNames()->first() == 'seller')
                <li class="dropdown-item">
                    <a href="author-profile-items.html">Author's Items (103)</a>
                </li>

                @endif

                <li class="dropdown-item">
                    <a href="{{ route('followers.page', ['username'=> request()->route('username')]) }}">Followers ({{ $userdetail->user->followers()->count() }})</a>
                </li>
                <li class="dropdown-item">
                    <a href="{{ route('following.page', ['username'=> request()->route('username')]) }}">Following ({{ $userdetail->user->followings()->count() }})</a>
                </li>

            </ul>
            <!-- /DROPDOWN -->

            @endif

            @endguest



            @hasanyrole('seller|Super Admin')
            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item author-reputation full">
                <h4>Author's Reputation</h4>
                <hr class="line-separator">
                <!-- PIE CHART -->
                <div class="pie-chart pie-chart1">
                    <p class="text-header percent">86<span>%</span></p>
                    <p class="text-header percent-info">Recommended</p>
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
                <!-- /PIE CHART -->
                <a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
            </div>
            <!-- /SIDEBAR ITEM -->
            @endhasanyrole
        </div>
        <!-- /SIDEBAR -->
