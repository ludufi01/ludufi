<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ludufi - Dashboard</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('js/plugins/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
	<script src="{{ asset('js/plugins/uploaders/fileinput/fileinput.min.js') }}"></script>
	<script src="{{ asset('js/demo_pages/uploader_bootstrap.js') }}"></script>
	<script src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>
	<script src="{{ asset('js/plugins/visualization/d3/d3v5.min.js') }}"></script>
	<script src="{{ asset('js/plugins/visualization/c3/c3.min.js') }}"></script>
	<script src="{{ asset('js/demo_charts/c3/c3_axis.js') }}"></script>

	<script src="{{ asset('js/plugins/tables/datatables/datatables.min.js') }}"></script>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/demo_pages/dashboard.js') }}"></script>
	<script src="{{ asset('js/demo_pages/components_modals.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="d-flex flex-1 d-lg-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-paragraph-justify3"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-transmission"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
				<div style="float: left;margin-right:5%;"><img src="{{ asset('images/ludufi_logo.jpg') }}" class="d-none d-sm-block" alt=""></div><div style="float: left;"><span style="color: #b078ff;font-size: x-large;">Ludufi</span></div>
		</div>

		<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
		</div>

		<ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
			<li class="nav-item nav-item-dropdown-lg dropdown">
				<div class="custom-control custom-switch custom-switch-square custom-control-secondary mb-2">
					<input type="checkbox" class="custom-control-input" id="sc_s_secondary" <?php if(Auth::guard('user')->user()->notification==1) { ?> checked <?php } ?> >
					<label class="custom-control-label" for="sc_s_secondary">Notofication</label>
				</div>				
			</li>
			<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
			
				<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
					<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="rounded-pill mr-lg-2" height="34" alt="">
					<span class="d-none d-lg-inline-block">{{ session()->get('userName') }}</span>
				</a>

				<div class="dropdown-menu dropdown-menu-right">
					<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
					<a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
				</div>
			</li>
		</ul>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-section sidebar-user my-1">
					<div class="sidebar-section-body">
						<div class="media">
							<a href="#" class="mr-3">
								<img src="{{ asset('images/placeholders/placeholder.jpg') }}" class="rounded-circle" alt="">
							</a>

							<div class="media-body">
								<div class="font-weight-semibold">{{ session()->get('userName') }}</div>
								<div class="font-size-sm line-height-sm opacity-50">
									{{ session()->get('email') }}
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
									<i class="icon-transmission"></i>
								</button>

								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
									<i class="icon-cross2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="{{ route('home') }}" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('axies') }}" class="nav-link">
								<i class="icon-color-sampler"></i>
								<span>
									Axies
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('quiz') }}" class="nav-link">
								<i class="icon-color-sampler"></i>
								<span>
									Quiz
								</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

		<!-- Inner content -->
		@yield('content')
		<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
<script>
$(document).on("click","#sc_s_secondary",function() {
	if($(this).prop("checked") == true){
		var notification=1;
	}
	else if($(this).prop("checked") == false){
		var notification=0;
	}
	$.ajax({
		url: "{{ route('update-notification') }}",
		method: 'get',
		data: { 
			 notification: notification
			 },
		success: function(result){

		}
	});
});
</script>
</body>
</html>
