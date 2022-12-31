@extends('layouts.app')

@section('tittletop', 'All Products')

@section('header')


@endsection


@section('footer')




<!-- Dashboard UploadItem -->
<script src="{{ asset('assets/js/dashboard-uploaditem.js') }}"></script>
<!-- XM Pie Chart -->
<script src="{{ asset('assets/js/vendor/jquery.xmpiechart.min.js') }}"></script>
<!-- XM LineFill -->
<script src="{{ asset('assets/js/vendor/jquery.xmlinefill.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap-datepicker.min.js') }}"></script>


@endsection

@section('body')
<!-- DASHBOARD CONTENT -->
<div class="dashboard-content">
    <!-- HEADLINE -->
    <div class="headline statement primary">
        <h4>All Products</h4>
        <a href="#" class="button primary">Download File</a>
        <button form="statement_filter_form" class="button dark-light">Refine Search</button>
        <form id="statement_filter_form" name="statement_filter_form" class="statement-form">
            <!-- DATEPICKER -->
            <div class="datepicker-wrap">
                <input type="text" id="date_from" name="date_from" class="datepicker" value="02/22/2016">
                <span class="icon-calendar"></span>
            </div>
            <!-- /DATEPICKER -->
            <label>to:</label>
            <!-- DATEPICKER -->
            <div class="datepicker-wrap">
                <input type="text" id="date_to" name="date_to" class="datepicker" value="02/22/2017">
                <span class="icon-calendar"></span>
            </div>
            <!-- /DATEPICKER -->
            <label for="ss_filter" class="select-block">
                <select name="ss_filter" id="ss_filter">
                    <option value="0">Sales and Purchases</option>
                    <option value="1">Sales</option>
                    <option value="2">Purchases</option>
                </select>
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
            </label>
        </form>
    </div>
    <!-- /HEADLINE -->

    <!-- SALE DATA -->
    <div class="sale-data">
        <!-- SALE DATA ITEM -->
        <div class="sale-data-item">
            <span class="sl-icon icon-present"></span>
            <p class="text-header big">{{ $products->total(); }}</p>
            <div class="sale-data-item-info">
                <p class="text-header">Total Products</p>
                <p>In all Time</p>
            </div>
        </div>
        <!-- /SALE DATA ITEM-->

        <!-- SALE DATA ITEM -->
        <div class="sale-data-item">
            <span class="sl-icon icon-present"></span>
            <p class="text-header big">{{$products->where('is_approved', '!=', 1)->count()}}</p>
            <div class="sale-data-item-info">
                <p class="text-header">Pending Approval</p>
                <p>In all Time</p>
            </div>
        </div>
        <!-- /SALE DATA ITEM-->

        <!-- SALE DATA ITEM -->
        <div class="sale-data-item">
            <span class="sl-icon icon-tag"></span>
            <p class="price big"><span>$</span>12.450</p>
            <div class="sale-data-item-info">
                <p class="text-header">Total Revenue</p>
                <p>In all Time</p>
            </div>
        </div>
        <!-- /SALE DATA ITEM-->

        <!-- SALE DATA ITEM -->
        <div class="sale-data-item">
            <span class="sl-icon icon-wallet"></span>
            <p class="price big"><span>$</span>10.630</p>
            <div class="sale-data-item-info">
                <p class="text-header">Total Earnings</p>
                <p>In all Time</p>
            </div>
        </div>
        <!-- /SALE DATA ITEM-->
    </div>
    <!-- /SALE DATA -->

    <!-- TRANSACTION LIST -->
    <div class="transaction-list">
        <table class="table" id="customers">
            <thead>
                <tr>

                    <th>Product Name</th>
                    <th>Cost ($)</th>
                    <th>Marchart</th>
                    <th>Product ID</th>
                    <th>Earnings</th>
                    <th>Views</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        <!-- TRANSACTION LIST ITEM -->
        @forelse ($products as $product)
                <tr>

                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->user->userdetail->username}}</td>
                    <td>{{$product->uniqueId}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->views}}</td>
                    <td></td>
                </tr>
        @empty

        @endforelse
        </tbody>
        </table>
        <!-- /TRANSACTION LIST ITEM -->

        <!-- PAGER -->
        <div class="pager-wrap">
            <div class="pager primary">
                {{ $products->links() }}
            </div>
        </div>
        <!-- /PAGER -->
    </div>
    <!-- /TRANSACTION LIST -->
</div>
<!-- DASHBOARD CONTENT -->
</div>
<!-- /DASHBOARD BODY -->

<div class="shadow-film closed"></div>
@endsection
