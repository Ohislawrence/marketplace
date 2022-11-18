@extends('layouts.app')

@section('tittletop', 'New Category')

@section('body')
<!-- DASHBOARD CONTENT -->
<div class="dashboard-content">
    <!-- HEADLINE -->
    <div class="headline simple primary">
        <h4>Upload Item</h4>
    </div>
    <!-- /HEADLINE -->

    <!-- FORM BOX ITEMS -->
    <div class="form-box-items wrap-3-1 left">
        <!-- FORM BOX ITEM -->
        <div class="form-box-item full">
            <h4>Item Specifications</h4>
            <hr class="line-separator">
            <form id="upload_form" method="POST" action="{{ route('product-category.store') }}">
                @csrf
                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="category" class="rl-label required">Select Product Type</label>
                    <label for="category" class="select-block">
                        <select name="type" id="category">
                            @foreach ($types as $type )
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach

                        </select>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </label>
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="item_name" class="rl-label required">Category (Max 40 Characters)</label>
                    <input type="text" id="item_name" name="name" placeholder="Enter them item name here...">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="item_description" class="rl-label required">Item Description</label>
                    <textarea id="item_description" name="desc" placeholder="Enter them item description here..."></textarea>
                </div>
                <!-- /INPUT CONTAINER -->


                <hr class="line-separator">
                <button type="submit" class="button big dark">Create <span class="primary">Category</span></button>
            </form>
        </div>
        <!-- /FORM BOX ITEM -->
    </div>
    <!-- /FORM BOX ITEMS -->

    <!-- FORM BOX ITEMS -->
    <div class="form-box-items wrap-1-3 right">
        <!-- FORM BOX ITEM -->
        <div class="form-box-item full">
            <h4>Upload Queue</h4>
            <hr class="line-separator">
            <!-- PG BAR LIST -->
            <div class="pg-bar-list">
                <!-- PG BAR LIST ITEM -->
                <div class="pg-bar-list-item">
                    <div class="pg-bar-list-item-info">
                        <p class="text-header">Professional Business Card</p>
                        <p class="text-header">86%</p>
                        <p class="timestamp">4 days ago</p>
                    </div>
                    <!-- BADGE PROGRESS -->
                    <div class="pg1"></div>
                    <!-- /BADGE PROGRESS -->
                </div>
                <!-- /PG BAR LIST ITEM -->

                <!-- PG BAR LIST ITEM -->
                <div class="pg-bar-list-item">
                    <div class="pg-bar-list-item-info">
                        <p class="text-header">Professional Business Card</p>
                        <p class="text-header">92%</p>
                        <p class="timestamp">12 days ago</p>
                    </div>
                    <!-- BADGE PROGRESS -->
                    <div class="pg2"></div>
                    <!-- /BADGE PROGRESS -->
                </div>
                <!-- /PG BAR LIST ITEM -->
            </div>
            <!-- /PG BAR LIST -->
        </div>
        <!-- /FORM BOX ITEM -->

        <!-- FORM BOX ITEM -->
        <div class="form-box-item full">
            <h4>Upload Guidelines</h4>
            <hr class="line-separator">
            <!-- PLAIN TEXT BOX -->
            <div class="plain-text-box">
                <!-- PLAIN TEXT BOX ITEM -->
                <div class="plain-text-box-item">
                    <p class="text-header">File Upload:</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <!-- /PLAIN TEXT BOX ITEM -->

                <!-- PLAIN TEXT BOX ITEM -->
                <div class="plain-text-box-item">
                    <p class="text-header">Photos and Images:</p>
                    <p>Lorem ipsum dolor sit amet.<br>Consectetur adipisicing elit, sed do.</p>
                    <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- /PLAIN TEXT BOX ITEM -->

                <!-- PLAIN TEXT BOX ITEM -->
                <div class="plain-text-box-item">
                    <p class="text-header">Guide with Links:</p>
                    <p><a href="#" class="primary">Click here for the link.</a></p>
                </div>
                <!-- /PLAIN TEXT BOX ITEM -->
            </div>
            <!-- /PLAIN TEXT BOX -->
        </div>
        <!-- /FORM BOX ITEM -->
    </div>
    <!-- /FORM BOX ITEMS -->

    <div class="clearfix"></div>
</div>
<!-- DASHBOARD CONTENT -->
</div>
<!-- /DASHBOARD BODY -->

<div class="shadow-film closed"></div>

@endsection
