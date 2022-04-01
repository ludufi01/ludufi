@extends('auth.includes.dashboard')


@section('content')
<?php
//$axies = $data->data->axies->total;
?>
			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content">
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="tab-content">				
<!-- Axis tick rotation -->
<div class="row">
	<div class="col-sm-12">
	
	<!-- Basic datatable -->
					<?php $class=$breed=array(); ?>
					@if(!empty($data))
					@foreach($data as $axiedata)
					@if(!empty($axiedata['axie']->data->axies->results))
					@foreach($axiedata['axie']->data->axies->results as $axie)
					<?php $class[]=$axie->class; 
						  $breed[]=$axie->breedCount; 
					?>	
					@endforeach
					@foreach($axiedata['info'] as $nam)
					<?php $name[]=$nam->name; 
					?>	
					@endforeach
					@endif
					@endforeach
					<?php $clas=array_unique($class);
						  $bred=array_unique($breed); 
						  $naam=array_unique($name);  ?>
					@endif
		<div class="card">
			<div class="card-header text-right">
			<div class="row">
			<div class="col-sm-2 text-center">
				<label>Search by Class</label>
				<select id="searchClass" class="form-control">
				<option value="">All</option>
					@if(!empty($clas))
					@foreach($clas as $cls)
						<option value="{{ $cls }}">{{ $cls }}</option>
					@endforeach
					@endif
				</select>
			</div>
			<div class="col-sm-2 text-center">
				<label>Search by Owner</label>
				<select id="searchOwner" class="form-control">
				<option value="">All</option>
					@if(!empty($clas))
					@foreach($naam as $nama)
						<option value="{{ $nama }}">{{ $nama }}</option>
					@endforeach
					@endif
				</select>
			</div>
			<div class="col-sm-2 text-center">
				<label>Search by Breed</label>
				<select id="searchBreed" class="form-control">
				<option value="">All</option>
					@if(!empty($clas))
					@foreach($bred as $brd)
						<option value="{{ $brd }}">{{ $brd }}</option>
					@endforeach
					@endif
				</select>
			</div>
			</div></div>
			
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
					@foreach($data as $axiedata)
					@if(!empty($axiedata['axie']->data->axies->results))
					@foreach($axiedata['axie']->data->axies->results as $axie)
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
							{{ $axiedata['info'][0]->name }}<br><span style="font-weight: initial;font-size:11px">{{ Str::limit($axiedata['info'][0]->ronin_address,15, $end='....') }}</span>
						</td>
						<td style="font-weight: bold;width:9%">
						<input type="hidden" id="inputClass" value="{{ $axie->class }}">
						<i 
							@if($axie->class=='Plant')
							style="color: rgb(108 192 0);font-size: inherit;" class='fas fa-leaf mr-3 fa-2x'
							@elseif($axie->class=='Bug')
							style="color: rgb(255 83 65);font-size: x-large;" class='mi-bug-report'
							@elseif($axie->class=='Aquatic')
							style="color: rgb(0 184 206);font-size: inherit;" class='fas fa-fish mr-3 fa-2x'
							@endif
							></i>
							{{ $axie->class }}
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
					</div>
					
<script>
function format(value) {
      return value;
  }
  $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var searchClass =  $('#searchClass').val();
        var searchBreed =  $('#searchBreed').val();
        var searchOwner =  $('#searchOwner').val();
		var clas= data[3].trim();
		var bred= data[6].trim();
		var spl= data[2].trim().split('ronin');
		var name= spl[0]
		console.log(name);
        if ( (searchClass=='' && searchBreed=='' && searchOwner=='') || 
		( searchClass!='' && searchClass == clas && searchBreed=='' && searchOwner=='' ) ||
		( searchBreed!='' && searchBreed == bred && searchClass=='' && searchOwner=='' ) ||
		( searchOwner!='' && searchOwner == name && searchClass=='' && searchBreed=='' ) ||
		( searchBreed!='' && searchClass!='' && searchBreed == bred && searchClass == clas && searchOwner == '' ) ||
		( searchOwner!='' && searchClass!='' && searchOwner == name && searchClass == clas && searchBreed == '' ) ||
		( searchBreed!='' && searchOwner!='' && searchBreed == bred && searchOwner == name && searchClass == '' ) ||
		( searchBreed!='' && searchClass!='' && searchOwner!='' && searchBreed == bred && searchClass == clas && searchOwner == name )
		) 
        {
            return true;
        }
        return false;
    }
);
  $(document).ready(function () {
      var table = $('#example').DataTable({});
	  
    // Event listener to the two range filtering inputs to redraw on input
    $('#searchClass,#searchBreed,#searchOwner').change( function() {
        table.draw();
    } );

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
			</div>

		
@endsection