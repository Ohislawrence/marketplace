@extends('layouts.app')

@section('tittletop', 'Select Products Type')

@section('header')
@endsection

@section('body')
<!-- DASHBOARD CONTENT -->
<div class="dashboard-content">
    <!-- HEADLINE -->
    <div class="headline simple primary">
        <h4>Select Product Type</h4>
    </div>
    <!-- /HEADLINE -->

    <!-- PACK BOXES -->
    <div class="pack-boxes">
        <!-- PACK BOX -->
        <div class="pack-box">
            <p class="text-header small">Software</p>
            <p class="credit">You can add SaaS products etc</p>
            <a href="{{ route('product.create', ['type'=>1]) }}" class="button dark-light">Add Software</a>
        </div>
        <!-- /PACK BOX -->

        <!-- PACK BOX -->
        <div class="pack-box">
            <p class="text-header small">Courses & Learning</p>
            <p class="credit">Sell Course access, PDF's</p>
            <a href="{{ route('product.create', ['type'=>3]) }}" class="button dark-light">Add Courses</a>
        </div>
        <!-- /PACK BOX -->

        <!-- PACK BOX -->
        <div class="pack-box">
            <p class="text-header small">Templates</p>
            <p class="credit primary">Add any kind of templates</p>
            <a href="{{ route('product.create', ['type'=>4]) }}" class="button dark-light">Add Template</a>
        </div>
        <!-- /PACK BOX -->

        <!-- PACK BOX -->
        <div class="pack-box">
            <p class="text-header small">Creative Resource</p>
            <p class="credit primary">Add fonts, photos etc</p>
            <a href="{{ route('product.create', ['type'=>5]) }}" class="button dark-light">Add Creatives</a>
        </div>
        <!-- /PACK BOX -->

        <!-- PACK BOX -->
        <div class="pack-box">
            <p class="text-header small">Tickets</p>
            <p class="credit primary">Have an event? add it!</p>
            <a href="{{ route('product.create', ['type'=>6]) }}" class="button dark-light">Add Tickets</a>
        </div>
        <!-- /PACK BOX -->
        <div class="clearfix"></div>
        @role('Super Admin')
        <!-- PACK BOX -->
        <div class="pack-box">
            <p class="text-header small">Affiliate</p>
            <p class="credit primary">Add link, market</p>
            <a href="{{ route('product.create', ['type'=>7]) }}" class="button dark-light">Add Affiliate</a>
        </div>
        <!-- /PACK BOX -->
        @endrole
    </div>
    <!-- /PACK BOXES -->

    <div class="clearfix"></div>
</div>

@endsection
