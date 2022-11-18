@extends('layouts.app')

@section('tittletop', 'Add Products')

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
    <div class="headline simple primary">
        <h4>Add Product</h4>
    </div>
    <!-- /HEADLINE -->
    @if (count($errors) > 0)
      <div class="alert error">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

    <!-- FORM BOX ITEMS -->
    <div class="form-box-items wrap-3-1 left">
        <!-- FORM BOX ITEM -->
        <div class="form-box-item full">
            <h4>Product Specifications</h4>
            <hr class="line-separator">
            <form id="upload_form" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf


                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="category" class="rl-label required">Select Product Category</label>
                    <label for="category" class="select-block">
                        <select name="category" id="category">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                    <label for="item_name" class="rl-label required">Name of the Item (Max 40 Characters)</label>
                    <input type="text" id="name" name="name" placeholder="Enter them item name here...">
                    @error('name')
                        <span class="error small danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="item_description" class="rl-label required">Short Description (Summarize what your product do in bullet points)</label>
                    <textarea id="keypoints" class="ckeditor form-control" name="keypoints" rows="3"></textarea>
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="item_description" class="rl-label required">Item Description</label>
                    <textarea id="item_description" class="ckeditor" name="desc"></textarea>
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="item_name" class="rl-label required">Featured Image</label>
                    <input type="file" id="name2" name="featuredimage">
                </div>
                <!-- /INPUT CONTAINER -->

                <!--detailimages -->

                <div class="input-group control-group increment" >
                    <input type="file" name="images[]" multiple>
                    <div class="input-group-btn">
                      <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                  </div>



                <!-- /detailimages-->


                <!-- INPUT CONTAINER -->
                <div class="input-container half">
                    <label for="files_included" class="rl-label required">Price</label>
                    <input type="number" id="price" name="price" placeholder="Original Cost">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container half">
                    <label for="item_dimensions" class="rl-label required">Discount</label>
                    <input type="number" id="discount" name="discount" placeholder="Discount in percentage...">
                </div>
                <!-- /INPUT CONTAINER -->



                <div class="clearfix"></div>


                <!-- INPUT CONTAINER -->
                <div class="input-container half">
                    <label for="sv" class="rl-label required">Timed Offer (Before going back to original Price)</label>
                    <label for="sv" class="select-block">
                        <select name="timedoffer" id="sv">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
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
                <div class="input-container half">
                    <label for="vr" class="rl-label required">Offers Ends?</label>
                    <input type="date" class="form-control" id="discount2" name="offerends" >
                    </label>
                </div>
                <!-- /INPUT CONTAINER -->

                <div class="clearfix"></div>

                <!-- INPUT CONTAINER -->
                 <div class="input-container half">
                    <label for="files_included" class="rl-label required">Qty (zero for limitless)</label>
                    <input type="number" id="qty" name="qty" placeholder="How much do you want to sell before stopping?t">
                </div>
                <!-- /INPUT CONTAINER -->

                @if ($type == 7)
                    <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="link" class="rl-label required">Link (For affiliate Products)</label>
                    <input type="text" id="name2" name="url" placeholder="Enter them item name here...">
                </div>
                <!-- /INPUT CONTAINER -->
                @else
                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="link" class="rl-label required">Link (For code sales)</label>
                    <input type="text" id="name2" name="url" placeholder="Enter them item name here...">
                </div>
                <!-- /INPUT CONTAINER -->
                @endif




                <hr class="line-separator">
                <button type="submit" class="button big dark">Submit Item <span class="primary">for Review</span></button>
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
