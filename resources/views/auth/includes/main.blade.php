<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ludufi - Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/demo.css') }}">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('build/js/intlTelInput.js') }}"></script>
	<!-- /theme JS files -->
	{!! ReCaptcha::htmlScriptTagJsApi() !!}


</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="navbar-brand ml-2 ml-lg-0">
			<a href="index.html" class="d-inline-block">
				<img src="" alt="">
			</a>
		</div>

		<div class="d-flex justify-content-end align-items-center ml-auto">
			<ul class="navbar-nav flex-row">
				<li class="nav-item">
					<a href="{{ route('register') }}" class="navbar-nav-link">
						<i class="icon-user-plus"></i>
						<span class="d-none d-lg-inline-block ml-2">Register</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('login') }}" class="navbar-nav-link">
						<i class="icon-user-lock"></i>
						<span class="d-none d-lg-inline-block ml-2">Login</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	 <!--main navbar -->

	<!-- Page content -->
	<div class="page-content">
		@yield('contentLogin')
	</div>
	<!-- /page content -->

</body>
</html>
