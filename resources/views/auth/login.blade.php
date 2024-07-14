@extends('layouts.app')

@section('content')
<div class="card mb-3">

	<div class="card-body">

		<div class="pt-4 pb-2">
			<h5 class="card-title text-center pb-0 fs-4">{{ __('Login') }} to Your Account</h5>
			<p class="text-center small">Enter your username & password to {{ __('Login') }}</p>
		</div>

		<form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('login') }}">
			@csrf

			<div class="col-12">
				<label for="yourEmail" class="form-label">{{ __('Email Address')
					}}</label>
				<div class="input-group has-validation">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
					<input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
						id="yourEmail" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email"
						autofocus>
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>

			<div class="col-12">
				<label for="yourPassword" class="form-label">{{ __('Password')
					}}</label>
				<input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
					id="yourPassword" placeholder="Your Password" required>
				<div class="invalid-feedback">Please enter your password!</div>
			</div>

			<div class="col-12">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" {{
						old('remember') ? 'checked' : '' }}>
					<label class="form-check-label" for="rememberMe">{{ __('Remember Me') }}</label>
				</div>
			</div>
			<div class="col-12">
				<button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
			</div>
			<div class="col-12">
				<p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an
						account</a></p>
			</div>
		</form>

	</div>
</div>
@endsection