@extends('auth.includes.main')

@section('contentLogin')

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Registration form -->
                    <form method="POST" autocomplete="off" style="width:50%;" action="{{ route('register') }}">
                        @csrf
						<div class="row">
							<div class="col-lg-12">
								<div class="card mb-0">
									<div class="card-body">
										<div class="text-center mb-3">
											<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-pill p-3 mb-3 mt-1"></i>
											<h5 class="mb-0">Create account</h5>
											<span class="d-block text-muted">All fields are required</span>
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
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-muted"></i>
													</div>
											@error('first_name')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last name">
													<div class="form-control-feedback">
														<i class="icon-user-check text-muted"></i>
													</div>
											@error('last_name')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Your email">
													<div class="form-control-feedback">
														<i class="icon-mention text-muted"></i>
													</div>
											@error('email')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"placeholder="Your Username">
													<div class="form-control-feedback">
														<i class="icon-user-check text-muted"></i>
													</div>
												@error('username')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>
											</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="int" name="phone" id="phone" name="phone" class="form-custom @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
													<input readonly id="cname" class="form-custom2" value="{{ old('cname') }}" name="cname">
													<div class="form-control-feedback">
														<i class="icon-mention text-muted"></i>
													</div>
											@error('phone')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="int" name="mobile" id="mobile" onclick="eidt()" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" placeholder="Mobile">
													<div class="form-control-feedback">
														<i class="icon-mention text-muted"></i>
													</div>
											@error('mobile')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>
										</div>
    <input id="phonecode" name="phonecode" type="hidden">

										<div class="row">
											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}"placeholder="Create password">
													<div class="form-control-feedback">
														<i class="icon-user-lock text-muted"></i>
													</div>
											@error('password')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}" placeholder="Repeat password">
													<div class="form-control-feedback">
														<i class="icon-user-lock text-muted">
														
														</i>
													</div>
											@error('confirm_password')
											<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
											</span>
											@enderror
												</div>
											</div>
										</div>
						<div class="form-group row">
                            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
							@error('g-recaptcha-response')
							<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror
                        </div>

										<div class="form-group mb-0">
											
										</div>
									</div>

									<div class="card-footer bg-transparent text-right">
										<button type="submit" class="btn btn-teal btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- /registration form -->

				</div>
				<!-- /content area -->
<script>
  function eidt() {
  var readOnlyLength = $('#phonecode').val().length;
  $('#mobile').on('keypress, keydown', function(event) {
    if ((event.which != 37 && (event.which != 39)) &&
      ((this.selectionStart < readOnlyLength) ||
        ((this.selectionStart == readOnlyLength) && (event.which == 8)))) {
      return false;
    }
  });
}
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
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
							&copy; 2022. <a href="#">Ludufi-Web Portal</a>
						</span>

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
