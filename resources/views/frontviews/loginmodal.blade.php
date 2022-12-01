<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->

    <div class="form-popup">
        <!-- CLOSE BTN -->
				<div class="close close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->
        <!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Login to your Account</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->
					<form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
						<label for="username" class="rl-label">Username</label>
						<input type="text" id="email" name="email" placeholder="Enter your username here..." :value="old('email')" required autofocus>
						<label for="password" class="rl-label">Password</label>
						<input type="password" id="password" name="password" placeholder="Enter your password here..." required autocomplete="current-password">
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember" name="remember" checked>
						<label for="remember" class="label-check">
							<span class="checkbox primary primary"><span></span></span>
							Remember me
						</label>
						<!-- /CHECKBOX -->
						<p>Forgot your password? <a href="{{ route('password.request') }}" class="primary">Click here!</a></p>
						<button type="submit" class="button mid dark">Login <span class="primary">Now!</span></button>
					</form>
					<!-- LINE SEPARATOR -->
                    <br/>
                    <p>Don't have an account? <a href="{{ route('register') }}" class="primary">Click here to Sign Up!</a></p>
					<hr class="line-separator double">
					<!-- /LINE SEPARATOR -->
					<a href="#" class="button mid fb half">Login with Facebook</a>
					<a href="#" class="button mid twt half">Login with Twitter</a>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->
  </div>
