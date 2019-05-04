<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Wisata Jogja - Login</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body id="lg2">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-8 col-xs-8 mx-auto text-center zz">
                <form class="form-horizontal" action="{{ route('login') }}" method="post">
                    @csrf
                    <h3>Login Panel</h3>
                    @if(session('warning'))
						<div class="col-md-12">
							<div class="alert alert-warning">
                                {{ session('warning') }}
								<a class="close" data-dismiss="alert" href="" aria-hidden="true">&times;</a>
							</div>
						</div>
				    @endif

					<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="off">
                    
                    <input type="password" id="login-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required autocomplete="off">
                    
                    <div class="ml-2 form-check text-left mt-4">
						<input type="checkbox" class="form-check-input" id="tampilpswd" onclick="showPassword()">
						<label for="tampilpswd">Show Password</label>
                    </div>
                    
                    <div class="ml-2 form-check text-left mb-2">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-lg btn-lg2 mb-2">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
				</form>
				<hr>
				<p>&copy; {{ date('Y') }} | Wisata Jogja</p>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</body>