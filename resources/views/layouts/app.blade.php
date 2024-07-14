<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link href="{{ asset('assets/b/img/') }}/favicon.png" rel="icon">
	<link href="{{ asset('assets/b/img/') }}/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link
		href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
		rel="stylesheet">
	<link href="{{ asset('assets/b/css/') }}/boxicons.min.css" rel="stylesheet">
	<link href="{{ asset('assets/b/css/') }}/remixicon.css" rel="stylesheet">
	<link href="{{ asset('assets/b/css/') }}/style.css" rel="stylesheet">
	@stack('styles')
</head>

<body>

	<main>
		<div class="container">
			<section
				class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

							<div class="d-flex justify-content-center py-4">
								<a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
									<img src="{{ asset('assets/b/img/') }}/logo.png" alt="">
									<span class="d-none d-lg-block">{{ config('app.name') }}</span>
								</a>
							</div>
							@yield('content')
							<div class="credits">
								<script>
									document.write(new Date().getFullYear())
								</script> © {{ config('app.name') }}.
							</div>

						</div>
					</div>
				</div>

			</section>
		</div>
	</main>

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('assets/b/js/') }}/validate.js"></script>
	<script src="{{ asset('assets/b/js/') }}/main.js"></script>
	@stack('scripts')
</body>

</html>