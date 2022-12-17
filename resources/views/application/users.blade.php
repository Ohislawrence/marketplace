@extends('layouts.app')

@section('tittletop', 'All Users')

@section('header')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@endsection


@section('footer')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('ckeditor.product', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>


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
        <h4>All Users</h4>
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
            <p class="text-header big">{{ App\Models\User::count(); }}</p>
            <div class="sale-data-item-info">
                <p class="text-header">Total Users</p>
                <p>In all Time</p>
            </div>
        </div>
        <!-- /SALE DATA ITEM-->

        <!-- SALE DATA ITEM -->
        <div class="sale-data-item">
            <span class="sl-icon icon-present"></span>
            <p class="text-header big">333</p>
            <div class="sale-data-item-info">
                <p class="text-header">Total Sellers</p>
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
        <!-- TRANSACTION LIST HEADER -->
        <div class="transaction-list-header">
            <div class="transaction-list-header-date">
                <p class="text-header small">Name</p>
            </div>
            <div class="transaction-list-header-author">
                <p class="text-header small">Username</p>
            </div>
            <div class="transaction-list-header-item">
                <p class="text-header small">Role</p>
            </div>
            <div class="transaction-list-header-detail">
                <p class="text-header small">Product(s)</p>
            </div>
            <div class="transaction-list-header-code">
                <p class="text-header small">Sale to date</p>
            </div>
            <div class="transaction-list-header-price">
                <p class="text-header small">Sale this month</p>
            </div>
            <div class="transaction-list-header-cut">
                <p class="text-header small">Earnings</p>
            </div>
            <div class="transaction-list-header-earnings">
                <p class="text-header small">Withdrawals</p>
            </div>
            <div class="transaction-list-header-icon"></div>
        </div>
        <!-- /TRANSACTION LIST HEADER -->

        <!-- TRANSACTION LIST ITEM -->
        @forelse ($users as $user)
        <div class="transaction-list-item">
            <div class="transaction-list-item-date">
                <p>{{$user->name}}</p>
            </div>
            <div class="transaction-list-item-author">
                <p class="text-header"><a href="">{{$user->userdetail->username}}</a></p>
            </div>
            <div class="transaction-list-item-item">
                <p class="category primary"><a href="">{{ $user->getRoleNames()->first()}}</a></p>
            </div>
            <div class="transaction-list-item-detail">
                <p>{{$user->product->count()}}</p>
            </div>
            <div class="transaction-list-item-code">
                <p><span class="light">ED3546</span></p>
            </div>
            <div class="transaction-list-item-price">
                <p>$ 12</p>
            </div>
            <div class="transaction-list-item-cut">
                <p><span class="light">50%</span></p>
            </div>
            <div class="transaction-list-item-earnings">
                <p class="text-header">$ 6</p>
            </div>
            <div class="transaction-list-item-icon">
                <div class="transaction-icon primary">
                    <!-- SVG PLUS -->
                    <svg class="svg-plus">
                        <use xlink:href="#svg-plus"></use>
                    </svg>
                    <!-- /SVG PLUS -->
                </div>
            </div>
        </div>
            
        @empty
            
        @endforelse
        
        <!-- /TRANSACTION LIST ITEM -->

        

        

        <!-- PAGER -->
        <div class="pager-wrap">
            <div class="pager primary">
                {{ $users->links()}}
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