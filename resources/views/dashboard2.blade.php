@extends('auth.includes.dashboard')


@section('content')

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light">
					<div class="page-header-content header-elements-lg-inline">
						<div class="page-title d-flex">
							<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>

					</div>

					<div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
						<div class="d-flex">
							<div class="breadcrumb">
								<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
								<span class="breadcrumb-item active">Dashboard</span>
							</div>

							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<div class="row">
					<div class="col-sm-6 col-xl-9">
						<div class="row">
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="mr-3 align-self-center">
											<i class="icon-mailbox icon-3x text-success"></i>
										</div>

										<div class="media-body text-right">
											<h3 class="font-weight-semibold mb-0">Unclaimed SLP</h3>
											<span class="text-uppercase font-size-sm text-muted">41,277</span>
											<br><span class="text-uppercase font-size-sm text-muted">~1,201.7USD</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="mr-3 align-self-center">
											<i class="icon-mailbox icon-3x text-indigo"></i>
										</div>

										<div class="media-body text-right">
											<h3 class="font-weight-semibold mb-0">Ronin Account</h3>
											<span class="text-uppercase font-size-sm text-muted">0</span>
											<br><span class="text-uppercase font-size-sm text-muted">0.00USD</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Scholar</h3>
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">20,639</span>
											<br><span class="text-uppercase font-size-sm text-muted">~600.9USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-medal icon-3x text-primary"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Manager</h3>
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">20,639</span>
											<br><span class="text-uppercase font-size-sm text-muted">~606.5USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-briefcase3 icon-3x text-danger"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Average SLP</h3>
											<span class="text-uppercase font-size-sm text-muted">84</span>
											<br><span class="text-uppercase font-size-sm text-muted">~2.5USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-chart icon-3x text-danger"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Total</h3>
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">41,277</span>
											<br><span class="text-uppercase font-size-sm text-muted">~1,213.0USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-coin-dollar icon-3x text-danger"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xl-3">

						<!-- Basic area chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<div class="col-xl-8">
										<h4 class="font-weight-semibold mb-0">Today's SLP</h4>
									</div>
									<div class="col-xl-4 text-right">
										<span style="font-size: x-large;font-weight: bold;">913 </span><br>
										<span>~26.8USD</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h4 class="font-weight-semibold mb-0">Yesterday's SLP</h4>
									</div>
									<div class="col-xl-4 text-right">
										<span style="font-size: x-large;font-weight: bold;">2,254 </span><br>
										<span>~66.2USD</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h4 class="font-weight-semibold mb-0">Total Axies    </h4>
									</div>
									<div class="col-xl-4 text-right"><span style="font-size: x-large;font-weight: bold;">176</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h4 class="font-weight-semibold mb-0">Lifetime SLP   </h4></div>
									<div class="col-xl-4 text-right"><span style="font-size: x-large;font-weight: bold;">50,107 </span><br>
										<span>~1,472.5USD</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h4 class="font-weight-semibold mb-0">Total Accounts </h4></div>
									<div class="col-xl-4 text-right"><span style="font-size: x-large;font-weight: bold;">37 </span>
									</div>
								</div>
							</div>						</div>
						<!-- /basic area chart -->

					</div>
				
					</div>
					<!-- Basic datatable -->
					<div class="card">
						<div class="card-header text-right">
						<button onclick="openForm();" class="btn btn-primary">Add New Account</button>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th></th>
									<th>Name</th>
									<th>Today</th>
									<th>Yesterday</th>
									<th>Average</th>
									<th>Adventure</th>
									<th>ELO</th>
									<th>Axies</th>
									<th>Next Claim</th>
									<th>Scholar</th>
									<th>Manager</th>
									<th>Total</th>
									<th>Lifetime</th>
								</tr>
							</thead>
							<tbody>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo1</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>8 SLP<br>~0.23 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1200<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>0</td>
									<td style='font-size: large;'>Claim is ready<br>Last, 15 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>60 SLP<br>~1.76 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>60 SLP<br>~1.76 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>120 SLP<br>~3.52 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>120 SLP<br>~3.52 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo2</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>27 SLP<br>~0.79 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1200<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>0</td>
									<td style='font-size: large;'>Claim is ready<br>Last, 18 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>81 SLP<br>~2.37 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>81 SLP<br>~2.37 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>161 SLP<br>~4.73 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>161 SLP<br>~4.73 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo3</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>27 SLP<br>~0.78 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1055<i class='icon-trophy3 ml-2'></i><br>~3 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>Claim is ready<br>Last, 19 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>253 SLP<br>~7.42 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>253 SLP<br>~7.42 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>505 SLP<br>~14.84 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>505 SLP<br>~14.84 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo4</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>42 SLP<br>~1.25 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>88 SLP<br>~2.61 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1170<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 11 days<br>Last, 4 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>85 SLP<br>~2.51 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>85 SLP<br>~2.51 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>169 SLP<br>~5.02 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>169 SLP<br>~5.02 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo5</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1200<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>0</td>
									<td style='font-size: large;'>Claim is ready<br>Last, 15 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo6</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>31 SLP<br>~0.92 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>31 SLP<br>~0.92 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>56 SLP<br>~1.66 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1100<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 2 days<br>Last, 13 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>390 SLP<br>~11.57 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>390 SLP<br>~11.57 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>779 SLP<br>~23.14 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>779 SLP<br>~23.14 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo7</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>79 SLP<br>~2.35 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>65 SLP<br>~1.93 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>45 SLP<br>~1.34 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1378<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>4</td>
									<td style='font-size: large;'>Claim is ready<br>Last, 15 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>331 SLP<br>~9.82 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>331 SLP<br>~9.82 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>661 SLP<br>~19.64 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>661 SLP<br>~19.64 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo8</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>68 SLP<br>~2.02 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>57 SLP<br>~1.69 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1320<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 7 days<br>Last, 8 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>254 SLP<br>~7.53 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>254 SLP<br>~7.53 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>507 SLP<br>~15.06 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>507 SLP<br>~15.06 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo9</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>52 SLP<br>~1.54 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>38 SLP<br>~1.13 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1074<i class='icon-trophy3 ml-2'></i><br>~3 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 8 days<br>Last, 7 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>157 SLP<br>~4.65 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>157 SLP<br>~4.65 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>313 SLP<br>~9.30 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>313 SLP<br>~9.30 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo10</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>45 SLP<br>~1.33 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>40 SLP<br>~1.18 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1232<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 11 days<br>Last, 4 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>80 SLP<br>~2.37 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>80 SLP<br>~2.37 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>160 SLP<br>~4.73 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>160 SLP<br>~4.73 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo11</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>9 SLP<br>~0.27 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>9 SLP<br>~0.27 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1049<i class='icon-trophy3 ml-2'></i><br>~3 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 8 days<br>Last, 7 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>33 SLP<br>~0.96 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>33 SLP<br>~0.96 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>65 SLP<br>~1.92 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>65 SLP<br>~1.92 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo12</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>21 SLP<br>~0.62 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>30 SLP<br>~0.88 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>39 SLP<br>~1.15 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>949<i class='icon-trophy3 ml-2'></i><br>~1 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 8 days<br>Last, 7 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>115 SLP<br>~3.39 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>115 SLP<br>~3.39 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>230 SLP<br>~6.78 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>230 SLP<br>~6.78 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo13</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1200<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>0</td>
									<td style='font-size: large;'>Never</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo14</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>32 SLP<br>~0.94 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>66 SLP<br>~1.95 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>54 SLP<br>~1.59 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1149<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>In 7 days<br>Last, 8 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>236 SLP<br>~6.96 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>236 SLP<br>~6.96 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>472 SLP<br>~13.91 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>472 SLP<br>~13.91 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo15</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1200<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>0</td>
									<td style='font-size: large;'>
									Never</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo16</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>13 SLP<br>~0.39 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>44 SLP<br>~1.31 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>97 SLP<br>~2.89 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1144<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>Claim is ready<br>Last, 23 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1074 SLP<br>~31.99 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1074 SLP<br>~31.99 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2148 SLP<br>~63.97 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2148 SLP<br>~63.97 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo17</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>60 SLP<br>~1.79 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>128 SLP<br>~3.81 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>204 SLP<br>~6.08 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1590<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									In 2 days<br>Last, 13 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1255 SLP<br>~37.32 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1255 SLP<br>~37.32 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2509 SLP<br>~74.64 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>4229 SLP<br>~125.82 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo18</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>112 SLP<br>~3.33 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>114 SLP<br>~3.39 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1388<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 19 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>948 SLP<br>~28.20 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>948 SLP<br>~28.20 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1896 SLP<br>~56.41 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1896 SLP<br>~56.41 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo19</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>13 SLP<br>~0.39 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>24 SLP<br>~0.72 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>83 SLP<br>~2.49 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>914<i class='icon-trophy3 ml-2'></i><br>~1 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									In 2 days<br>Last, 13 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>207 SLP<br>~6.21 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>207 SLP<br>~6.21 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>414 SLP<br>~12.43 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1941 SLP<br>~58.27 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo20</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>136 SLP<br>~4.08 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>202 SLP<br>~6.06 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>222 SLP<br>~6.66 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1602<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 19 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1864 SLP<br>~55.96 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1864 SLP<br>~55.96 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3728 SLP<br>~111.91 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3728 SLP<br>~111.91 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo21</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>54 SLP<br>~1.64 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>132 SLP<br>~4.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>156 SLP<br>~4.73 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1512<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 17 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1194 SLP<br>~36.17 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1194 SLP<br>~36.17 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2388 SLP<br>~72.33 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2388 SLP<br>~72.33 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo22</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>102 SLP<br>~3.09 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1512<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									In 2 days<br>Last, 13 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>472 SLP<br>~14.28 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>472 SLP<br>~14.28 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>943 SLP<br>~28.56 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>943 SLP<br>~28.56 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo23</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>156 SLP<br>~4.70 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>105 SLP<br>~3.16 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1571<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									In 1 days<br>Last, 14 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>680 SLP<br>~20.48 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>680 SLP<br>~20.48 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1360 SLP<br>~40.96  USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1672 SLP<br>~50.35  USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo24</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>36 SLP<br>~1.08 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>36 SLP<br>~1.08 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>61 SLP<br>~1.84 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1368<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									In 2 days<br>Last, 13 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>378 SLP<br>~11.33 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>378 SLP<br>~11.33 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>755 SLP<br>~22.66 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>773 SLP<br>~23.20 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo25</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>176 SLP<br>~5.28 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>182 SLP<br>~5.46 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>165 SLP<br>~4.95 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1758<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									In 5 days<br>Last, 10 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>664 SLP<br>~19.93 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>664 SLP<br>~19.93 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1328 SLP<br>~39.86 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1328 SLP<br>~39.86 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo26</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>92 SLP<br>~2.76 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>88 SLP<br>~2.64 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1597<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									In 7 days<br>Last, 8 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>351 SLP<br>~10.38 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>351 SLP<br>~10.38 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>701SLP<br>~20.76 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>701 SLP<br>~20.76 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo27</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>5 SLP<br>~0.15 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>51 SLP<br>~1.51 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>65 SLP<br>~1.92 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1155<i class='icon-trophy3 ml-2'></i><br>~5 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									In 2 days<br>Last, 13 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>335 SLP<br>~9.89 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>335 SLP<br>~9.89 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>670 SLP<br>~19.77 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1592 SLP<br>~46.98 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo28</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>79 SLP<br>~2.30 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>78 SLP<br>~0.36 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>80 SLP<br>~2.36 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1495<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 27 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>597 SLP<br>~17.62 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>597 SLP<br>~17.62 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1194 SLP<br>~35.13 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1194 SLP<br>~35.13 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo27</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>65 SLP<br>~1.91 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>91 SLP<br>~2.68 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1311<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									In 6 days<br>Last, 9 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>319 SLP<br>~9.39 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>319 SLP<br>~9.39 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>638 SLP<br>~18.77 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>638 SLP<br>~18.77 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo28</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3 SLP<br>~0.09 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>25 SLP<br>~0.74 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>44 SLP<br>~1.29 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1081<i class='icon-trophy3 ml-2'></i><br>~3 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									In 9 days<br>Last, 6 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>156 SLP<br>~4.58 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>156 SLP<br>~4.58 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>311 SLP<br>~9.14 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>311 SLP<br>~9.14 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo29</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>65 SLP<br>~1.91 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>76 SLP<br>~2.23 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>85 SLP<br>~2.50 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1401<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 23 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>964 SLP<br>~28.32 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>964 SLP<br>~28.32 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1928 SLP<br>~56.63 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1928 SLP<br>~56.63 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo30</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>65 SLP<br>~1.91 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>76 SLP<br>~2.23 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>85 SLP<br>~2.50 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1401<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 23 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>964 SLP<br>~28.37 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>964 SLP<br>~28.37 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1928 SLP<br>~56.74 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1928 SLP<br>~56.74 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo31</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>156 SLP<br>~4.59 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>172 SLP<br>~5.06 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1529<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									In 2 days<br>Last, 13 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1470 SLP<br>~43.25 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1470 SLP<br>~43.25 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2939 SLP<br>~86.49 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3448 SLP<br>~101.47 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo32</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>6 SLP<br>~0.18 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>57 SLP<br>~1.68 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>130 SLP<br>~3.82 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1380<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 26 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1623 SLP<br>~47.50 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1623 SLP<br>~47.50 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3246 SLP<br>~95.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3246 SLP<br>~95.00 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo33</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>64 SLP<br>~1.87 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>58 SLP<br>~1.70 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>114 SLP<br>~3.34 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1347<i class='icon-trophy3 ml-2'></i><br>~6 SLP/win</td>
									<td style='font-size: large;'>3</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 21 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1117 SLP<br>~32.56 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1117 SLP<br>~32.56 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2234 SLP<br>~65.12 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>2234 SLP<br>~65.12 USD</td>
								</tr>
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="#" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>Demo34</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>40 SLP<br>~1.17 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>20 SLP<br>~0.58 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>228 SLP<br>~6.65 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>1610<i class='icon-trophy3 ml-2'></i><br>~8 SLP/win</td>
									<td style='font-size: large;'>10</td>
									<td style='font-size: large;'>
									Claim is ready<br>Last, 19 days ago</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>1897 SLP<br>~55.30 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>1897 SLP<br>~55.30 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3794 SLP<br>~110.59 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>3794 SLP<br>~110.59 USD</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
					<div class="row">
						<div class="col-sm-6">
							<!-- Circle empty -->
							<div class="card card-body border-top-warning">
								<div class="list-feed">
									<div class="list-feed-item">
										<a href="#">TODAY'S / YESTERDAY'S SLP</a> <br>We run a daily job to gather data at 12 AM GMT (8 AM PHT). Any SLP that is earned and then withdrawn between two daily snapshots is not recorded and will not be visible. If your account is new and shows 0, it means that we do not have historical data yet.
									</div>

									<div class="list-feed-item">
										<a href="#">WIN RATE YESTERDAY</a> <br>We run a daily job to gather data at 17:00 GMT. To calculate the Win Rate on PVP battles only from yesterday. Go into details to see the real one.
									</div>

									<div class="list-feed-item">
										<a href="#">AVERAGE</a>
										<br>By default we make average from last 30 days in the tracker. Or you can change into Options to Calculate AVG from last unclaimed and will apply the formula is unclaimed / last claim date. For example, 6000 unclaimed / 22 days since the last claim = 273 (rounding up).

									</div>

									<div class="list-feed-item">
										<a href="#">COLORS</a> <br>An SLP value is marked as red if less than 50 SLP per day, orange between 50 and 75, and green over 75 SLP. You can change these values in Options.

									</div>
								</div>
							</div>
							<!-- /circle empty -->
						</div>

					</div>
					
				</div>
				<!-- /content area -->
<script>
function format(value) {
      return value;
  }
$(document).ready(function() {
   
	var table = $('.datatable-basic').DataTable( {
	"scrollX": true
	} );
	
	console.log(table.search('Demo1').row({search: 'applied'}).data())

	
	$('.datatable-basic').on('click', 'td.details-control', function () {
          var tr = $(this).closest('tr');
          var row = table.row(tr);

          if (row.child.isShown()) {
              // This row is already open - close it
              row.child.hide();
              tr.removeClass('shown');
          } else {
              // Open this row
              row.child(format(tr.data('child-value'))).show();
              tr.addClass('shown');
          }
      });
$("#btn-save").click(function (e) {

});
} );

$(document).on('click', '.final-edit-data', function(){
	
});

$(document).on('click', '#btn-update', function(){
	
});

$(document).on('click', '.final-delete-data', function(){
		
});
function displayFieldErrors(response){

    var gotErrors = false;

    var errorPostion = "top";

    $.each(response.responseJSON, function (key, item) {
        //key is the field
        $gotErrors = true;
        $("#" + key).notify(item, {position: errorPostion});

        if (errorPostion === "top") {
            errorPostion = "bottom";
        } else {
            errorPostion = "top";
        }
    });

    return gotErrors;
}
function openForm()
{
$('input[name=scholar_name]').val('');
$('input[name=ronin_address]').val('');
$('input[name=manager_percentage]').val('');
$('input[name=scholar_ronin_address]').val('');
$('input[name=trainee_percentage]').val('');
$('input[name=trainee_ronin_address]').val('');
var modal=$('#modal_small');
modal.modal();
}
function showMore(val)
{
	if(val==1)
	{
	$('.data-advanced').css('display','block');
	$('.data-normal').css('display','none');
	}	else {
	$('.data-advanced').css('display','none');
	$('.data-normal').css('display','block');
	}
}
function calculateScholar()
{
var manager_percentage=$('input[name=manager_percentage]').val();
var amt=100-manager_percentage;
$('input[name=scholar_percentage]').val(amt);
}
function calculateScholarEdit()
{
var manager_percentage=$('input[name=edit_manager_percentage]').val();
var amt=100-manager_percentage;
$('input[name=edit_scholar_percentage]').val(amt);
}

</script>

				<!-- form modal -->
				<div id="modal_small" class="modal fade" tabindex="-1">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add new account</h5>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

									<form>
									<meta name="csrf-token" content="{{ csrf_token() }}">

									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label><i class="icon-question3 ml-2" data-popup="popover"data-trigger="hover" title="Scholar name" data-content="This is purely descriptive. We suggest adding a numerical prefix, e.g. 001 <name>, if you need to view scholars in a specific order"
													data-placement="left" id="left"></i>Scholar name</label>
													<input type="text" name="scholar_name" placeholder="Name" class="form-control">
													<span id="data-scholar_name" style="color:red"></span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label><button type="button" data-popup="tooltip" title="<p>It is completely safe to share your public Ronin address. You can copy your address in the Ronin wallet extension. Never share your passphrase or private keys.</p><img src='{{ asset('images/ludufi_logo.png') }}'><p>Or on the marketplace:</p><img src='{{ asset('images/ludufi_logo.png') }}'><p>You can also ask your manager which one it is.</p><a href='https://support.axieinfinity.com/hc/en-us/articles/4405346996251-How-to-Keep-Your-Account-Secure' target='_blank'>Still worried about security? Read axie secure account</a>" data-html="true"
													><i class="icon-question3 ml-2" ></i></button>Public Ronin address with the ronin: prefix</label>
													<input type="text" name="ronin_address" placeholder="Add Ronin" class="form-control">
													<span id="data-ronin_address" style="color:red"></span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label><i class="icon-question3 ml-2" data-popup="popover"data-trigger="hover" title="Scholar name" data-content="This is purely descriptive. We suggest adding a numerical prefix, e.g. 001 <name>, if you need to view scholars in a specific order"
													data-placement="left" id="left"></i>Manager percentage</label>
													<input type="text" name="manager_percentage" placeholder="0" onkeyup="calculateScholar()" class="form-control">
													<span id="data-manager_percentage" style="color:red"></span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label><i class="icon-question3 ml-2" data-popup="popover"data-trigger="hover" title="Scholar name" data-content="This is purely descriptive. We suggest adding a numerical prefix, e.g. 001 <name>, if you need to view scholars in a specific order"
													data-placement="left" id="left"></i>Scholar percentage</label>
													<input type="text" name="scholar_percentage" value="100" disabled class="form-control">
													<span>This field is auto-calculated.</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row data-normal text-center">
											<div class="col-sm-12">
											<a href="javascript:" onclick="showMore(1)"><h4>Advanced</h4></a>
											</div>
											</div>
											<div class="row data-advanced text-center" style="display:none">
											<a href="javascript:" onclick="showMore(2)"><h4>Hide</h4></a>
												<div class="col-sm-12">
													<label>OPTIONAL Scholar Ronin address, for payment</label>
													<input type="text" name="scholar_ronin_address"placeholder="Add Ronin" class="form-control">
												</div>
												<div class="col-sm-12">
													<label>OPTIONAL Investor / Trainer percentage</label>
													<input type="text" placeholder="0" name="trainee_percentage" class="form-control">
												</div>
												<div class="col-sm-12">
													<label>OPTIONAL Investor / Trainer Ronin address</label>
													<input type="text" name="trainee_ronin_address" placeholder="Add Ronin" class="form-control">
												</div>
											</div>
										</div>

									</div>

									<div class="text-center">
										<button type="button" id="btn-save"
										class="btn btn-primary">Track Account</button>
									</div>
									
									<div class="modal-footer">
									</div>
								</form>
							</div>
						</div>
					</div>
				<div id="form_edit" class="modal fade form-edit" tabindex="-1">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit account</h5>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

									<form>

									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label><i class="icon-question3 ml-2" data-popup="popover"data-trigger="hover" title="Scholar name" data-content="This is purely descriptive. We suggest adding a numerical prefix, e.g. 001 <name>, if you need to view scholars in a specific order"
													data-placement="left" id="left"></i>Scholar name</label>
													<input type="text" name="edit_scholar_name" placeholder="Name" class="form-control">
													<input type="hidden" name="edit_rowno">
													<input type="hidden" name="edit_id">
													<span id="data-scholar_name" style="color:red"></span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label><button type="button" data-popup="tooltip" title="<p>It is completely safe to share your public Ronin address. You can copy your address in the Ronin wallet extension. Never share your passphrase or private keys.</p><img src='{{ asset('images/ludufi_logo.png') }}'><p>Or on the marketplace:</p><img src='{{ asset('images/ludufi_logo.png') }}'><p>You can also ask your manager which one it is.</p><a href='https://support.axieinfinity.com/hc/en-us/articles/4405346996251-How-to-Keep-Your-Account-Secure' target='_blank'>Still worried about security? Read axie secure account</a>" data-html="true"
													><i class="icon-question3 ml-2" ></i></button>Public Ronin address with the ronin: prefix</label>
													<input type="text" readonly name="edit_ronin_address" placeholder="Add Ronin" class="form-control">
													<span id="data-ronin_address" style="color:red"></span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label><i class="icon-question3 ml-2" data-popup="popover"data-trigger="hover" title="Scholar name" data-content="This is purely descriptive. We suggest adding a numerical prefix, e.g. 001 <name>, if you need to view scholars in a specific order"
													data-placement="left" id="left"></i>Manager percentage</label>
													<input type="text" name="edit_manager_percentage" placeholder="0" onkeyup="calculateScholarEdit()" class="form-control">
													<span id="data-manager_percentage" style="color:red"></span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label><i class="icon-question3 ml-2" data-popup="popover"data-trigger="hover" title="Scholar name" data-content="This is purely descriptive. We suggest adding a numerical prefix, e.g. 001 <name>, if you need to view scholars in a specific order"
													data-placement="left" id="left"></i>Scholar percentage</label>
													<input type="text" name="edit_scholar_percentage" value="100" disabled class="form-control">
													<span>This field is auto-calculated.</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row data-normal text-center">
											<div class="col-sm-12">
											<a href="javascript:" onclick="showMore(1)"><h4>Advanced</h4></a>
											</div>
											</div>
											<div class="row data-advanced text-center" style="display:none">
											<a href="javascript:" onclick="showMore(2)"><h4>Hide</h4></a>
												<div class="col-sm-12">
													<label>OPTIONAL Scholar Ronin address, for payment</label>
													<input type="text" name="edit_scholar_ronin_address"placeholder="Add Ronin" class="form-control">
												</div>
												<div class="col-sm-12">
													<label>OPTIONAL Investor / Trainer percentage</label>
													<input type="text" placeholder="0" name="edit_trainee_percentage" class="form-control">
												</div>
												<div class="col-sm-12">
													<label>OPTIONAL Investor / Trainer Ronin address</label>
													<input type="text" name="edit_trainee_ronin_address" placeholder="Add Ronin" class="form-control">
												</div>
											</div>
										</div>

									</div>

									<div class="text-center">
										<button type="button" id="btn-update"
										class="btn btn-primary">Update Account</button>
									</div>
									
									<div class="modal-footer">
									</div>
								</form>
							</div>
						</div>
					</div>
				<div id="modal_small2" data-backdrop="false" style="top: 35%;left: -24%;" class="modal fade" tabindex="-1">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add new account</h5>
								</div>
							</div>
						</div>
					</div>
				<!-- /form modal -->

				<!-- Footer -->
				<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>

					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2022. <a href="#">Ludufy-Web Portal</a>
						</span>

					</div>
				</div>
				
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		
@endsection