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

    <!-- SVG PLUS -->
    <svg class="svg-plus">
        <use xlink:href="#svg-plus"></use>
    </svg>
    <!-- /SVG PLUS -->
    @auth
    <!-- SIDE MENU HEADER -->
    <div class="side-menu-header">
        <!-- USER QUICKVIEW -->
        <div class="user-quickview">
            <!-- USER AVATAR -->
            <a href="{{ route('account.page',['username'=> Auth::user()->userdetail->username]) }}">
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
            @if ( Auth::user()->getRoleNames()->first() == 'general' )
                    <p class="user-money">Member</p>
                @elseif (Auth::user()->getRoleNames()->first() == 'seller')
                    <p class="user-money">Founder</p>
                @elseif (Auth::user()->getRoleNames()->first() == 'Super Admin')
                    <p class="user-money">Admin</p>
                @endif
            <!-- /USER INFORMATION -->
        </div>
        <!-- /USER QUICKVIEW -->
    </div>
    <!-- /SIDE MENU HEADER -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">My Account</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('account.page',['username'=> Auth::user()->userdetail->username]) }}">Profile Page</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('accountsetting.page', ['username'=> Auth::user()->userdetail->username]) }}">Account Settings</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('purchases.page',  ['username'=> auth()->user()->userdetail->username] ) }}">My Purchases</a>
        </li>
        <!-- /DROPDOWN ITEM -->
        @hasanyrole('seller|Super Admin')
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-statement.html">Sales Statement</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-withdrawals.html">Withdrawals</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('product.select') }}">Upload Item</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="{{ route('product.index') }}">Manage Items</a>
        </li>
        <!-- /DROPDOWN ITEM -->
        @endhasanyrole
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
