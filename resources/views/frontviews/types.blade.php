@extends('layouts.guest')

@section('tittletop', 'Shop ' .$Ptype->name)

@section('tittle', 'Shop ' .$Ptype->name)
@section('description', 'The marketplace for great deals on apps, PDFs, courses, template and more.')
@section('image', asset('assets/images/types' .$Ptype->icon))


@section('header')
<link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery.range.css') }}">
@php
    $min = $products->min('price');
    $max = $products->max('price');
@endphp
@endsection

@section('footer')
<!-- JRange -->
<script src="{{ asset('assets/js/vendor/jquery.range.min.js') }}"></script>
<!-- Shop -->
<script>
    (function($) {
	/*-----------
		RANGE
	-----------*/
	$('.price-range-slider').jRange({
	    from: {{ ($min) }},
	    to: {{ ($max) }},
	    step: 1,
	    format: '$%s',
	    width: 242,
	    showLabels: true,
	    showScale: false,
	    isRange : true,
	    theme: "theme-edragon"
	});
})(jQuery);

</script>
<script>
    function getIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
                        .filter(ch => ch.checked==true)
                        .map(ch => ch.value);
        return ids;
    }

    function filterResults () {
        let brandIds = getIds("alternativeto");

        let catagoryIds = getIds("idealfor");

        let href = 'products?';

        if(brandIds.length) {
            href += 'filter[alternativeto]=' + alternativetoIds;
        }

        if(catagoryIds.length) {
            href += '&filter[idealfor]=' + idealforIds;
        }

        document.location.href=href;
    }

    document.getElementById("filter").addEventListener("click", filterResults);
</script>
@endsection

@section('body')


<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>{{$Ptype->name}}</h2>
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
                <h4>{{ $products->total() }} Items Found</h4>
                <!-- VIEW SELECTORS -->
                <div class="view-selectors">
                    <a href="{{ route('type.page', ['types' => request('types'), 'productview' => 'grid']) }}" class="view-selector grid active"></a>
                    <a href="{{ route('type.page', ['types' => request('types'), 'productview' => 'list']) }}" class="view-selector list"></a>
                </div>
                <!-- /VIEW SELECTORS -->
                <form id="shop_search_form" name="shop_search_form" method="GET" action="{{ route('type.page', ['types' => request('types')]) }}">

                    <label for="price_filter" class="select-block">
                        <select name="price_filter" id="price_filter">
                            <option value="" >Newest</option>
                            <option value="desc" {{ request('price_filter') == 'desc' ? 'selected': '' }}>Price (High to Low)</option>
                            <option value="asc" {{ request('price_filter') == 'asc' ? 'selected': '' }}>Price (Low to High)</option>
                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>


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
            <div class="clearfix"></div>
            <!-- PAGER -->
            <div class="pager primary">
                {{ $products->links() }}
            </div>
            <!-- /PAGER -->
        </div>
        <!-- CONTENT -->

        <!-- SIDEBAR -->
        <div class="sidebar">
            <!-- DROPDOWN -->
            <ul class="dropdown hover-effect">
                @php
                    $pageproduct = \App\Models\Product::where('plantype_id', $Ptype->id)->where('is_approved', '1')->get();
                @endphp
                    @foreach ( $pageproduct->groupby('productcategory_id') as $product => $yy)
                     @foreach ($category->where('id', $product )  as $cate)
                            <li class="dropdown-item {{ request('category') == $cate->slug ? 'active': '' }}">

                                <a href="{{ route('type.page', ['types' => request('types'), 'category' => $cate->slug]) }}">{{ $cate->name}} ({{ $yy->count() }})</a>
                            </li>
                            @endforeach

                    @endforeach

            </ul>
            <!-- /DROPDOWN -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item">
                <h4>Alternative to</h4>
                <hr class="line-separator">

                    @foreach ( $pageproduct->groupby('alternative_to') as $alt => $altthis )
                        @foreach (\App\Models\Alternativeto::where('id', $alt)->get() as $altthis2)
                            <!-- CHECKBOX -->
                            <input type="checkbox" id="{{ $altthis2->slug }}" name="alternativeto[]" value="{{ $altthis2->id }}" form="shop_search_form" @if(request('alternativeto') != null) @if(in_array($altthis2->id, request('alternativeto')))  checked @endif @endif>
                            <label for="{{ $altthis2->slug }}">
                                <span class="checkbox primary primary"><span></span></span>
                                {{ $altthis2->name }}
                                <span class="quantity">{{ $altthis->count() }}</span>
                            </label>
                            <!-- /CHECKBOX -->
                        @endforeach
                    @endforeach



            </div>
            <!-- /SIDEBAR ITEM -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item">
                <h4>Ideal for</h4>
                <hr class="line-separator">

                    @foreach ( $pageproduct->groupby('ideal_for') as $ideal => $idealthis )

                        @foreach (\App\Models\Idealfor::where('id', $ideal)->get() as $idealthis2)
                            <!-- CHECKBOX -->
                            <input type="checkbox" id="{{ $idealthis2->slug }}" name="idealfor[]" value="{{ $idealthis2->id }}" form="shop_search_form" @if(request('ideafor') != null) @if(in_array($idealthis2->id, request('idealfor')))  checked @endif @endif>
                            <label for="{{ $idealthis2->slug }}">
                                <span class="checkbox primary primary"><span></span></span>
                                {{ $idealthis2->name }}
                                <span class="quantity">{{ $idealthis->count() }}</span>
                            </label>
                            <!-- /CHECKBOX -->
                        @endforeach
                    @endforeach
            </div>
            <!-- /SIDEBAR ITEM -->

             <!-- SIDEBAR ITEM -->
             <div class="sidebar-item">

                <h4>Plan Type</h4>
                <hr class="line-separator">

                @foreach ( $pageproduct->groupby('access') as $access => $accessthis )
                    @foreach (\App\Models\Access::where('id', $access)->get() as $accessthis2)
                    <!-- CHECKBOX -->
                        <input type="checkbox" id="{{ $accessthis2->slug }}" name="access[]" value="{{ $accessthis2->id }}" form="shop_search_form" @if(request('access') != null) @if(in_array($accessthis2->id, request('access')))  checked @endif @endif>
                        <label for="{{ $accessthis2->slug }}">
                            <span class="checkbox primary"><span></span></span>
                            {{ $accessthis2->name }}
                            <span class="quantity">{{ $accessthis->count() }}</span>
                        </label>
                <!-- /CHECKBOX -->
                    @endforeach
                @endforeach

            </div>
            <!-- /SIDEBAR ITEM -->

            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item range-feature">
                <h4>Price Range</h4>
                <hr class="line-separator spaced">
                @if (request('pricerange') == null)
                    <input type="hidden" class="price-range-slider" value="{{ $products->min('price') }},{{ $products->max('price') }}" name="pricerange" form="shop_search_form">
                @else
                    <input type="hidden" class="price-range-slider" value="{{ request('pricerange') }}" name="pricerange" form="shop_search_form">
                @endif
                <button type="submit" form="shop_search_form" class="button mid primary">Update your Search</button>

            </div>
            <!-- /SIDEBAR ITEM -->
        </div>
        <!-- /SIDEBAR -->
    </form>
    </div>
</div>
<!-- /SECTION -->


@include('frontviews.justnewsletter')
@endsection
