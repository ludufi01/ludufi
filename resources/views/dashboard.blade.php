@extends('auth.includes.dashboard')


@section('content')
<?php
$axietotal=$rawTotal=$total=$scholar=$manager=$todaySlp=$yesterdaySlp=$avgSLP=$avgS=$cnt=0;
foreach($finalData as $finl)	{
$axietotal += $finl->axies;
$todaySlp += $finl->today;
$yesterdaySlp += $finl->yesterday;
$avgSLP += $finl->average;
$rawTotal += $finl->lifetime;
$total += $finl->total;
$scholar += $finl->scholar;
$manager += $finl->manager;
$cnt++;
}
if($cnt>0)	{
$avgS=$avgSLP/$cnt;
}
?>
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
								<a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
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
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Scholar</h3>
											<span id="scholarSLP" style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ number_format($scholar) }}</span>
											<br><span id="scholarUSD" class="text-uppercase font-size-sm text-muted">{{ number_format($scholar*$rate,2) }} USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-medal icon-3x text-primary"></i>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Total</h3>
											<span id="totalSLP" style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ number_format($total) }}</span>
											<br><span id="totalUSD" class="text-uppercase font-size-sm text-muted">{{ number_format($total*$rate,2) }} USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-coin-dollar icon-3x text-danger"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-4">
								<!--<div class="card card-body">
									<div class="media">
										<div class="mr-3 align-self-center">
											<i class="icon-mailbox icon-3x text-success"></i>
										</div>

										<div class="media-body text-right">
											<h3 class="font-weight-semibold mb-0">Unclaimed SLP</h3>
											<span id="unclaimedSLP" style="font-weight: bold;font-size: larger;" class="text-uppercase font-size-sm">0</span>
											<br><span id="unclaimedUSD" class="text-uppercase font-size-sm text-muted">0.00USD</span>
										</div>
									</div>
								</div>-->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Manager</h3>
											<span id="managerSLP" style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ number_format($manager) }}</span>
											<br><span id="managerUSD" class="text-uppercase font-size-sm text-muted">{{ number_format($manager*$rate,2) }} USD</span>
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
											<span id="avgSLP" style="font-weight: bold;font-size: larger;" class="text-uppercase font-size-sm">{{ number_format($avgS,2) }}</span>
											<br><span id="avgUSD" class="text-uppercase font-size-sm text-muted">{{ number_format($avgS*$rate,2) }} USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-chart icon-3x text-danger"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-4">
								<!--<div class="card card-body">
									<div class="media">
										<div class="mr-3 align-self-center">
											<i class="icon-mailbox icon-3x text-indigo"></i>
										</div>

										<div class="media-body text-right">
											<h3 class="font-weight-semibold mb-0">Ronin Account</h3>
											<span id="roninSLP" style="font-weight: bold;font-size: larger;" class="text-uppercase font-size-sm">0</span>
											<br><span id="roninUSD" class="text-uppercase font-size-sm text-muted">0.00USD</span>
										</div>
									</div>
								</div>-->
							</div>

						</div>
					</div>
					<div class="col-sm-3 col-xl-3">

						<!-- Basic area chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<div class="col-xl-8">
										<h5 class="font-weight-semibold mb-0">Today's SLP</h5>
									</div>
									<div class="col-xl-4 text-right">
										<span id="todaySLP" style="font-size: initial;font-weight: bold;">{{ number_format($todaySlp,2) }}  </span><br>
										<span id="todayUSD">{{ number_format($todaySlp*$rate,2) }} USD</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h5 class="font-weight-semibold mb-0">Yesterday's SLP</h5>
									</div>
									<div class="col-xl-4 text-right">
										<span id="yesterdaySLP" style="font-size: initial;font-weight: bold;">{{ number_format($yesterdaySlp,2) }} </span><br>
										<span id="yesterdayUSD">{{ number_format($yesterdaySlp*$rate,2) }} USD</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h5 class="font-weight-semibold mb-0">Total Axies    </h5>
									</div>
									<div class="col-xl-4 text-right"><span id="totalAxies" style="font-size: initial;font-weight: bold;">{{ number_format($axietotal) }}</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h5 class="font-weight-semibold mb-0">Lifetime SLP   </h5></div>
									<div class="col-xl-4 text-right"><span id="lifetimeSLP" style="font-size: initial;font-weight: bold;">{{ number_format($rawTotal) }}</span><br>
										<span id="lifetimeUSD">{{ number_format($rawTotal*$rate,2) }} USD</span>
									</div>
								</div>
								<div class="d-flex">
									<div class="col-xl-8">
									<h5 class="font-weight-semibold mb-0">Total Accounts </h5></div>
									<div class="col-xl-4 text-right"><span id="total_account" style="font-size: initial;font-weight: bold;">{{ count($finalData) }}</span>
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
									<th>Rank</th>
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
							<?php $rowno=0; ?>
							@if(!empty($finalData))
								@foreach($finalData as $scholars)
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="{{ url("home/".$scholars->ronin_address) }}" target="_blank">Details</a>
									<button class="btn btn-primary" id="final-edit-data" data-value="{{  $scholars->id }}" data-rowno="{{ $rowno }}">Edit</button>
									<button class="btn btn-primary" id="final-delete-data" data-value="{{  $scholars->id }}" data-rowno="{{ $rowno }}">Delete</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>{{ $scholars['name'] }}</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['today'] }} SLP<br>~{{ number_format($scholars['today']*$rate,2) }} USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['yesterday'] }} SLP<br>~{{ number_format($scholars['yesterday']*$rate,2) }} USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['average'] }} SLP<br>~{{ number_format($scholars['average']*$rate,2) }} USD</td>
									<td style='font-size: large'>{{ $scholars['rank'] }}<i class='icon-trophy3 ml-2'></i></td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>{{ $scholars['elo'] }}<i class='icon-trophy3 ml-2'></i><br>~0 SLP/win</td>
									<td style='font-size: large;'>{{ $scholars['axies'] }}</td>
									<td style='font-size: large;'>{{ $scholars['next_claim'] }}</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>{{ $scholars['scholar'] }}<br>~{{ number_format($scholars['scholar']*$rate,2) }} USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['manager'] }}<br>~{{ number_format($scholars['manager']*$rate,2) }} USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['total'] }}<br>~{{ number_format($scholars['total']*$rate,2) }} USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['lifetime'] }}<br>~{{ number_format($scholars['lifetime']*$rate,2) }} USD</td>
								</tr>
								<?php $rowno++; ?>
								@endforeach
							@endif
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
<div class="row">
<div class="col-sm-12">
<div class="card text-center">
<h5 class="font-weight-semibold">Daily SLP Graph</h5>
<a href="#daily-slp" class="text-body" data-toggle="collapse">
	<i class="icon-circle-down2"></i>
</a>

	<div class="card-body">
		<div class="chart-container">
			<div class="chart collapse" id="daily-slp"></div>
		</div>
	</div>
</div>
</div>
</div>
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
	jQuery.extend( jQuery.fn.dataTableExt.oSort, {
	"formatted-num1-pre": function ( a ) {
		a = (a === "SLP" || a === "USD") ? 0 : a.replace( /[^\d\-\.]/g, "" );
		return parseFloat( a );
	},

	"formatted-num1-asc": function ( a, b ) {
		return a - b;
	},

	"formatted-num1-desc": function ( a, b ) {
		return b - a;
	},
	"formatted-num2-pre": function ( a ) {
		a = (a === "SLP" || a === "USD") ? 0 : a.replace( /[^\d\-\.]/g, "" );
		return parseFloat( a );
	},

	"formatted-num2-asc": function ( a, b ) {
		return a - b;
	},

	"formatted-num2-desc": function ( a, b ) {
		return b - a;
	},
	"formatted-num3-pre": function ( a ) {
		a = (a === "SLP" || a === "USD") ? 0 : a.replace( /[^\d\-\.]/g, "" );
		return parseFloat( a );
	},

	"formatted-num3-asc": function ( a, b ) {
		return a - b;
	},

	"formatted-num3-desc": function ( a, b ) {
		return b - a;
	},
	"formatted-num4-pre": function ( a ) {
		a = (a === "SLP" || a === "USD") ? 0 : a.replace( /[^\d\-\.]/g, "" );
		return parseFloat( a );
	},

	"formatted-num4-asc": function ( a, b ) {
		return a - b;
	},

	"formatted-num4-desc": function ( a, b ) {
		return b - a;
	},
	"formatted-num5-pre": function ( a ) {
		a = (a === "SLP" || a === "USD") ? 0 : a.replace( /[^\d\-\.]/g, "" );
		return parseFloat( a );
	},

	"formatted-num5-asc": function ( a, b ) {
		return a - b;
	},

	"formatted-num5-desc": function ( a, b ) {
		return b - a;
	},
	"formatted-num6-pre": function ( a ) {
		a = (a === "SLP" || a === "USD") ? 0 : a.replace( /[^\d\-\.]/g, "" );
		return parseFloat( a );
	},

	"formatted-num6-asc": function ( a, b ) {
		return a - b;
	},

	"formatted-num6-desc": function ( a, b ) {
		return b - a;
	},
	"formatted-num7-pre": function ( a ) {
		a = (a === "SLP" || a === "USD") ? 0 : a.replace( /[^\d\-\.]/g, "" );
		return parseFloat( a );
	},

	"formatted-num7-asc": function ( a, b ) {
		return a - b;
	},

	"formatted-num7-desc": function ( a, b ) {
		return b - a;
	}
	} );
	var table = $('.datatable-basic').DataTable({
	columnDefs: [
	{ type: 'formatted-num1', targets: 2 },
	{ type: 'formatted-num2', targets: 3 },
	{ type: 'formatted-num3', targets: 4 },
	{ type: 'formatted-num4', targets: 9 },
	{ type: 'formatted-num5', targets: 10 },
	{ type: 'formatted-num6', targets: 11 },
	{ type: 'formatted-num7', targets: 12 },
	],
	"scrollX": true,
	"scrollY": "500px",
    "scrollCollapse": true,
	paging: false
	});
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
	  
$.ajax({
	url: "{{ route('add-multi-mmr') }}",
	method: 'get',
	success: function(result){
		$.each(result.row, function(index, item) {
			table.rows( function ( idx, data, node ) {   
			if(data[1] === item.name){
			var temp = table.row(idx).data();
			temp[5]=item.rank+"<i class='icon-trophy3 ml-2'></i>";
			temp[6]=item.elo+"<i class='icon-trophy3 ml-2'></i><br>~"+item.perwin+" SLP/win";
			temp[7]=item.axietotal;
			table.row(idx).data(temp).draw();
			}
			return false;
			});
        });
		
		$.ajax({
		url: "{{ route('add-multi-battle') }}",
		method: 'get',
		success: function(result){
			$.each(result.row, function(index, item) {
			table.rows( function ( idx, data, node ) {   
			if(data[1] === item.name){
			var temp = table.row(idx).data();
			temp[2]=item.todaySlp+" SLP <br>~"+(result.rate.rate*item.todaySlp).toFixed(2)+" USD";
			temp[3]=item.yesterdaySlp+" SLP <br>~"+(result.rate.rate*item.yesterdaySlp).toFixed(2)+" USD";
			temp[4]=item.avgSLP+" SLP <br>~"+(result.rate.rate*item.avgSLP).toFixed(2)+" USD";
			table.row(idx).data(temp).draw();
			}
			return false;
			});
			});
			
			
			$.ajax({
			url: "{{ route('add-multi-slp') }}",
			method: 'get',
			success: function(result){
				$.each(result.row, function(index, item) {
				table.rows( function ( idx, data, node ) {   
				if(data[1] === item.name){
					console.log(item.perwin);
				var temp = table.row(idx).data();
				temp[8]=item.lastClaimedItemAt;
				temp[9]=item.scholar+" SLP <br>~"+(result.rate.rate*item.scholar).toFixed(2)+" USD";
				temp[10]=item.manager+" SLP <br>~"+(result.rate.rate*item.manager).toFixed(2)+" USD";
				temp[11]=item.total+" SLP <br>~"+(result.rate.rate*item.total).toFixed(2)+" USD";
				temp[12]=item.rawTotal+" SLP <br>~"+(result.rate.rate*item.rawTotal).toFixed(2)+" USD";
				table.row(idx).data(temp).draw();
				}
				return false;
				});
				});
				sumAll(result.rate.rate);
			}
			});
		}
		});
	}
});
	  
$("#btn-save").click(function (e) {
var scholar_name=$('input[name=scholar_name]').val();
var ronin_address=$('input[name=ronin_address]').val();
var manager_percentage=$('input[name=manager_percentage]').val();
var scholar_ronin_address=$('input[name=scholar_ronin_address]').val();

var trainee_percentage=$('input[name=trainee_percentage]').val();
var trainee_ronin_address=$('input[name=trainee_ronin_address]').val();

var	total_rows=table.rows().count();
if(scholar_name=='')
{
	$('#data-scholar_name').html('Field is required');
}	else {
	$('#data-scholar_name').html('');
}if(ronin_address=='')
{
	$('#data-ronin_address').html('Field is required');
}else {
var ronin=ronin_address.split(':');
if(ronin[0]!='ronin')
{
	$('#data-ronin_address').html('Ronin Address is invalid');
}	else if(ronin[1].length<40)	{
	$('#data-ronin_address').html('Ronin Address is short');
}	else if(ronin[1].length>40)	{
	$('#data-ronin_address').html('Ronin Address is long');
}	else {
	$('#data-ronin_address').html('');
}
}if(manager_percentage=='')
{
	$('#data-manager_percentage').html('Field is required');
	return false;
}	else {
	$('#data-manager_percentage').html('');
}
var scholar_percentage=100-manager_percentage;


$.ajaxSetup({
  headers: {
	  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
e.preventDefault();

$.ajax({
  url: "{{ route('add-tracker') }}",
  method: 'post',
  data: {
	 name: scholar_name,
	 ronin_address: ronin_address,
	 manager_percentage: manager_percentage,
	 scholar_percentage: scholar_percentage,
	 scholar_ronin_address: (scholar_ronin_address == "") ? "" : scholar_ronin_address,
	 trainee_percentage: (trainee_percentage == "") ? "" : trainee_percentage,
	 trainee_ronin_address: (trainee_ronin_address == "") ? "" : trainee_ronin_address,
  },
  success: function(result){
	  if(!result.errors){
	 $('#modal_small').modal('hide');

	var row ="<tr data-child-value='<div class=row><div class=col-sm-12><a class=btncustom href={{ url('home') }}/"+result.data.roninAdd+" target=_blank>Details</a><button class=btncustom data-value="+result.id+" id=final-edit-data data-rowno="+total_rows+">Edit</button><button class=btncustom  data-value="+result.id+" id=final-delete-data data-rowno="+total_rows+">Delete</button></div></div>'><td class='details-control'><i style='color: blue;' class='icon-arrow-resize8 mr-3 icon-2x'></i></td><td style='font-size: large;'>"+result.data.name+"</td><td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td><td style='font-size: large;'>0/50</td><td style='font-size: large;font-weight: bold;' class='text-center'>0<i class='icon-trophy3 ml-2'></i><br>~0.00 USD</td><td style='font-size: large;'>0</td><td style='font-size: large;'>"+result.data.lastClaimedItemAt+"</td><td  style='font-size: large;font-weight: bold;'class='text-center'>"+result.data.scholar+" SLP<br>~"+(result.rate.rate*result.data.scholar).toFixed(2)+" USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>"+result.data.manager+" SLP<br>~"+(result.rate.rate*result.data.manager).toFixed(2)+" USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>"+result.data.total+" SLP<br>~"+(result.rate.rate*result.data.total).toFixed(2)+" USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>"+result.data.rawTotal+" SLP<br>~"+(result.rate.rate*result.data.rawTotal).toFixed(2)+" USD</td></tr>"

	 
	 const tr = $(row);
	 table.row.add(tr[0]).draw();
	 var rowindex = tr.index();
		$.ajax({
		url: "{{ route('add-battle') }}",
		method: 'post',
		data: {
		ronin_address: ronin_address
		},
		success: function(result){
			var temp = table.row(rowindex).data();
			temp[2]=result.data.todaySlp+" SLP <br>~"+(result.rate.rate*result.data.todaySlp).toFixed(2)+" USD";
			temp[3]=result.data.yesterdaySlp+" SLP <br>~"+(result.rate.rate*result.data.yesterdaySlp).toFixed(2)+" USD";
			temp[4]=result.data.avgSLP+" SLP <br>~"+(result.rate.rate*result.data.avgSLP).toFixed(2)+" USD";
			table.row(rowindex).data(temp).draw();
			
				$.ajax({
				url: "{{ route('add-mmr') }}",
				method: 'post',
				data: {
				ronin_address: ronin_address
				},
				success: function(result){
					var temp = table.row(rowindex).data();
					temp[5]=result.data.rank+"<i class='icon-trophy3 ml-2'></i>";
					temp[6]=result.data.elo+"<i class='icon-trophy3 ml-2'></i><br>~"+result.data.perwin+" SLP/win";
					temp[7]=result.data.axietotal;
					table.row(rowindex).data(temp).draw();
					sumAll(result.rate.rate);
					var tot_acnt=$('#total_account').html();
					tot_acnt++;
					$('#total_account').html(tot_acnt);
				}
				});
		}
		});
  }	else {
	  if(result.errors=='The ronin address has already been taken.')	{
	$('#data-ronin_address').html('Ronin Address Already Used');
	  }	else {
	$('#data-scholar_name').html('Name Already	Used');
	  }
  }	  }
  });
});
} );

$(document).on('click', '#final-edit-data', function(){
	$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});
	var ronin=$(this).attr('data-value');
	var rowno=$(this).attr('data-rowno');
	
	var table = $('.datatable-basic').DataTable();
	var temp = table.row(rowno).data();
	console.log(temp);
    $.ajax({
            type:"POST",
            url: "{{ url('edit-tracker') }}",
            data: { id: ronin },
            dataType: 'json',
            success: function(res){
				var modal=$('.form-edit');
				$('input[name=edit_scholar_name]').val(res.name);
				$('input[name=edit_ronin_address]').val(res.ronin_address);
				$('input[name=edit_scholar_percentage]').val(res.scholar_percentage);
				$('input[name=edit_manager_percentage]').val(res.manager_percentage);
				$('input[name=edit_id]').val(res.id);
				$('input[name=edit_rowno]').val(rowno);
				modal.modal();
           }
        });
});

$(document).on('click', '#btn-update', function(){
	$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});
	var id=$('input[name=edit_id]').val();
	var rowno=$('input[name=edit_rowno]').val();
	var scholar_name=$('input[name=edit_scholar_name]').val();
	var manager_percentage=$('input[name=edit_manager_percentage]').val();
	var scholar_ronin_address=$('input[name=edit_scholar_ronin_address]').val();
	var trainee_percentage=$('input[name=edit_trainee_percentage]').val();
	var trainee_ronin_address=$('input[name=edit_trainee_ronin_address]').val();
	
	var table = $('.datatable-basic').DataTable();
    $.ajax({
            type:"POST",
            url: "{{ url('update-tracker') }}",
            data: { 
			 id: id,
			 name: scholar_name,
			 manager_percentage: manager_percentage,
			 scholar_ronin_address: (scholar_ronin_address == "") ? "" : scholar_ronin_address,
			 trainee_percentage: (trainee_percentage == "") ? "" : trainee_percentage,
			 trainee_ronin_address: (trainee_ronin_address == "") ? "" : trainee_ronin_address,
			 },
            dataType: 'json',
            success: function(res){
				$('.form-edit').modal('hide');
				var temp = table.row(rowno).data();
				console.log(temp);
				temp[1]=res.data.name;
				var total=temp[11];
				var totalVal=total.split('SLP');
				totalVal=totalVal[0].trim();
				var scholarVal=(res.data.scholar_percentage*totalVal)/100;
				var managerVal=(res.data.manager_percentage*totalVal)/100;
				temp[9]=scholarVal+' SLP <br>~0.00 USD';
				temp[10]=managerVal+' SLP <br>~0.00 USD';
				table.row(rowno).data(temp).draw();
           }
        });
});

$(document).on('click', '#final-delete-data', function(){
	$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});
	
	var ronin=$(this).attr('data-value');
	var rowno=$(this).attr('data-rowno');
	var table = $('.datatable-basic').DataTable();
	if (confirm('Are you sure you want to delete this record')) {
	$.ajax({
            type:"POST",
            url: "{{ url('delete-tracker') }}",
            data: { id: ronin },
            dataType: 'json',
            success: function(res){
				table.row(rowno).remove().draw();
				var tot_acnt=$('#total_account').html();
				tot_acnt--;
				$('#total_account').html(tot_acnt);
           }
        });
	}	else {
	}
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

function sumAll(rate)	{
	var table = $('.datatable-basic').DataTable();
	var ttoday=0;
	var todayCol=table.column( 2 ).data();
	$.each(todayCol, function(index, item) {
	var todayVal = item.split('SLP');
	todayVal=todayVal[0].trim();
	ttoday=ttoday+parseInt(todayVal);
	});
	var tyesterday=0;
	var yesterdayCol=table.column( 3 ).data();
	$.each(yesterdayCol, function(index, item) {
	var yesterdayVal = item.split('SLP');
	yesterdayVal=yesterdayVal[0].trim();
	tyesterday=tyesterday+parseInt(yesterdayVal);
	});
	var tavg=0;
	var tot=0;
	var avgCol=table.column( 4 ).data();
	$.each(avgCol, function(index, item) {
	var avgVal = item.split('SLP');
	avgVal=avgVal[0].trim();
	tavg=tavg+parseInt(avgVal);
	tot++;
	});
	var totavg=tavg/tot;
	var taxie=0;
	var axieCol=table.column( 7 ).data();
	$.each(axieCol, function(index, item) {
	taxie=taxie+parseInt(item);
	});
	var tscholar=0;
	var scholarCol=table.column( 9 ).data();
	$.each(scholarCol, function(index, item) {
	var scholarVal = item.split('SLP');
	scholarVal=scholarVal[0].trim();
	tscholar=tscholar+parseInt(scholarVal);
	});
	var tmanager=0;
	var managerCol=table.column( 10 ).data();
	$.each(managerCol, function(index, item) {
	var managerVal = item.split('SLP');
	managerVal=managerVal[0].trim();
	tmanager=tmanager+parseInt(managerVal);
	});
	var ttotal=0;
	var totalCol=table.column( 11 ).data();
	$.each(totalCol, function(index, item) {
	var totalVal = item.split('SLP');
	totalVal=totalVal[0].trim();
	ttotal=ttotal+parseInt(totalVal);
	});
	var tlifetime=0;
	var lifetimeCol=table.column( 12 ).data();
	$.each(lifetimeCol, function(index, item) {
	var lifetimeVal = item.split('SLP');
	lifetimeVal=lifetimeVal[0].trim();
	tlifetime=tlifetime+parseInt(lifetimeVal);
	});
	$('#todaySLP').html(ttoday+' SLP');
	$('#yesterdaySLP').html(tyesterday+' SLP');
	$('#avgSLP').html(totavg.toFixed(2)+' SLP');
	$('#totalAxies').html(taxie);
	$('#scholarSLP').html(tscholar+' SLP');
	$('#managerSLP').html(tmanager+' SLP');
	$('#totalSLP').html(ttotal+' SLP');
	$('#lifetimeSLP').html(tlifetime+' SLP');
	$('#todayUSD').html((ttoday*rate).toFixed(2)+' USD');
	$('#yesterdayUSD').html((tyesterday*rate).toFixed(2)+' USD');
	$('#avgUSD').html((totavg*rate).toFixed(2)+' USD');
	$('#scholarUSD').html((tscholar*rate).toFixed(2)+' USD');
	$('#managerUSD').html((tmanager*rate).toFixed(2)+' USD');
	$('#totalUSD').html((ttotal*rate).toFixed(2)+' USD');
	$('#lifetimeUSD').html((tlifetime*rate).toFixed(2)+' USD');
}
var daily_slp = document.getElementById('daily-slp');
// Text label rotation
if(daily_slp) {

	// Generate chart
	var axis_tick_rotation = c3.generate({
		bindto: daily_slp,
		size: { height: 400 },
		data: {
			x : 'x',
			columns: [
			['x', 
			<?php foreach($allSLP as $daiSlp) { 	
				if($daiSlp->slp>0)	{
			?>
				'<?= $daiSlp->date ?>' ,
			<?php } } ?> ],
				['slp',<?php foreach($allSLP as $daiSlp) { 	
				if($daiSlp->slp>0)	{
				echo $daiSlp->slp ?> ,
				<?php }	} ?> ],
			],
			type: 'bar'
		},
		color: {
			pattern: ['#5ab1ef']
		},
		axis: {
			x: {
				type: 'category',
				tick: {
					rotate: -90
				},
				height: 80
			}
		},
		grid: {
			x: {
				show: true
			}
		}
	});

	// Resize chart on sidebar width change
	if (sidebarToggle) {
		sidebarToggle.forEach(function(togglers) {
			togglers.addEventListener('click', function() {
				axis_tick_rotation.resize();
			});
		});
	}
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