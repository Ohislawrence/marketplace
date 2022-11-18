<!-- MAIN MENU -->
<div class="main-menu-wrap">
    <div class="menu-bar">
        <nav>
            <ul class="main-menu">
                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('software.page') }}">Software</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('learning.page') }}">Courses & Learning</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('templates.page') }}">Templates</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('creative.page') }}">Creative Resources</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('tickets.page') }}">Tickets</a>
                </li>
                <!-- /MENU ITEM -->


            </ul>
        </nav>
        <form class="search-form">
            <input type="text" class="rounded" name="search" id="search_products" placeholder="Search products here...">
            <input type="image" src="{{ asset('assets/images/search-icon.png') }}" alt="search-icon">
        </form>
    </div>
</div>
<!-- /MAIN MENU -->
