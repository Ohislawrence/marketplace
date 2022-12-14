
<div class="header-wrap">
    <header>
        <!-- LOGO -->
        <a href="{{ (route('home.page')) }}">
            <figure class="logo">
                <img src="{{ asset('assets/images/logo1.png') }}" alt="logo">
            </figure>
        </a>
        <!-- /LOGO -->

        <!-- MOBILE MENU HANDLER -->
        <div class="mobile-menu-handler left primary">
            <img src="{{ asset('assets/images/pull-icon.png') }}" alt="pull-icon">
        </div>
        <!-- /MOBILE MENU HANDLER -->

        <!-- LOGO MOBILE -->
        <a href="{{ route('home.page') }}">
            <figure class="logo-mobile">
                <img src="{{ asset('assets/images/logo_mobile.png') }}" alt="Acarty logo">
            </figure>
        </a>
        <!-- /LOGO MOBILE -->

        <!-- MOBILE ACCOUNT OPTIONS HANDLER -->
        <div class="mobile-account-options-handler right secondary">
            <span class="icon-user"></span>
        </div>
        <!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

        <!-- USER BOARD -->
        <div class="user-board">
            <!-- USER QUICKVIEW -->
            @auth
            <div class="user-quickview">
                <!-- USER AVATAR -->
                <a href="author-profile.html">
                <div class="outer-ring">
                    <div class="inner-ring"></div>

                <figure class="user-avatar">
                    @if (Auth::user()->userdetail->profileimage != 'profileimage.png')
                        <img src="{{ asset('users/profileimages/'. Auth::user()->userdetail->profileimage ) }}" alt="{{ Auth::user()->userdetail->username }}">
                    @else
                    <img src="{{ asset('users/profileimages/profileimage.png') }}" alt="avatar">
                    @endif
                </figure>
                </div>
                </a>
                <!-- /USER AVATAR -->

                <!-- USER INFORMATION -->
                <p class="user-name">{{ Auth::user()->name }}</p>
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
                @if ( Auth::user()->getRoleNames()->first() == 'general' )
                    <p class="user-money">Member</p>
                @elseif (Auth::user()->getRoleNames()->first() == 'seller')
                    <p class="user-money">Founder</p>
                @elseif (Auth::user()->getRoleNames()->first() == 'Super Admin')
                    <p class="user-money">Admin</p>
                @endif
                <!-- /USER INFORMATION -->

                <!-- DROPDOWN -->
                <ul class="dropdown small hover-effect closed">

                    @hasanyrole('Super Admin|seller')
                    <li class="dropdown-item">
                        <div class="dropdown-triangle"></div>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    @endhasanyrole

                    <li class="dropdown-item">
                        <div class="dropdown-triangle"></div>
                        <a href="{{ route('account.page',['username'=> Auth::user()->userdetail->username]) }}">Profile Page</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('accountsetting.page', ['username'=> Auth::user()->userdetail->username]) }}">Account Settings</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="d{{ route('purchases.page',  ['username'=> auth()->user()->userdetail->username] ) }}">My Purchases</a>
                    </li>
                    @hasanyrole('seller|Super Admin')
                    <li class="dropdown-item">
                        <a href="dashboard-statement.html">Sales Statement</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-withdrawals.html">Withdrawals</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('product.select') }}">Upload Item</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('product.index') }}">Manage Items</a>
                    </li>
                    @endhasanyrole

                </ul>
                <!-- /DROPDOWN -->
            </div>
            <!-- /USER QUICKVIEW -->
            @endauth



            <!-- ACCOUNT INFORMATION -->
            <div class="account-information">

                <div class="account-cart-quickview">
                    <span class="icon-present">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </span>
                    @auth
                    <!-- PIN -->
                    <span class="pin soft-edged secondary">{{ Cart::session(Auth::user()->id)->getTotalQuantity()}}</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN CART -->
                    <ul class="dropdown cart closed">
                        @forelse ( Cart::session(Auth::user()->id)->getContent() as $item )
                            <!-- DROPDOWN ITEM -->
                                <li class="dropdown-item">
                                    <a href="{{ route('singleproduct.page', ['productslug' => $item->attributes->slug ]) }}" class="link-to"></a>
                                    <!-- SVG PLUS -->
                                    <svg class="svg-plus">
                                        <use xlink:href="#svg-plus"></use>
                                    </svg>
                                    <!-- /SVG PLUS -->
                                    <div class="dropdown-triangle"></div>
                                    <figure class="product-preview-image tiny">
                                        <img src="{{ asset('products/featuredimage/' .$item->attributes->image) }}" alt="">
                                    </figure>
                                    <p class="text-header tiny">{{ $item->name }}<span> ( x{{ $item->quantity }} )</span></p>
                                    <p class="category tiny primary">{{ $item->attributes->type }}</p>
                                    <p class="price tiny"><span>$</span>{{ $item->price }}</p>
                                </li>
                            <!-- /DROPDOWN ITEM -->
                        @empty

                        @endforelse




                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <p class="text-header tiny">Total</p>
                            <p class="price"><span>$</span>{{ Cart::getTotal() }}</p>
                            <a href="{{ route('cart.index') }}" class="button primary half">Go to Cart</a>
                            <a href="{{ route('checkout.page') }}" class="button secondary half">Go to Checkout</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN CART -->
                </div>

                <div class="account-settings-quickview">
                    <span class="icon-settings">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </span>

                    <!-- PIN -->
                    <span class="pin soft-edged primary">{{ auth()->user()->unreadNotifications->count()}}</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN NOTIFICATIONS -->
                    <ul class="dropdown notifications no-hover closed">
                        @forelse(auth()->user()->unreadNotifications as $notification)
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>

                            <p class="title">
                                {{ $notification->data['body'] }}
                            </p>
                            <p class="timestamp">{{ $notification->created_at->diffForHumans() }}</p>
                            <span class="notification-type primary-new icon-heart"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        @empty
                        <li class="dropdown-item">
                            <p class="title">
                                No unread Notification!
                            </p>
                        </li>
                        @endforelse

                    </ul>
                    <!-- /DROPDOWN NOTIFICATIONS -->
                </div>
                @endauth
            </div>
            <!-- /ACCOUNT INFORMATION -->
            @auth
            <!-- ACCOUNT ACTIONS -->
            <div class="account-actions">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="button secondary">Logout</button>
                </form>
            </div>
            <!-- /ACCOUNT ACTIONS -->
            @endauth
        </div>
        <!-- /USER BOARD -->
        @auth
        @else
        <!-- ACCOUNT ACTIONS -->
        <div class="account-actions">
            <a href="{{ route('login') }}" class="button primary">Login</a>

        </div>
        <!-- /ACCOUNT ACTIONS -->
        @endauth
    </header>
</div>
