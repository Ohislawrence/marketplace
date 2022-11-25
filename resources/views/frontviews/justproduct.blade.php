<!-- PRODUCT ITEM -->
<div class="product-item column">
    <!-- PRODUCT PREVIEW ACTIONS -->
    <div class="product-preview-actions">
        <!-- PRODUCT PREVIEW IMAGE -->
        <figure class="product-preview-image">
            <img src="{{ asset('products/featuredimage/' .$product->featureimage) }}" alt="product-image">
        </figure>
        <!-- /PRODUCT PREVIEW IMAGE -->
        @php
        $productprice0 = $product->price * ($product->discount/100);
        $productprice = $product->price - $productprice0;
        @endphp
        <!-- PREVIEW ACTIONS -->
        <div class="preview-actions">
            <!-- PREVIEW ACTION -->
            <div class="preview-action">
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $productprice }}" name="price">
                    <input type="hidden" value="{{ $product->slug }}" name="slug">
                    <input type="hidden" value="{{ $product->type->name }}" name="type">
                    <input type="hidden" value="{{ $product->featureimage }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                <button type="submit">
                    <div class="circle tiny primary">
                        <span class="icon-tag"></span>
                    </div>
                </button>
                </form>
                    <p>Add to Cart</p>
            </div>
            <!-- /PREVIEW ACTION -->


        </div>
        <!-- /PREVIEW ACTIONS -->
    </div>
    <!-- /PRODUCT PREVIEW ACTIONS -->

    <!-- PRODUCT INFO -->
    <div class="product-info">
        <a href="{{ route('singleproduct.page', ['productslug' => $product->slug ]) }}">
            <p class="text-header">{{ $product->name }}</p>
        </a>
        <p class="product-description">{!! Str::limit($product->desc, 30) !!}</p>
        <a href="shop-gridview-v1.html">
            <p class="category primary">{{$product->type->name}}</p>
        </a>
        <p class="price">${{$productprice}} </p><p class="price primary"><span><del> ${{ $product->price }}</del></span></p>
    </div>
    <!-- /PRODUCT INFO -->
    <hr class="line-separator">

    <!-- USER RATING -->
    <div class="user-rating">
        <a href="author-profile.html">
            <figure class="user-avatar small">
                <img src="{{ asset('assets/images/avatars/avatar_01.jpg') }}" alt="user-avatar">
            </figure>
        </a>
        <a href="author-profile.html">
            <p class="text-header tiny">{{ $product->user->name }}</p>
        </a>
        <ul class="rating tooltip" title="Author's Reputation">
            <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item empty">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
        </ul>
    </div>
    <!-- /USER RATING -->
</div>
<!-- /PRODUCT ITEM -->
