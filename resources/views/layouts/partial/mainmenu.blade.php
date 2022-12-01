<!-- MAIN MENU -->
<div class="main-menu-wrap">
    <div class="menu-bar">
        <nav>
            <ul class="main-menu">
                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('type.page', ['types' => 'software']) }}">Software</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('type.page', ['types' => 'courses-and-learning']) }}">Courses & Learning</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('type.page', ['types' => 'templates']) }}">Templates</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('type.page', ['types' => 'creative-resources']) }}">Creative Resources</a>
                </li>
                <!-- /MENU ITEM -->

                <!-- MENU ITEM -->
                <li class="menu-item">
                    <a href="{{ route('type.page', ['types' => 'tickets']) }}">Tickets</a>
                </li>
                <!-- /MENU ITEM -->


            </ul>
        </nav>
        <form class="search-form" method="POST" action="{{ route('search.page')}}">
            @csrf
            <input type="text" class="rounded" name="search" id="search_products" placeholder="Search items here...">
            
        </form>
    </div>
</div>
<!-- /MAIN MENU -->
