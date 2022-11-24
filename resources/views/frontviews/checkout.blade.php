@extends('layouts.guest')

@section('tittletop', 'Get great deal on apps and more')
@section('tittle', 'Creative Resources')
@section('description', 'Get great deal on apps and more')
@section('image', 'Get great deal on apps and more')



@section('body')
<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>Checkout</h2>
        <p>Home<span class="separator">/</span><span class="current-section">Checkout</span></p>
    </div>
</div>
<!-- /SECTION HEADLINE -->

<!-- SECTION -->
<div class="section-wrap">
    <div class="section">
        <!-- FORM BOX ITEMS -->
        <div class="form-box-items">
            <!-- FORM BOX ITEM -->
            @auth


            <div class="form-box-item">
                <h4>Account verification</h4>
                <hr class="line-separator">
                <form id="checkout-form">

                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <p>Your email, {{ auth()->user()->email }}, will be used this order.</p>
                    </div>
                    <!-- /INPUT CONTAINER -->

                </form>
            </div>
            <!-- /FORM BOX ITEM -->
            @else
            <div class="form-box-item">
                <h4>Create an account</h4>
                <hr class="line-separator">
                <form id="checkout-form">
                    <!-- INPUT CONTAINER -->
                    <div class="input-container top-right">
                        <!-- CHECKBOX -->
                        <input type="checkbox" id="copy_info1" name="copy_info1" checked>
                        <label for="copy_info1" class="label-check">
                            <span class="checkbox primary"><span></span></span>
                            Copy info from your profile
                        </label>
                        <!-- /CHECKBOX -->
                    </div>
                    <!-- /INPUT CONTAINER -->



                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <label for="email_address" class="rl-label required">Email Address</label>
                        <input type="email" id="email_address" name="email" placeholder="Enter your email address here...">
                    </div>
                    <!-- /INPUT CONTAINER -->

                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <label for="ename" class="rl-label required">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name here...">
                    </div>
                    <!-- /INPUT CONTAINER -->

                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <label for="username" class="rl-label required">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your user name...">
                    </div>
                    <!-- /INPUT CONTAINER -->

                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <label for="username" class="rl-label required">Password</label>
                        <input type="password" id="username" name="password" placeholder="Enter your user name...">
                    </div>
                    <!-- /INPUT CONTAINER -->

                    <!-- INPUT CONTAINER -->
                    <div class="input-container">
                        <label for="username" class="rl-label required">Comfirm Password</label>
                        <input type="password" id="username" name="password_confirmation" placeholder="Enter your user name...">
                    </div>
                    <!-- /INPUT CONTAINER -->

                    <p>Already have an account? <a href="{{ route('login') }}" class="primary">Click here to Login here!</a></p>
					<hr class="line-separator double">
					<!-- /LINE SEPARATOR -->
                    <div class="form-popup">
                        <div class="form-popup-content">
					<a href="#" class="button mid fb half">Sign up with Facebook</a>
					<a href="#" class="button mid twt half">Sign up with Twitter</a>
                    </div>
                    </div>

                    <button form="checkout-form" class="button big dark">Create your account <span class="primary">Now!</span></button>

                </form>
            </div>
            <!-- /FORM BOX ITEM -->
            @endauth

            <!-- FORM BOX ITEM -->
            <div class="form-box-item not-padded">
                <h4>Cart Overview</h4>
                <hr class="line-separator">

                @if (Cart::session(Auth::user()->id)->getTotalQuantity() != 0)

                @foreach (\Cart::getContent() as $item)
                <!-- CART OVERVIEW ITEM -->
                <div class="cart-overview-item">
                    <p class="text-header small">{{ $item->name }} <span class="primary">x{{ $item->quantity }}</span></p>
                    <p class="price"><span>$</span>{{ $item->price }}</p>
                    <p class="category primary">{{ $item->attributes->type }}</p>
                </div>
                <!-- /CART OVERVIEW ITEM -->
                @endforeach


                <!-- CART TOTAL -->
                <div class="cart-total small">
                    <p class="price"><span>$</span>{{ Cart::getTotal() }}</p>
                    <p class="text-header subtotal">Cart Total</p>
                </div>
                <!-- /CART TOTAL -->
                @else
                <div class="cart-overview-item">
                    <p class="text-header small"><span class="primary">Cart is empty ! </span></p>
                </div>
                @endif
            </div>
            <!-- /FORM BOX ITEM -->

            <!-- FORM BOX ITEM -->
            <div class="form-box-item">
                <h4>Payment &amp; Confirmation</h4>
                <hr class="line-separator">
                <label class="rl-label">Choose your Payment Method</label>
                <!-- RADIO -->
                <input type="radio" form="checkout-form" id="credit_card" name="payment_method" value="cc">
                <label for="credit_card" class="linked-radio">
                    <span class="radio primary"><span></span></span>
                    Credit Card
                </label>
                <!-- /RADIO -->
                <p class="pm-text credit_card">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <!-- RADIO -->
                <input type="radio" form="checkout-form" id="ed_credits" name="payment_method" value="edc" checked>
                <label for="ed_credits" class="linked-radio">
                    <span class="radio primary"><span></span></span>
                    Emerald Dragon Credits
                </label>
                <!-- /RADIO -->
                <p class="pm-text ed_credits" style="display: block;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <!-- RADIO -->
                <input type="radio" form="checkout-form" id="paypal" name="payment_method" value="pp">
                <label for="paypal" class="linked-radio">
                    <span class="radio primary"><span></span></span>
                    Paypal
                </label>
                <!-- /RADIO -->
                <p class="pm-text paypal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <hr class="line-separator top">
                <a href="{{ route('paypal.payment') }}">
                <button class="button big dark">Confirm Order <span class="primary">Now!</span></button>
                </a>
            <span class="primary">By clicking the "Place Order" button, you confirm that you have read, understand, and accept our Terms and Conditions, Return Policy, and Privacy Policy. </span>
            </div>
            <!-- /FORM BOX ITEM -->
        </div>
        <!-- /FORM BOX ITEMS -->
    </div>
</div>
<!-- /SECTION -->

@endsection
