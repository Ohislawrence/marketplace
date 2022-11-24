@php
    if (request()->route('username') == auth()->user()->userdetail->username) {
        $userpage = auth()->user();
    }elseif (request()->route('username') != auth()->user()->userdetail->username) {
        $userpage = $userdetail->user;
    }

@endphp

@extends('layouts.guest')

@section('tittletop', 'My Account')
@section('tittle', 'Creative Resources')
@section('description', 'Get great deal on apps and more')
@section('image', 'Get great deal on apps and more')

@section('header')
    <style>
    .author-profile-banner {
        background: url("{{ asset('users/coverimages/'. $userpage->userdetail->coverimage ) }}") no-repeat center;
        background-size: cover;
        min-height: 300px; }
    </style>
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
@endsection



@section('body')
@include('frontviews.accountsidebar')
<!-- DASHBOARD CONTENT -->
<div class="content right">
    <form id="profile-info-form" method="POST" action="{{ route('accountsetting.save') }}" enctype="multipart/form-data">
        @csrf
    <!-- HEADLINE -->
    <div class="headline buttons primary">
        <h4>Account Settings</h4>
        <button type="submit" form="profile-info-form" class="button mid-short primary">Save Changes</button>
    </div>
    <!-- /HEADLINE -->

    <!-- FORM BOX ITEMS -->
    <div class="form-box-items">
        <!-- FORM BOX ITEM -->
        <div class="form-box-item">
            <h4>Profile Information</h4>
            <hr class="line-separator">
            <!-- PROFILE IMAGE UPLOAD -->
            <div class="profile-image">
                <div class="profile-image-data">
                    <figure class="user-avatar medium">
                        <img src="{{ asset('assets/images/dashboard/profile-default-image.png') }}" alt="profile-default-image">
                    </figure>
                    <p class="text-header">Profile Photo</p>
                    <p class="upload-details">Minimum size 70x70px</p>
                </div>
                <a href="#" class="button mid-short dark-light">Upload Image...</a>
            </div>
            <!-- PROFILE IMAGE UPLOAD -->
                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="acc_name" class="rl-label required">Profile Image</label>
                    <input type="file" name="profileimage">
                </div>
                <!-- /INPUT CONTAINER -->
                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="acc_name" class="rl-label required">Cover Image</label>
                    <input type="file" name="coverimage">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="acc_name" class="rl-label required">Name</label>
                    <input type="text" id="acc_name" name="name" value="{{ auth()->user()->name }}" >
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="acc_name" class="rl-label required">UserName</label>
                    <input type="text" id="acc_name" name="username" value="{{ auth()->user()->userdetail->username }}" readonly>
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="new_email" class="rl-label">Email</label>
                    <input type="email" name="" value="{{ auth()->user()->email }}" readonly>
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container half">
                    <label for="new_pwd" class="rl-label">New Password</label>
                    <input type="password" id="new_pwd" name="new_pwd" placeholder="Enter your password here...">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container half">
                    <label for="new_pwd2" class="rl-label">Repeat Password</label>
                    <input type="password" id="new_pwd2" name="new_pwd2" placeholder="Repeat your password here...">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="website_url" class="rl-label">Website</label>
                    <input type="text" id="website_url" value="{{ auth()->user()->userdetail->website }}" name="website">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="website_url" class="rl-label">Location</label>
                    <input type="text" id="website_url" value="{{ auth()->user()->userdetail->location }}" name="location">
                </div>
                <!-- /INPUT CONTAINER -->
                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="website_url" class="rl-label">Zip Code</label>
                    <input type="text" value="{{ auth()->user()->userdetail->zip }}" name="zip">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="website_url" class="rl-label">Business Name</label>
                    <input type="text" value="{{ auth()->user()->userdetail->company_name }}" name="company">
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label for="about" class="rl-label">About</label>

                    <textarea class="ckeditor" rows="6" name="about">{{ auth()->user()->userdetail->about_me }}</textarea>
                </div>
                <!-- /INPUT CONTAINER -->

                <!-- INPUT CONTAINER -->
                <div class="input-container">
                    <label class="rl-label">Preferences</label>
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="show_balance" name="show_balance" checked>
                    <label for="show_balance" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                        Show account balance in the status bar
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="email_notif" name="email_notif">
                    <label for="email_notif" class="label-check">
                        <span class="checkbox primary"><span></span></span>
                        Send me email notifications
                    </label>
                    <!-- /CHECKBOX -->
                </div>
                <!-- /INPUT CONTAINER -->
            </form>
        </div>
        <!-- /FORM BOX ITEM -->


    </div>
</div>
<div class="clearfix"></div>
</div>
</div>
@endsection
