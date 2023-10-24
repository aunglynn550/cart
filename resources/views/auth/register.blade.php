
@extends('client.auth.main_master')
        @section('title')
            Register V
        @endsection
    @section('content')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('frontend/auth/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>
                         <!-- Name -->
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" id="name" type="text" name="name" value="old('name')" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <!-- Email Address -->
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" id="email" type="email" name="email" value="old('email')" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <!-- Password -->
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="password" type="password" name="password" required autocomplete="current-password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                     <!-- Confirm Password -->
                     <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
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
							Sign Up
						</button>
					</div>

                    <div class="text-center">
                        <a href="{{ route('login') }}">
                        Already have an account! {{ __('Login') }}
                        </a>
                    </div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection