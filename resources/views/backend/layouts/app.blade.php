<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
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
	@include('backend.layouts.part.header')

	@include('backend.layouts.part.aside')

	<main id="main" class="main">
		@yield('page-title')
		@yield('content')
	</main>

	@include('backend.layouts.part.footer')

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('assets/b/js/') }}/validate.js"></script>
	<script src="{{ asset('assets/b/js/') }}/main.js"></script>
	@stack('scripts')
</body>

</html>