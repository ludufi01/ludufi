@extends('auth.includes.dashboard')


@section('content')
<?php
$rawTotal = $data['rawTotal'];
$todaySlp = $data['todaySlp'];
$yesterdaySlp = $data['yesterdaySlp'];
$avgSLP = $avgSLP[0]->slp;
$total = $data['total'];
$scholar = $data['scholar'];
$manager = $data['manager'];
$rank = $data['rank'];
$elo = $data['elo'];
$perwin = $data['perwin'];
$axies = $data['axietotal']->data->axies->total;
?>
			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light">
					<div class="page-header-content header-elements-lg-inline">
						<div class="page-title d-flex">
							<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{ $data['name'] }}</h4>
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
											<div class="mr-3 align-self-center">
												<i class="icon-mailbox icon-3x text-success"></i>
											</div>

											<div class="media-body text-right">
												<h3 class="font-weight-semibold mb-0">Today's SLP</h3>
												<span style="font-weight: bold;font-size: larger;" class="text-uppercase font-size-sm">~{{ number_format($todaySlp) }}</span>
												<br><span class="text-uppercase font-size-sm text-muted">~{{ number_format($todaySlp*$rate,2) }} USD</span>
											</div>
										</div>
									</div>
								<!--<div class="card card-body">
									<div class="media">
										<div class="mr-3 align-self-center">
											<i class="icon-mailbox icon-3x text-success"></i>
										</div>

										<div class="media-body text-right">
											<h3 class="font-weight-semibold mb-0">Unclaimed SLP</h3>
											<span class="text-uppercase font-size-sm text-muted">0</span>
											<br><span class="text-uppercase font-size-sm text-muted">0.00USD</span>
										</div>
									</div>
								</div>-->
							</div>
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
										<div class="media">
											<div class="mr-3 align-self-center">
												<i class="icon-mailbox icon-3x text-success"></i>
											</div>

											<div class="media-body text-right">
												<h3 class="font-weight-semibold mb-0">Yesterday's SLP</h3>
												<span style="font-weight: bold;font-size: larger;" class="text-uppercase font-size-sm">~{{ number_format($yesterdaySlp) }}</span>
												<br><span class="text-uppercase font-size-sm text-muted">~{{ number_format($yesterdaySlp*$rate,2) }} USD</span>
											</div>
										</div>
									</div>
							</div>

							<!--<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="mr-3 align-self-center">
											<i class="icon-mailbox icon-3x text-indigo"></i>
										</div>

										<div class="media-body text-right">
											<h3 class="font-weight-semibold mb-0">Ronin Account</h3>
											<span class="text-uppercase font-size-sm text-muted">0</span>
										</div>
									</div>
								</div>
							</div>-->

							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Scholar</h3>
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ $scholar }}</span>
											<br><span class="text-uppercase font-size-sm text-muted">{{ number_format($scholar*$rate,2) }} USD</span>
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
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ number_format($manager) }}</span>
											<br><span class="text-uppercase font-size-sm text-muted">{{ number_format($manager*$rate,2) }} USD</span>
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
											<span class="text-uppercase font-size-sm text-muted">{{ number_format($avgSLP,2)}}</span>
											<br><span class="text-uppercase font-size-sm text-muted">{{ number_format($avgSLP*$rate,2)}}USD</span>
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
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ number_format($total) }}</span>
											<br><span class="text-uppercase font-size-sm text-muted">~{{ number_format($total*$rate,2) }} USD</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-coin-dollar icon-3x text-danger"></i>
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
											<h3 class="font-weight-semibold mb-0">Ranking</h3>
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ number_format($rank) }}</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-color-sampler icon-3x text-warning"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">Win Rate (PVP)</h3>
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase font-size-sm">{{ number_format($data['winrate'],1) }}%</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-medal-star icon-3x text-danger"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-xl-4">
								<div class="card card-body">
									<div class="media">
										<div class="media-body">
											<h3 class="font-weight-semibold mb-0">ELO</h3>
											<span style="font-weight: bold;font-size: larger;" class="text-uppercase">{{ number_format($elo) }}</span>
											<br><span class="text-uppercase font-size-sm text-muted">~{{ $perwin }} SLP/win</span>
										</div>

										<div class="ml-3 align-self-center">
											<i class="icon-trophy2 icon-3x text-primary"></i>
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
									<h4 class="font-weight-semibold mb-0">Total Axies    </h4>
									</div>
									<div class="col-xl-4 text-right"><span style="font-size: x-large;font-weight: bold;">{{ number_format($axies) }}</span>
									</div>
								</div>
								<!--<div class="d-flex">
									<div class="col-xl-10">
									<h4 class="font-weight-semibold mb-0">Energy / day <i class="icon-power2 mr-3 icon-2x" style="color: rgb(255 200 61);"></i></h4></div>
									<div class="col-xl-2 text-right"><span style="font-size: x-large;font-weight: bold;"></span>
									</div>
								</div>-->
								<div class="d-flex">
									<div class="col-xl-8">
									<h4 class="font-weight-semibold mb-0">Lifetime SLP   </h4></div>
									<div class="col-xl-4 text-right"><span style="font-size: x-large;font-weight: bold;">{{ number_format($rawTotal) }} </span><br>
										<span>~{{ number_format($rawTotal*$rate,2) }} USD</span>
									</div>
								</div>
							</div>						</div>
						<!-- /basic area chart -->

					</div>
				
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<ul class="nav nav-tabs nav-tabs-solid nav-tabs-solid-custom bg-secondary rounded">
										<li class="nav-item"><a href="#colored-rounded-tab1" class="nav-link active rounded-left" data-toggle="tab">Overview</a></li>
										<li class="nav-item"><a href="#colored-rounded-tab2" class="nav-link" data-toggle="tab">Battles</a></li>
										<li class="nav-item"><a href="#colored-rounded-tab3" class="nav-link" data-toggle="tab">Wallet</a></li>
										<li class="nav-item"><a href="#colored-rounded-tab4" class="nav-link" data-toggle="tab">Notes</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane fade show active" id="colored-rounded-tab1">
						
<!-- Axis tick rotation -->
<div class="row">
<div class="col-sm-6">
<div class="card">
	<div class="card-header">
		<h5 class="card-title">Daily SLP</h5>
	</div>

	<div class="card-body">
		<div class="chart-container">
			<div class="chart" id="daily-slp"></div>
		</div>
	</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
	<div class="card-header">
		<h5 class="card-title">Rank & Elo</h5>
	</div>

	<div class="card-body">
		<div class="chart-container">
			<div class="chart" id="c3-axis-tick-rotation"></div>
		</div>
	</div>
</div>
</div>
</div>
<div class="row">
	<div class="col-sm-12">
	<!-- Basic datatable -->
		<div class="card">
			<div class="card-header text-right">
			</div>

			<table id="example" class="table datatable-basic">
				<thead style="background: #99999f;color: white;">
					<tr>
						<th></th>
						<th>Name</th>
						<th>Owner</th>
						<th>Class</th>
						<th>Stats</th>
						<th>Purity</th>
						<th>Breed</th>
						<th>Find Similar Axie</th>
					</tr>
				</thead>
				<tbody>
				@if(!empty($data))
					@foreach($data['axietotal']->data->axies->results as $axie)
					<tr data-child-value='<div style="background-color:rgb(250 249 250)" class="row">
					<div style="background-color:rgb(250 249 250)" class="col-sm-6">
					<div style="background-color:rgb(250 249 250)" class="card">
					<h4 style="background-color:rgb(250 249 250);margin: 2%;">Body Parts</h4>
					<div class="row text-center" style="margin: 2%;">
					@foreach($axie->parts as $parts)
					<div class="col-sm-4">
						<i style="color: #01b49a;" @if($parts->type=="Eyes") class="fas fa-eye mr-3 fa-2x" @elseif($parts->type=="Ears") class="mi-hearing" @elseif($parts->type=="Back") class="fab fa-wolf-pack-battalion mr-3 fa-2x" @elseif($parts->type=="Mouth") class="fas fa-teeth-open mr-3 fa-2x" @elseif($parts->type=="Horn") class="fab fa-hornbill mr-3 fa-2x" @elseif($parts->type=="Tail") class="fas fa-kiwi-bird mr-3 fa-2x" @endif ></i><br><span style="font-size: large;font-weight: bolder;">{{ $parts->name }}</span>
					</div>
					@endforeach
					</div></div>
					</div>
					<div style="background-color:rgb(250 249 250)" class="col-sm-6">
					<div style="background-color:rgb(250 249 250)" class="card">
					<h4 style="background-color:rgb(250 249 250);margin: 2%;">GENETIC</h4>
					<div class="row text-center">
					<div class="col-sm-4">
					<label class="col-lg-12">D</label>
					@foreach($axie->parts as $parts)
					<label style="color: #01b49a;" class="col-lg-12">
					{{ $parts->name }}
					</label>
					@endforeach
					</div></div></div></div>
					</div>'>
						<td class="details-control"><i style="color: blue;" class="icon-arrow-resize8 mr-3 icon-2x"></i></td>
						<td style="font-weight: bold;" class="dt-control">
						<img src="{{ $axie->image }}" width="75px" alt="new">
							{{ $axie->name }}<br>{{ $axie->id }}
						</td>
						<td style="font-weight: bold;">
							{{ $data['name'] }}<br>{{ $data['ronin'] }}
						</td>
						<td style="font-weight: bold;width:9%">
							<i 
							@if($axie->class=='Plant')
							style="color: rgb(108 192 0);font-size: inherit;" class='fas fa-leaf mr-3 fa-2x'
							@elseif($axie->class=='Bug')
							style="color: rgb(255 83 65);font-size: x-large;" class='mi-bug-report'
							@elseif($axie->class=='Aquatic')
							style="color: rgb(0 184 206);font-size: inherit;" class='fas fa-fish mr-3 fa-2x'
							@endif
							></i>{{ $axie->class }}
						</td>
						<td style="font-weight: bold;width:15%">
							<i style="color: rgb(58 194 121)" class='icon-heart5'></i>{{ $axie->stats->hp}}
							<i style="color: rgb(106 58 194)" class='icon-star-full2'></i>{{ $axie->stats->speed}}
							<i style="color: rgb(247 172 10)" class='icon-power3'></i>{{ $axie->stats->skill}}
							<i style="color: rgb(194 58 58)" class='icon-fire'></i>{{ $axie->stats->morale}}
						</td>
						<td style="font-weight: bold;">
							Purity
						</td>
						<td style="font-weight: bold;">
							{{ $axie->breedCount }}
						</td>
						<td style="font-weight: bold;">
							{{ $axie->breedCount }}
						</td>
					</tr>
					@endforeach
				@endif
				</tbody>
			</table>
		</div>
	<!-- /basic datatable -->
	</div>
</div>
<!-- /axis tick rotation -->
										</div>

										<div class="tab-pane fade" id="colored-rounded-tab2">
<div class="row">
	<div class="col-sm-12">
	<!-- Basic datatable -->
		<div class="card">
			<div class="card-header text-right">
			</div>

			<table class="table battle-datatable" id="example2">
				<thead style="background: #99999f;color: white;">
					<tr>
						<th>Timestamp</th>
						<th>Type</th>
						<th>My Team</th>
						<th>Result</th>
						<th>Opponent</th>
						<th>Watch</th>
					</tr>
				</thead>
				<tbody>
				@if(!empty($data['battles1']->battles))
					@foreach($data['battles1']->battles as $battle)
				
						@if(!empty($battle->eloAndItem))
							@foreach($battle->eloAndItem as $eloAndItem)
								@if($data['ronin']==$eloAndItem->player_id)
<?php 
								$result=ucfirst($eloAndItem->result_type);
if(isset($eloAndItem->_items[0]->amount))	{								
$winAmount=$eloAndItem->result_type=='win' || $eloAndItem->result_type=='draw' ? $eloAndItem->_items[0]->amount : 0;
}	else {
	$winAmount=0;
}
								$myOldElo=$eloAndItem->old_elo;
								$Diff=$eloAndItem->new_elo-$myOldElo;
								
?>								@else
<?php
								$oldElo=$eloAndItem->old_elo;
								
?>
								@endif
							@endforeach 
						@else
							<?php $Diff=$winAmount=0;  ?>
						@endif
						<?php $dateafter=explode('T',$battle->game_started) ?>
					<tr>
						<td>{{ $dateafter[0] }}</td>
						<td>Undefined</td>
						<td style="width:23%;font-size: large;font-weight: bold;" class="text-center">@if($battle->first_client_id==$data['ronin'])
							<div>{{ $myOldElo ?? '' }}
							<?php echo $Diff>0 ?  '<span style="color:green">('.$Diff.')</span>'  : '<span style="color:red">('.$Diff.')</span>'; ?>
							</div><div>
							@foreach($battle->first_team_fighters as $axies)<a target="_blank" href="https://marketplace.axieinfinity.com/axie/{{ $axies }}"><img width="75px" src="https://storage.googleapis.com/assets.axieinfinity.com/axies/{{ $axies }}/axie/axie-full-transparent.png">
							@endforeach	</div>
							@elseif($battle->second_client_id==$data['ronin'])
							<div>{{ $myOldElo ?? '' }}
							<?php echo $Diff>0 ?  '<span style="color:green">('.$Diff.')</span>'  : '<span style="color:red">('.$Diff.')</span>'; ?>
							</div><div>
							@foreach($battle->second_team_fighters as $axies)<a target="_blank" href="https://marketplace.axieinfinity.com/axie/{{ $axies }}"><img width="75px" src="https://storage.googleapis.com/assets.axieinfinity.com/axies/{{ $axies }}/axie/axie-full-transparent.png">
							@endforeach	</div>
							@endif</td>
						<td style="font-size: large;font-weight: bold;" class="text-center"><div>{{ $result ?? '' }}</div><div><?= $winAmount==0 ? '' : $winAmount.' SLP'; ?></div></td>
						<td style="width:23%;font-size: large;font-weight: bold;" class="text-center">@if($battle->second_client_id!=$data['ronin'])
							<div>{{ $oldElo ?? '' }}
							<?php echo $Diff>0 ?  '<span style="color:red">(-'.$Diff.')</span>'  : '<span style="color:green">('.abs($Diff).')</span>'; ?>
							</div><div>
							@foreach($battle->second_team_fighters as $axies)<a target="_blank" href="https://marketplace.axieinfinity.com/axie/{{ $axies }}"><img width="75px" src="https://storage.googleapis.com/assets.axieinfinity.com/axies/{{ $axies }}/axie/axie-full-transparent.png">
							@endforeach </div>
							@elseif($battle->first_client_id!=$data['ronin'])
							<div>{{ $oldElo ?? '' }}
							<?php echo $Diff>0 ?  '<span style="color:red">(-'.$Diff.')</span>'  : '<span style="color:green">('.abs($Diff).')</span>'; ?></span>
							</div><div>
							@foreach($battle->first_team_fighters as $axies)<a target="_blank" href="https://marketplace.axieinfinity.com/axie/{{ $axies }}"><img width="75px" src="https://storage.googleapis.com/assets.axieinfinity.com/axies/{{ $axies }}/axie/axie-full-transparent.png">
							@endforeach @endif</div></td>
						<td style="width: 20%;" class="text-center"><div><button class="btn btn-success">Watch Video</button></div><div>You must have the Axie game installed. This is 100% secure and your account will stay safe.</div></td>
					</tr>
					@endforeach
				@endif
				</tbody>
			</table>
		</div>
	<!-- /basic datatable -->
	</div>
</div>
											
										</div>

										<?php	
										$roninAdd=explode('x',$data['ronin']);
										$ronin='ronin:'.$roninAdd[1];
										?>
										<div class="tab-pane fade" id="colored-rounded-tab3">
										<p>The Ronin Address is {{$ronin}}</p>
										</div>

										<div class="tab-pane fade" id="colored-rounded-tab4">
										<p>The Ronin Address is {{$ronin}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
<script>
function format(value) {
      return value;
  }
  $(document).ready(function () {
      var table = $('#example').DataTable({});
      //var table2 = $('#example2').DataTable({"order": [[ 0, "desc" ]]});
      var battleTable = $('.battle-datatable').DataTable({"order": [[ 0, "desc" ]]});

      // Add event listener for opening and closing details
      $('#example').on('click', 'td.details-control', function () {
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
	  
  });

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
			<?php foreach($data['daiSLP'] as $daiSlp) { 
				$dte=explode('-',$daiSlp->ddate);
				
			?>
				'<?= $dte[2]."/".$dte[1] ?>' ,
			<?php } ?> ],
				['slp',<?php foreach($data['daiSLP'] as $daiSlp) { 
				echo $daiSlp->amount ?> ,
			<?php } ?> ],
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