@extends('layouts.guest')

@section('tittletop', 'All Items')

@section('tittle', 'Get great deal on apps and more')
@section('description', 'A marketplace for great deals on apps, PDFs, courses, template and more.')
@section('image', 'Get great deal on apps and more')


@section('footer')
<!-- JRange -->
<script src="{{ asset('assets/js/vendor/jquery.range.min.js') }}"></script>
<!-- Shop -->
<script src="{{ asset('assets/js/shop.js') }}"></script>
@endsection

@section('body')
<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>All Items</h2>
    </div>
</div>
<!-- /SECTION HEADLINE -->

<!-- SECTION -->
<div class="section-wrap">
    <div class="section">
        <!-- CONTENT -->
        <div class="content">
            <!-- HEADLINE -->
            <div class="headline primary">
                <h4>{{ $products->count() }} Items Found</h4>
                <!-- VIEW SELECTORS -->
                <div class="view-selectors">
                    <a href="shop-gridview-v1.html" class="view-selector grid active"></a>
                    <a href="shop-listview-v1.html" class="view-selector list"></a>
                </div>
                <!-- /VIEW SELECTORS -->
                <form id="shop_filter_form" name="shop_filter_form">
                    <label for="price_filter" class="select-block">
                        <select name="price_filter" id="price_filter">
                            <option value="0">Price (High to Low)</option>
                            <option value="1">Price (Low to High)</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                    <label for="itemspp_filter" class="select-block">
                        <select name="itemspp_filter" id="itemspp_filter">
                            <option value="0">12 Items Per Page</option>
                            <option value="1">6 Items Per Page</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                </form>
                <div class="clearfix"></div>
            </div>
            <!-- /HEADLINE -->

            <!-- PRODUCT SHOWCASE -->
            <div class="product-showcase">
                <!-- PRODUCT LIST -->
                <div class="product-list grid column3-4-wrap">
                    @forelse ( $products as $product )
                    @include('frontviews.justproduct')
                    @empty

                    @endforelse
                </div>
            <!-- /PRODUCT SHOWCASE -->
            </div>

            <!-- PAGER -->
            <div class="pager primary">
                <div class="pager-item"><p>1</p></div>
                <div class="pager-item active"><p>2</p></div>
                <div class="pager-item"><p>3</p></div>
                <div class="pager-item"><p>...</p></div>
                <div class="pager-item"><p>17</p></div>
            </div>
            <!-- /PAGER -->
        </div>
        <!-- CONTENT -->

        <!-- SIDEBAR -->
        <div class="sidebar">
            <!-- DROPDOWN -->
            <ul class="dropdown hover-effect">
                <li class="dropdown-item">
                    <a href="#">Digital Graphics</a>
                </li>
                <li class="dropdown-item active">
                    <a href="#">Illustration</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Web Design</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Stock Photography</a>
                </li>
                <li class="dropdown-item">
                    <a href="#">Code and Plugins</a>
                </li>
            </ul>
            <!-- /DROPDOWN -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item">
                <h4>Filter Products</h4>
                <hr class="line-separator">
                <form id="shop_search_form" name="shop_search_form">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="filter1" name="filter1" checked>
                    <label for="filter1">
                        <span class="checkbox primary primary"><span></span></span>
                        Cartoon Characters
                        <span class="quantity">350</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="filter2" name="filter2" checked>
                    <label for="filter2">
                        <span class="checkbox primary"><span></span></span>
                        Flat Vector
                        <span class="quantity">68</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="filter3" name="filter3" checked>
                    <label for="filter3">
                        <span class="checkbox primary"><span></span></span>
                        People
                        <span class="quantity">350</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="filter4" name="filter4">
                    <label for="filter4">
                        <span class="checkbox primary"><span></span></span>
                        Animals
                        <span class="quantity">68</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="filter5" name="filter5">
                    <label for="filter5">
                        <span class="checkbox primary"><span></span></span>
                        Objects
                        <span class="quantity">350</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="filter6" name="filter6" checked>
                    <label for="filter6">
                        <span class="checkbox primary"><span></span></span>
                        Backgrounds
                        <span class="quantity">68</span>
                    </label>
                    <!-- /CHECKBOX -->
                </form>
            </div>
            <!-- /SIDEBAR ITEM -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item">
                <h4>File Types</h4>
                <hr class="line-separator">
                <!-- CHECKBOX -->
                <input type="checkbox" id="ft1" name="ft1" form="shop_search_form">
                <label for="ft1">
                    <span class="checkbox primary"><span></span></span>
                    Photoshop PSD
                    <span class="quantity">72</span>
                </label>
                <!-- /CHECKBOX -->

                <!-- CHECKBOX -->
                <input type="checkbox" id="ft2" name="ft2" form="shop_search_form" checked>
                <label for="ft2">
                    <span class="checkbox primary"><span></span></span>
                    Illustrator AI
                    <span class="quantity">254</span>
                </label>
                <!-- /CHECKBOX -->

                <!-- CHECKBOX -->
                <input type="checkbox" id="ft3" name="ft3" form="shop_search_form" checked>
                <label for="ft3">
                    <span class="checkbox primary"><span></span></span>
                    EPS
                    <span class="quantity">138</span>
                </label>
                <!-- /CHECKBOX -->

                <!-- CHECKBOX -->
                <input type="checkbox" id="ft4" name="ft4" form="shop_search_form" checked>
                <label for="ft4">
                    <span class="checkbox primary"><span></span></span>
                    SVG
                    <span class="quantity">96</span>
                </label>
                <!-- /CHECKBOX -->

                <!-- CHECKBOX -->
                <input type="checkbox" id="ft5" name="ft5" form="shop_search_form">
                <label for="ft5">
                    <span class="checkbox primary"><span></span></span>
                    InDesign INDD
                    <span class="quantity">102</span>
                </label>
                <!-- /CHECKBOX -->
            </div>
            <!-- /SIDEBAR ITEM -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item range-feature">
                <h4>Price Range</h4>
                <hr class="line-separator spaced">
                <input type="hidden" class="price-range-slider" value="500" form="shop_search_form">
                <button form="shop_search_form" class="button mid primary">Update your Search</button>
            </div>
            <!-- /SIDEBAR ITEM -->
        </div>
        <!-- /SIDEBAR -->
    </div>
</div>
<!-- /SECTION -->

@endsection
