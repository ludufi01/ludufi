@extends('includes.dashboard')


@section('content')
<?php
$axietotal = array_sum(array_column($finalData,'axietotal'));
$rawTotal = array_sum(array_column($finalData,'rawTotal'));
$total = array_sum(array_column($finalData,'total'));
$scholar = array_sum(array_column($finalData,'scholar'));
$manager = array_sum(array_column($finalData,'manager'));
$cnt = count($finalData);
//$axietotal=$rawTotal=$total=$scholar=$manager=$cnt=0;
?>
			<!-- Inner content -->
			<div class="content-inner">


				<!-- Content area -->
				<div class="content">
					<!-- Basic datatable -->
					<div class="row">
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Forecast</h5>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label>Today so far:</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
					<div class="card">
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
							@if(!empty($finalData))
								@foreach($finalData as $scholars)
									@if(isset($scholars['name']))
								<tr data-child-value='<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-primary" href="{{ url("home/".$scholars["roninAdd"]) }}" target="_blank">Details</a>
									<button class="btn btn-primary final-edit-data" data-value="{{  $scholars["ronin"] }}">Edit</button>
									<button class="btn btn-primary final-delete-data" data-value="{{  $scholars["ronin"] }}">Delete</button>
									<button class="btn btn-primary">Visit on Marketplace</button>
									<button class="btn btn-primary">View in ronin explorer</button>
								</div>
								</div>'>
									<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
									<td style='font-size: large;'>{{ $scholars['name'] }}</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td>
									<td style='font-size: large'>0/50</td>
									<td style='font-size: large;;font-weight: bold;' class='text-center'>{{ $scholars['elo'] }}<i class='icon-trophy3 ml-2'></i><br>~0.00 USD</td>
									<td style='font-size: large;'>
									@if(isset($scholars['axietotal']))
									{{ $scholars['axietotal'] }}
									@else
									0
									@endif</td>
									<td style='font-size: large;'>{{ $scholars['lastClaimedItemAt'] }}</td>
									<td  style='font-size: large;font-weight: bold;'class='text-center'>{{ $scholars['scholar'] }}<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['manager'] }}<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['total'] }}<br>~0.00 USD</td>
									<td style='font-size: large;font-weight: bold;' class='text-center'>{{ $scholars['rawTotal'] }}<br>~0.00 USD</td>
								</tr>
									@endif
								@endforeach
							@endif
							</tbody>
						</table>
					</div>
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
var scholar_name=$('input[name=scholar_name]').val();
var ronin_address=$('input[name=ronin_address]').val();
var manager_percentage=$('input[name=manager_percentage]').val();
var scholar_ronin_address=$('input[name=scholar_ronin_address]').val();

var trainee_percentage=$('input[name=trainee_percentage]').val();
var trainee_ronin_address=$('input[name=trainee_ronin_address]').val();
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
	  if(result.errors!='The ronin address has already been taken.'){
	 $('#modal_small').modal('hide');

	var row ="<tr data-child-value='<div class=row><div class=col-sm-12><a class=btncustom href={{ url('home') }}/"+result.data.roninAdd+" target=_blank>Details</a><button class=btncustom>Edit</button><button class=btncustom>Delete</button><button class=btncustom>Visit on Marketplace</button><button class=btncustom>View in ronin explorer</button></div></div>'><td class='details-control'><i style='color: blue;' class='icon-arrow-resize8 mr-3 icon-2x'></i></td><td style='font-size: large;'>"+result.data.name+"</td><td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>0 SLP<br>~0.00 USD</td><td style='font-size: large;'>0/50</td><td style='font-size: large;font-weight: bold;' class='text-center'>"+result.data.elo+"<i class='icon-trophy3 ml-2'></i><br>~0.00 USD</td><td style='font-size: large;'>"+result.data.axietotal+"</td><td style='font-size: large;'>"+result.data.lastClaimedItemAt+"</td><td  style='font-size: large;font-weight: bold;'class='text-center'>"+result.data.scholar+"<br>~0.00 USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>"+result.data.manager+"<br>~0.00 USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>"+result.data.total+"<br>~0.00 USD</td><td style='font-size: large;font-weight: bold;' class='text-center'>"+result.data.rawTotal+"<br>~0.00 USD</td></tr>"

	 
	 const tr = $(row);
	 table.row.add(tr[0]).draw();
  }	else {
	$('#data-ronin_address').html('Ronin Address Already Used');
  }	  }
  });
});
} );

$(document).on('click', '.final-edit-data', function(){
		var ronin=$(this).attr('data-value');

});

$(document).on('click', '.final-delete-data', function(){
		alert($(this).attr('data-value'));
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
