@extends('auth.includes.dashboard')


@section('content')

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light">
					<div class="page-header-content header-elements-lg-inline">
						<div class="page-title d-flex">
							<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Quiz</h4>
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
					
					<!-- Form inputs -->
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">AXIE INFINITY QUIZ</h5>
						</div>

						<div class="card-body">
						@if (Session::has('error'))
						<div class="alert alert-danger">
						<a href="#" class="close" data-dismiss="alert">×</a>
						<strong></strong>  {{ Session::get('error') }}
						</div>
						@endif
						@if (Session::has('success'))
						<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert">×</a>
						<strong></strong>  {{ Session::get('success') }}
						</div>
						@endif
						@if($status==0)
							<form method="POST" action="{{route('add-quiz')}}" enctype="multipart/form-data">
                        @csrf
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">1) Axie stat that adds bonus damage to combo attacks.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_1') is-invalid @enderror" name="question_1">
													<span class="custom-control-label">Attack</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_1') is-invalid @enderror" name="question_1">
													<span class="custom-control-label">Morale</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_1') is-invalid @enderror" name="question_1">
													<span class="custom-control-label">Skill</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_1') is-invalid @enderror" name="question_1">
													<span class="custom-control-label">Speed</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_1') is-invalid @enderror" name="question_1">
													<span class="custom-control-label">HP</span>
												</label>
											</div>
										</div>
									</div>
											@error('question_1')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
								</div>

	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">2) The Axie class has that highest morale.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_2') is-invalid @enderror" name="question_2">
													<span class="custom-control-label">Reptile</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_2') is-invalid @enderror" name="question_2">
													<span class="custom-control-label">Beast</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_2') is-invalid @enderror" name="question_2">
													<span class="custom-control-label">Plant</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_2') is-invalid @enderror" name="question_2">
													<span class="custom-control-label">Aqua</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_2') is-invalid @enderror" name="question_2">
													<span class="custom-control-label">Mech</span>
												</label>
											</div>
											@error('question_2')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">3) The Axie classes that the bug card skills deals additonal damage.(Select Multiple)</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="1" name="question_3[]" class="custom-control-input @error('question_3') is-invalid @enderror">
													<span class="custom-control-label">Plant</span>
												</label>

												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox"  value="2" name="question_3[]" class="custom-control-input @error('question_3') is-invalid @enderror">
													<span class="custom-control-label">Bug</span>
												</label>

												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="3" name="question_3[]" class="custom-control-input @error('question_3') is-invalid @enderror">
													<span class="custom-control-label">Aqua</span>
												</label>
											</div>

											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="4" name="question_3[]" class="custom-control-input @error('question_3') is-invalid @enderror">
													<span class="custom-control-label">Dusk</span>
												</label>

												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="5" name="question_3[]" class="custom-control-input @error('question_3') is-invalid @enderror">
													<span class="custom-control-label">Reptile</span>
												</label>

												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="6" name="question_3[]" class="custom-control-input @error('question_3') is-invalid @enderror">
													<span class="custom-control-label">Beast</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="7" name="question_3[]" class="custom-control-input @error('question_3') is-invalid @enderror">
													<span class="custom-control-label">Dawn</span>
												</label>
											</div>
											@error('question_3')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">4) The Axie class that has the highest speed</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_4') is-invalid @enderror" name="question_4">
													<span class="custom-control-label">Aqua</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_4') is-invalid @enderror" name="question_4">
													<span class="custom-control-label">Mech</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_4') is-invalid @enderror" name="question_4">
													<span class="custom-control-label">Dawn</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_4') is-invalid @enderror" name="question_4">
													<span class="custom-control-label">Bird</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_4') is-invalid @enderror" name="question_4">
													<span class="custom-control-label">Reptile</span>
												</label>
											</div>
											@error('question_4')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
								
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">5) The two debuffs that makes the incoming next attack ignores shield.(Select Multiple)</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="1" name="question_5[]" class="custom-control-input @error('question_5') is-invalid @enderror">
													<span class="custom-control-label">Aroma</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="2" name="question_5[]" class="custom-control-input @error('question_5') is-invalid @enderror">
													<span class="custom-control-label">Speed Down</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="3" name="question_5[]" class="custom-control-input @error('question_5') is-invalid @enderror">
													<span class="custom-control-label">Sleep</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="4" name="question_5[]" class="custom-control-input @error('question_5') is-invalid @enderror">
													<span class="custom-control-label">Weakness</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="5" name="question_5[]" class="custom-control-input @error('question_5') is-invalid @enderror">
													<span class="custom-control-label">Stun</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="6" name="question_5[]" class="custom-control-input @error('question_5') is-invalid @enderror">
													<span class="custom-control-label">Fragile</span>
												</label>
											</div>
											@error('question_5')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">6) Select all the buffs and debuffs that can be stacked.(Select Multiple)</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="1" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Aroma</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="2" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Poison</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="3" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Chill</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="4" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Weakness</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="5" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Burn</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="6" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Fragile</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="7" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Attack Up</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="8" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Speed Up</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="9" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Morale Down</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="10" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Morale Up</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="11" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Attack Down</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="12" name="question_6[]" class="custom-control-input @error('question_6') is-invalid @enderror">
													<span class="custom-control-label">Speed Down</span>
												</label>
											</div>
											@error('question_6')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">7) The Axie card that can cancel the healing abilities of an Axie.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_7') is-invalid @enderror" name="question_7">
													<span class="custom-control-label">Scarab curse</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_7') is-invalid @enderror" name="question_7">
													<span class="custom-control-label">Pincer</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_7') is-invalid @enderror" name="question_7">
													<span class="custom-control-label">Parasite</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_7') is-invalid @enderror" name="question_7">
													<span class="custom-control-label">Mystic</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_7') is-invalid @enderror" name="question_7">
													<span class="custom-control-label">Fish Snack</span>
												</label>
											</div>
											@error('question_7')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">8) The Axie card that can disable the melee cards of an Axie next round.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_8') is-invalid @enderror" name="question_8">
													<span class="custom-control-label">Vegan Diet</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_8') is-invalid @enderror" name="question_8">
													<span class="custom-control-label">Aqua Vitality</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_8') is-invalid @enderror" name="question_8">
													<span class="custom-control-label">Numbing lecreation</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_8') is-invalid @enderror" name="question_8">
													<span class="custom-control-label">Dual Blade</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_8') is-invalid @enderror" name="question_8">
													<span class="custom-control-label">Mystic</span>
												</label>
											</div>
											@error('question_8')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">9) The 2 Axie cards that can discard cards from your opponent hand.(Select Multiple)</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="1" class="custom-control-input @error('question_9') is-invalid @enderror" name="question_9[]">
													<span class="custom-control-label">Third glance</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="2" class="custom-control-input @error('question_9') is-invalid @enderror" name="question_9[]">
													<span class="custom-control-label">Mint</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="3" class="custom-control-input @error('question_9') is-invalid @enderror" name="question_9[]">
													<span class="custom-control-label">Sunder claw</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="4" class="custom-control-input @error('question_9') is-invalid @enderror" name="question_9[]">
													<span class="custom-control-label">Crimson Water</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="5" class="custom-control-input @error('question_9') is-invalid @enderror" name="question_9[]">
													<span class="custom-control-label">Koi</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="6" class="custom-control-input @error('question_9') is-invalid @enderror" name="question_9[]">
													<span class="custom-control-label">Piranha</span>
												</label>
											</div>
											@error('question_9')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">10) The card that makes an Axie target the Axie with lowest shield when comboed with 2 or more cards.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_10') is-invalid @enderror" name="question_10">
													<span class="custom-control-label">Indian Star</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_10') is-invalid @enderror" name="question_10">
													<span class="custom-control-label">Risky fish</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_10') is-invalid @enderror" name="question_10">
													<span class="custom-control-label">Navaga</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_10') is-invalid @enderror" name="question_10">
													<span class="custom-control-label">Spike throw</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_10') is-invalid @enderror" name="question_10">
													<span class="custom-control-label">Bookworm</span>
												</label>
											</div>
											@error('question_10')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">11) Is there any way to cancel the backdoor card combos of an opponent? If there is, explain how.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_11') is-invalid @enderror" name="question_11">
													<span class="custom-control-label">freeze your enery by chill </span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_11') is-invalid @enderror" name="question_11">
													<span class="custom-control-label">apply aroma to the enemy with backdoor cards</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_11') is-invalid @enderror" name="question_11">
													<span class="custom-control-label">use fragile against any enemy</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_11') is-invalid @enderror" name="question_11">
													<span class="custom-control-label">apply stun or fear to enemy with backdoor</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_11') is-invalid @enderror" name="question_11">
													<span class="custom-control-label">any other sentences</span>
												</label>
											</div>
											@error('question_11')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">12) What makes a Shrimpinator special?</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_12') is-invalid @enderror" name="question_12">
													<span class="custom-control-label">It can disable opponent.</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_12') is-invalid @enderror" name="question_12">
													<span class="custom-control-label">It can poison the enemy </span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_12') is-invalid @enderror" name="question_12">
													<span class="custom-control-label">It can target furthest enemy </span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_12') is-invalid @enderror" name="question_12">
													<span class="custom-control-label">It can discard the opponent cards</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="5" class="custom-control-input @error('question_12') is-invalid @enderror" name="question_12">
													<span class="custom-control-label">It can freeze the enemy and apply damage</span>
												</label>
											</div>
											@error('question_12')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">13) If your opponent has this kind of Axie, what are the card combos of this Axie that you must watch out for.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_13') is-invalid @enderror" name="question_13">
													<span class="custom-control-label">damage burst play</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_13') is-invalid @enderror" name="question_13">
													<span class="custom-control-label">Back door and Egg bomb play</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_13') is-invalid @enderror" name="question_13">
													<span class="custom-control-label">Combo using five cards</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_13') is-invalid @enderror" name="question_13">
													<span class="custom-control-label">Removal of debuffs</span>
												</label>
											</div>
											@error('question_13')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">14) What are the cards of a classic Terminator Axie? (Select Multiple)</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="1" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Biden</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="2" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Serious</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="3" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Chomp</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="4" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Raven</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="5" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Allergic reaction</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="6" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Bone Sail</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="7" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Confident</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="8" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Cute Bunny</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="9" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Sticky goo</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="10" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Mystic rush</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="11" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Hot Butt</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="12" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Shrimp</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="13" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Goldfish</span>
												</label>
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="14" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Turnip</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-checkbox mb-2">
													<input type="checkbox" value="15" class="custom-control-input @error('question_14') is-invalid @enderror" name="question_14[]">
													<span class="custom-control-label">Beech</span>
												</label>
											</div>
											@error('question_14')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">15) What makes the Disablesour Axie special?</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_15') is-invalid @enderror" name="question_15">
													<span class="custom-control-label">It has zero cost card which is effective in 1v3 situation</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_15') is-invalid @enderror" name="question_15">
													<span class="custom-control-label">The axie can deal a lot of damage in pvp </span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_15') is-invalid @enderror" name="question_15">
													<span class="custom-control-label">It can disable head and mouth card it can also stun enemy. </span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_15') is-invalid @enderror" name="question_15">
													<span class="custom-control-label">any other sentences</span>
												</label>
											</div>
											@error('question_15')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>

	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">16) What makes a triple bug signal cute bunny lineup special?</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_16') is-invalid @enderror" name="question_16">
													<span class="custom-control-label">It can deal lots of damage while applying fear to enemy</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_16') is-invalid @enderror" name="question_16">
													<span class="custom-control-label">It can steal energy and apply fear</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="3" class="custom-control-input @error('question_16') is-invalid @enderror" name="question_16">
													<span class="custom-control-label">strong combo cards will deal additional damage to plant and reptile</span>
												</label>
											</div>
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="4" class="custom-control-input @error('question_16') is-invalid @enderror" name="question_16">
													<span class="custom-control-label">any other sentences</span>
												</label>
											</div>
											@error('question_16')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
	        					<div class="col-lg-6">
	        						<p class="font-weight-semibold">17) If the opponent's aqua in this round is gonna Jump, what is the best move that you can use in this round.</p>
									<div class="border px-3 pt-3 pb-2 rounded">
										<div class="row">
											<div class="col-md-6">
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="1" class="custom-control-input @error('question_17') is-invalid @enderror" name="question_17">
													<span class="custom-control-label">You can apply fear to the shrimpnator using baloon.</span>
												</label>
												<label class="custom-control custom-control-secondary custom-radio mb-2">
													<input type="radio" value="2" class="custom-control-input @error('question_17') is-invalid @enderror" name="question_17">
													<span class="custom-control-label">any other sentences</span>
												</label>
											</div>
											@error('question_17')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
	    				
							<div class="row text-right" style="margin: 2%;">
								<div class="col-lg-6">
									<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
								</div>
							</div>
							</form>
							@elseif($status==1)
							<h1 class="text-center" style="color:#1e9f2e;font-weight:bold;">You have Passed The Exam Congrats.</h1>
							@endif
						</div>
					</div>
					<!-- /form inputs -->

				</div>
					
<script>

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