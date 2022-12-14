@extends('layouts.guest')

@section('tittletop', 'Your Shopping Cart')
@section('tittle', 'Your Shopping Cart')
@section('description', 'Get great deal on apps and more')
@section('image', asset('assets/images/acarty-og-image.png'))



@section('body')
<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>Shopping Cart</h2>
        <p>Home<span class="separator">/</span><span class="current-section">Shopping Cart</span></p>
    </div>
</div>
<!-- /SECTION HEADLINE -->

<!-- SECTION -->
<div class="section-wrap">
    <div class="section">
        <!-- SIDEBAR -->
        <div class="sidebar left">
            <!-- SIDEBAR ITEM -->
            <div class="sidebar-item">
                <h4>Redeem Code</h4>
                <hr class="line-separator">
                <form id="coupon-code-form">
                    <input type="text" name="coupon_code" placeholder="Enter your coupon code...">
                    <button class="button mid dark-light">Apply Coupon Code</button>
                </form>
            </div>
        </div>
            <!-- /SIDEBAR ITEM -->


            @if (Cart::getTotalQuantity() != 0)
            <!-- CONTENT -->
        <div class="content right">
            <!-- CART -->
            <div class="cart">
                <!-- CART HEADER -->
                <div class="cart-header">
                    <div class="cart-header-product">
                        <p class="text-header small">Product Details</p>
                    </div>
                    <div class="cart-header-category">
                        <p class="text-header small">Category</p>
                    </div>
                    <div class="cart-header-price">
                        <p class="text-header small">Price</p>
                    </div>
                    <div class="cart-header-actions">
                        <p class="text-header small">Remove</p>
                    </div>
                </div>
                <!-- /CART HEADER -->
                @foreach ($cartItems as $item)
                <!-- CART ITEM -->
                <div class="cart-item">
                    <!-- CART ITEM PRODUCT -->
                    <div class="cart-item-product">
                        <!-- ITEM PREVIEW -->
                        <div class="item-preview">
                            <a href="{{ route('singleproduct.page', ['productslug' => $item->attributes->slug ]) }}">
                                <figure class="product-preview-image small liquid">
                                    <img src="{{ asset('products/featuredimage/' .$item->attributes->image) }}" alt="">
                                </figure>
                            </a>
                            <a href="{{ route('singleproduct.page', ['productslug' => $item->attributes->slug ]) }}"><p class="text-header small">{{ $item->name }}</p></a>
                            <form action="{{ route('cart.update',[$item->id]) }}" method="POST">
                                @method('PUT')
                                @csrf
                            <p class="description"><b>Qty:</b> <input type="number" name="quantity" value="{{ $item->quantity }}"
                                class="w-6 text-center bg-gray-300" /><button type="submit" class="button dark-light rmv">
                                    update
                                </button></p>
                            </form>
                        </div>
                        <!-- /ITEM PREVIEW -->
                    </div>
                    <!-- /CART ITEM PRODUCT -->

                    <!-- CART ITEM CATEGORY -->
                    <div class="cart-item-category">
                        <a href="{{ route('singleproduct.page', ['productslug' => $item->attributes->slug ]) }}" class="category primary">{{ $item->attributes->type }}</a>
                    </div>
                    <!-- /CART ITEM CATEGORY -->

                    <!-- CART ITEM PRICE -->
                    <div class="cart-item-price">
                        <p class="price"><span>$</span>{{ $item->price }}</p>
                    </div>
                    <!-- /CART ITEM PRICE -->

                    <!-- CART ITEM ACTIONS -->
                    <div class="cart-item-actions">
                        <form action="{{ route('cart.destroy', [$item->id ]) }}" method="POST">
                            @method('DELETE')
                            @csrf

                        <button type="submit" class="button dark-light rmv">
                            <!-- SVG PLUS -->

                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                        </button>
                        </form>
                    </div>
                    <!-- /CART ITEM ACTIONS -->
                </div>
                <!-- /CART ITEM -->
                @endforeach


                <!-- CART TOTAL -->
                <div class="cart-total">
                    <p class="price"><span>$</span>{{ Cart::getTotal() }}</p>
                    <p class="text-header subtotal">Cart Subtotal</p>
                </div>
                <!-- /CART TOTAL -->

                <!-- CART TOTAL -->
                <div class="cart-total">
                    <p class="price"><span>$</span>0</p>
                    <p class="text-header subtotal">Tax</p>
                </div>
                <!-- /CART TOTAL -->

                <!-- CART TOTAL -->
                <div class="cart-total">
                    <p class="price medium"><span>$</span>{{ Cart::getTotal() }}</p>
                    <p class="text-header total">Cart Total</p>
                </div>
                <!-- /CART TOTAL -->

                <!-- CART ACTIONS -->
                <div class="cart-actions">
                    <a href="{{ route('checkout.page') }}" class="button mid primary">Proceed to Checkout</a>
                    <a href="{{ route('items.page') }}" class="button mid dark-light spaced">Continue Browsing</a>
                </div>
                <!-- /CART ACTIONS -->
            </div>
            <!-- /CART -->

        <!-- CONTENT -->

            @else

            <div class="content right">
                <!-- CART -->
                <div class="cart">
                    <!-- CART HEADER -->
                    <div class="cart-header">
                        <div class="cart-header-product">
                        <p>Cart is empty !</p>
                        </div>
                    </div>
                </div>

            @endif

    </div>
</div>
<!-- /SECTION -->
@endsection
