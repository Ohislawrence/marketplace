@extends('layouts.guest')

@section('body')


    <br/>
<div class="section-wrap">
    <div class="form-popup">
<!-- FORM POPUP CONTENT -->
<div class="form-popup-content">
    <h4 class="popup-title">Restore your Password</h4>
    <!-- LINE SEPARATOR -->
    <hr class="line-separator short">
    <!-- /LINE SEPARATOR -->
    <p class="spaced">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    <form id="restore-pwd-form" method="POST" action="{{ route('password.email') }}">
        <label for="email_address" class="rl-label">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address..." :value="old('email')" required autofocus>

        <button type="submit" class="button mid dark no-space">Email Password  <span class="primary">Reset Link</span></button>
    </form>
</div>
<!-- /FORM POPUP CONTENT -->
</div>
<!-- /FORM POPUP -->
</div>
<br/>

@endsection
