@extends('layouts.guest')

@section('body')
<div class="section-wrap">
    <br/>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="form-popup">
            <!-- FORM POPUP CONTENT -->
                    <div class="form-popup-content">
                        <h4 class="popup-title">Login to your Account</h4>
                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->
                        <form id="register-form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <label for="email_address2" class="rl-label required">Email Address</label>
                            <input type="email" id="email_address2" name="email" placeholder="Enter your email address here..." :value="old('email')" required>
                            <label for="username2" class="rl-label">Full name</label>
                            <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name...">

                            <label for="username" class="rl-label">Username</label>
                            <input type="text" id="username" name="username" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your the username your will use..">
                            <label for="password2" class="rl-label required">Password</label>
                            <input type="password" id="password2" name="password" required autocomplete="new-password" placeholder="Enter your password here...">
                            <label for="repeat_password2" class="rl-label required">Repeat Password</label>
                            <input type="password" id="repeat_password2" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password here...">
                            <button type="submit" class="button mid dark">Sign Up <span class="primary">Now!</span></button>
                        </form>
                        <!-- LINE SEPARATOR -->

                    <br/>
                    <p>Already have an account? <a href="{{ route('login') }}" class="primary">Click here to Login here!</a></p>
					<hr class="line-separator double">
					<!-- /LINE SEPARATOR -->
					<a href="#" class="button mid fb half">Sign up with Facebook</a>
					<a href="#" class="button mid twt half">Sign up with Twitter</a>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->
            <br/>
</div>

@endsection



