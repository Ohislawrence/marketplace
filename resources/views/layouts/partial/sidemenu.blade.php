<!-- SIDE MENU -->
<div id="mobile-menu" class="side-menu left closed">
    <!-- SVG PLUS -->
    <svg class="svg-plus">
        <use xlink:href="#svg-plus"></use>
    </svg>
    <!-- /SVG PLUS -->

    <!-- SIDE MENU HEADER -->
    <div class="side-menu-header">
        <figure class="logo small">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
        </figure>
    </div>
    <!-- /SIDE MENU HEADER -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">Main Links</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect interactive">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('type.page', ['types' => 'software']) }}">Software</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('type.page', ['types' => 'courses-and-learning']) }}">Courses & Learning</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('type.page', ['types' => 'templates']) }}">Templates</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('type.page', ['types' => 'creative-resources']) }}">Creative Resources</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('type.page', ['types' => 'tickets']) }}">Tickets</a>
        </li>
        <!-- /DROPDOWN ITEM -->


    </ul>
    <!-- /DROPDOWN -->
</div>
<!-- /SIDE MENU -->

<!-- SIDE MENU -->
<div id="account-options-menu" class="side-menu right closed">
    @auth
    <!-- SVG PLUS -->
    <svg class="svg-plus">
        <use xlink:href="#svg-plus"></use>
    </svg>
    <!-- /SVG PLUS -->

    <!-- SIDE MENU HEADER -->
    <div class="side-menu-header">
        <!-- USER QUICKVIEW -->
        <div class="user-quickview">
            <!-- USER AVATAR -->
            <a href="author-profile.html">
            <div class="outer-ring">
                <div class="inner-ring"></div>
                <figure class="user-avatar">
                    <img src="{{ asset('users/profileimages/'. Auth::user()->userdetail->profileimage ) }}" alt="{{ Auth::user()->userdetail->username }}">
                </figure>
            </div>
            </a>
            <!-- /USER AVATAR -->

            <!-- USER INFORMATION -->
            <p class="user-name">{{ Auth::user()->name }}</p>
            <p class="user-money">{{ Auth::user()->getRoleNames()->first() }}</p>
            <!-- /USER INFORMATION -->
        </div>
        <!-- /USER QUICKVIEW -->
    </div>
    <!-- /SIDE MENU HEADER -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">Your Account</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-notifications.html">Notifications</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-inbox.html">Messages</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="cart.html">Your Cart</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="favourites.html">Favourites</a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">Dashboard</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="author-profile.html">Profile Page</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-settings.html">Account Settings</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-purchases.html">Your Purchases</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-statement.html">Sales Statement</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-buycredits.html">Buy Credits</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-withdrawals.html">Withdrawals</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-uploaditem.html">Upload Item</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-manageitems.html">Manage Items</a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

    <a href="#" class="button medium secondary">Logout</a>
    <a href="#" class="button medium primary">Become a Seller</a>
    @else
    <a href="#" class="button medium secondary">Sign In</a>
    <a href="#" class="button medium primary">Register</a>
    @endauth

</div>

<!-- /SIDE MENU -->
