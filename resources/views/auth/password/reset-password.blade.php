@extends('auth.includes.main')

@section('contentLogin')
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Password recovery form -->
                    <form method="POST" style="width:20%;" action="{{ route('reset-pass') }}">
                           @csrf
						<div class="card mb-0">
							<div class="card-body">
							
								<div class="text-center mb-3">
									<i class="icon-verification icon-2x text-warning border-warning border-3 rounded-pill p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Reset Password</h5>
									<span class="d-block text-muted">Enter Password</span>
								</div>
								@if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
@if(session()->has('status'))
   <div class="alert alert-warning">
		{{ session()->get('status') }}
	</div>
@endif
@if(session()->has('success'))
   <div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
@endif
								<div class="form-group form-group-feedback form-group-feedback-right">
									<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
									<div class="form-control-feedback">
										<i class="icon-password text-muted"></i>
									
									</div>	
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-group form-group-feedback form-group-feedback-right">
									<input type="password" name="confirm_password" class="form-control" placeholder="Re-Enter Password">
									<div class="form-control-feedback">
										<i class="icon-password text-muted"></i>
										
                                @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>
								</div>

								<button type="submit" class="btn btn-primary btn-block"><i class="icon-spinner11 mr-2"></i> Submit Password</button>
							</div>
						</div>
					</form>
					<!-- /password recovery form -->

				</div>
				<!-- /content area -->


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
						</span>
							&copy; 2022. <a href="#">Ludufi-Web Portal</a>

						<ul class="navbar-nav ml-lg-auto">
							
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

@endsection
