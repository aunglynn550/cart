
@extends('client.auth.main_master')
        @section('title')
            Login V
        @endsection
    @section('content')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('frontend/auth/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" id="email" type="email" name="email" value="old('email')" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="password" type="password" name="password" required autocomplete="current-password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>


					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('password.request') }}" class="forgot-password">
                        Forget Password
						</a>
					</div>
                    
                    <div class="text-center">
                        <a href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection