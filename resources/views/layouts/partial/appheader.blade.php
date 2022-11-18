<!-- SIDE MENU -->
<div id="dashboard-options-menu" class="side-menu dashboard left closed">
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
                    <img src="{{ asset('assets/images/avatars/avatar_01.jpg') }}" alt="avatar">
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
    <ul class="dropdown dark hover-effect interactive">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item active">
            <a href="{{ route('dashboard') }}">
                <span class="sl-icon icon-settings"></span>
                Dashboard
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-notifications.html">
                <span class="sl-icon icon-star"></span>
                Notifications
            </a>
            <!-- PIN -->
            <span class="pin soft-edged big primary">49</span>
            <!-- /PIN -->
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item interactive">
            <a href="#">
                <span class="sl-icon icon-envelope"></span>
                Products
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
            </a>

            <!-- INNER DROPDOWN -->
            <ul class="inner-dropdown">
                <!-- INNER DROPDOWN ITEM -->
                <li class="inner-dropdown-item">
                    <a href="{{ route('product.index') }}">All Products</a>
                </li>
                <!-- /INNER DROPDOWN ITEM -->

                <!-- INNER DROPDOWN ITEM -->
                <li class="inner-dropdown-item">
                    <a href="{{ route('product.select') }}">Add Product</a>
                </li>
                <!-- /INNER DROPDOWN ITEM -->

                <!-- INNER DROPDOWN ITEM -->
                <li class="inner-dropdown-item">
                    <a href="{{ route('product-category.index') }}">All Categories</a>
                </li>
                <!-- /INNER DROPDOWN ITEM -->

                <!-- INNER DROPDOWN ITEM -->
                <li class="inner-dropdown-item">
                    <a href="{{ route('product-category.create') }}">Add Category</a>
                </li>
                <!-- /INNER DROPDOWN ITEM -->
            </ul>
            <!-- INNER DROPDOWN -->




        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-purchases.html">
                <span class="sl-icon icon-tag"></span>
                Your Purchases
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-buycredits.html">
                <span class="sl-icon icon-credit-card"></span>
                Buy Credits
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">Info &amp; Statistics</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-statement.html">
                <span class="sl-icon icon-layers"></span>
                Sales Statement
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-statistics.html">
                <span class="sl-icon icon-chart"></span>
                Statistics
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

     <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">Author Tools</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-uploaditem.html">
                <span class="sl-icon icon-arrow-up-circle"></span>
                Upload Item
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-manageitems.html">
                <span class="sl-icon icon-folder-alt"></span>
                Manage Items
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-withdrawals.html">
                <span class="sl-icon icon-wallet"></span>
                Withdrawals
            </a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="button medium secondary">
                        Logout
                    </button>
                </form>
</div>
<!-- /SIDE MENU -->

<!-- DASHBOARD BODY -->
<div class="dashboard-body">
    <!-- DASHBOARD HEADER -->
    <div class="dashboard-header retracted">
        <!-- DB CLOSE BUTTON -->
        <a href="index-2.html" class="db-close-button">
           <img src="{{ asset('assets/images/dashboard/back-icon.png') }}" alt="back-icon">
        </a>
        <!-- DB CLOSE BUTTON -->

        <!-- DB OPTIONS BUTTON -->
        <div class="db-options-button">
           <img src="{{ asset('assets/images/dashboard/db-list-right.png') }}" alt="db-list-right">
           <img src="{{ asset('assets/images/dashboard/close-icon.png') }}" alt="close-icon">
        </div>
        <!-- DB OPTIONS BUTTON -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item title">
            <!-- DB SIDE MENU HANDLER -->
             <div class="db-side-menu-handler">
                <img src="{{ asset('assets/images/dashboard/db-list-left.png') }}" alt="db-list-left">
            </div>
            <!-- /DB SIDE MENU HANDLER -->
            <h6>Your Dashboard</h6>
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item form">
            <form class="dashboard-search">
                <input type="text" name="search" id="search_dashboard" placeholder="Search on dashboard...">
                <input type="image" src="{{ asset('assets/images/dashboard/search-icon.png') }}" alt="search-icon">
            </form>
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item stats">
            <!-- STATS META -->
            <div class="stats-meta">
                <div class="pie-chart pie-chart1">
                    <!-- SVG PLUS -->
                    <svg class="svg-plus primary">
                        <use xlink:href="#svg-plus"></use>
                    </svg>
                    <!-- /SVG PLUS -->
                </div>
                <h6>64.579</h6>
                <p>New Original Visits</p>
            </div>
            <!-- /STATS META -->
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item stats">
            <!-- STATS META -->
            <div class="stats-meta">
                <div class="pie-chart pie-chart2">
                    <!-- SVG PLUS -->
                    <svg class="svg-minus tertiary">
                        <use xlink:href="#svg-minus"></use>
                    </svg>
                    <!-- /SVG PLUS -->
                </div>
                <h6>20.8</h6>
                <p>Less Sales Than Last Month</p>
            </div>
            <!-- /STATS META -->
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item stats">
            <!-- STATS META -->
            <div class="stats-meta">
                <div class="pie-chart pie-chart3">
                    <!-- SVG PLUS -->
                    <svg class="svg-plus primary">
                        <use xlink:href="#svg-plus"></use>
                    </svg>
                    <!-- /SVG PLUS -->
                </div>
                <h6>322k</h6>
                <p>Total Visits This Month</p>
            </div>
            <!-- /STATS META -->
        </div>
        <!-- /DASHBOARD HEADER ITEM -->

        <!-- DASHBOARD HEADER ITEM -->
        <div class="dashboard-header-item back-button">
            <a href="index-2.html" class="button mid dark-light">Back to Homepage</a>
        </div>
        <!-- /DASHBOARD HEADER ITEM -->
    </div>
    <!-- DASHBOARD HEADER -->
