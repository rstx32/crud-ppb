<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin PPB</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('loginTemplate/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/vendor/bootstrap/css/bootstrap.min.cs') }}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/fonts/font-awesome-4.7.0/css/font-awesome.min.cs') }}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/fonts/Linearicons-Free-v1.0.0/icon-font.min.cs') }}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/vendor/animate/animate.cs') }}s">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/vendor/css-hamburgers/hamburgers.min.cs') }}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/vendor/animsition/css/animsition.min.cs') }}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/vendor/select2/select2.min.cs') }}s">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/vendor/daterangepicker/daterangepicker.cs') }}s">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/css/util.cs') }}s">
	<link rel="stylesheet" type="text/css" href="{{ asset('loginTemplate/css/main.cs') }}s">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    <span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required> 
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
                            {{ __('Login') }}
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{ asset('loginTemplate/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginTemplate/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginTemplate/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('loginTemplate/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginTemplate/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginTemplate/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('loginTemplate/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginTemplate/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('loginTemplate/js/main.js') }}"></script>

</body>
</html>