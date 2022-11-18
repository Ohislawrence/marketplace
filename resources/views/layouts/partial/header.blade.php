<div class="header-wrap">
    <header>
        <!-- LOGO -->
        <a href="{{ (route('home.page')) }}">
            <figure class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
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
                <img src="{{ asset('assets/images/logo_mobile.png') }}" alt="logo-mobile">
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
                        <img src="{{ asset('assets/images/avatars/avatar_01.jpg') }}" alt="avatar">
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
                <p class="user-money">{{ Auth::user()->getRoleNames()->first() }}</p>
                <!-- /USER INFORMATION -->

                <!-- DROPDOWN -->
                <ul class="dropdown small hover-effect closed">
                    <li class="dropdown-item">
                        <div class="dropdown-triangle"></div>
                        <a href="{{ route('account.page',['username'=> Auth::user()->userdetail->username]) }}">Profile Page</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-settings.html">Account Settings</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-purchases.html">Your Purchases</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-statement.html">Sales Statement</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-withdrawals.html">Withdrawals</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('product.select') }}l">Upload Item</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('product.index') }}">Manage Items</a>
                    </li>
                </ul>
                <!-- /DROPDOWN -->
            </div>
            <!-- /USER QUICKVIEW -->
            @endauth



            <!-- ACCOUNT INFORMATION -->
            <div class="account-information">

                <div class="account-cart-quickview">
                    <span class="icon-basket">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </span>


                    <!-- PIN -->
                    <span class="pin soft-edged secondary">7</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN CART -->
                    <ul class="dropdown cart closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <div class="dropdown-triangle"></div>
                            <figure class="product-preview-image tiny">
                                <img src="images/items/pixel_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">Pixel Diamond Gaming Shop</p>
                            <p class="category tiny primary">Shopify</p>
                            <p class="price tiny"><span>$</span>86</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <figure class="product-preview-image tiny">
                                <img src="assets/images/items/monsters_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">Little Monsters - 40 Pack Button Badge Maker</p>
                            <p class="category tiny primary">Graphics</p>
                            <p class="price tiny"><span>$</span>10</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <figure class="product-preview-image tiny">
                                <img src="assets/images/items/flat_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">Flatland - Hero Image Composer</p>
                            <p class="category tiny primary">Shopify</p>
                            <p class="price tiny"><span>$</span>12</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <p class="text-header tiny">Total</p>
                            <p class="price"><span>$</span>108.00</p>
                            <a href="cart.html" class="button primary half">Go to Cart</a>
                            <a href="checkout.html" class="button secondary half">Go to Checkout</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN CART -->
                </div>
                @auth
                <a href="favourites.html">
                    <div class="account-wishlist-quickview">
                        <span class="icon-heart"></span>
                    </div>
                </a>

                <div class="account-email-quickview">
                    <span class="icon-envelope">
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </span>

                    <!-- PIN -->
                    <span class="pin soft-edged secondary">!</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN NOTIFICATIONS -->
                    <ul class="dropdown notifications closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_06.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>Sarah-Imaginarium</span></p>
                            <p class="subject">Product Question</p>
                            <p class="timestamp">May 18th, 2014</p>
                            <span class="notification-type secondary-new icon-envelope"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_04.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>Red Thunder Graphics</span></p>
                            <p class="subject">Support Inquiry</p>
                            <p class="timestamp">May 5th, 2014</p>
                            <span class="notification-type icon-envelope-open"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_07.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>Twisted Themes</span></p>
                            <p class="subject">Collaboration</p>
                            <p class="timestamp">Feb 24th, 2014</p>
                            <span class="notification-type secondary-new icon-envelope"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_08.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>GregSpiegel1820</span></p>
                            <p class="subject">How to Install the Theme...</p>
                            <p class="timestamp">Jan 3rd, 2014</p>
                            <span class="notification-type icon-action-undo"></span>
                            <a href="dashboard-inbox.html" class="button secondary">View all Messages</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN NOTIFICATIONS -->
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
                    <span class="pin soft-edged primary">49</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN NOTIFICATIONS -->
                    <ul class="dropdown notifications no-hover closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_02.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>MeganV.</span></a> added
                                <a href="item-v1.html"><span>Pixel Diamond Gaming Shop</span></a> to favourites
                            </p>
                            <p class="timestamp">2 Hours ago</p>
                            <span class="notification-type primary-new icon-heart"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_03.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>Thomas_Ket</span></a> wrote you an
                                <a href="author-reputation.html"><span>Author’s Reputation</span></a>
                            </p>
                            <p class="timestamp">17 Hours ago</p>
                            <span class="notification-type icon-star"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_04.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>Red Thunder Graphics</span></a> commented on
                                <a href="item-v1.html"><span>3D Layers - Web Mockup</span></a>
                            </p>
                            <p class="timestamp">8 Days Ago</p>
                            <span class="notification-type primary-new icon-bubble"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_05.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>DaBebop</span></a> purchased
                                <a href="item-v1.html"><span>Miniverse - Hero Image Composer</span></a>
                            </p>
                            <p class="timestamp">1 Week ago</p>
                            <span class="notification-type icon-tag"></span>
                            <a href="dashboard-notifications.html" class="button primary">View all Notifications</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
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
