@extends('layouts.app')

@section('content')

<style type="text/css">

@media(max-width: 986px){
	#design{
		display: none;
	}

	#login_form{
		padding: 0px;
	}
}

@media(min-width: 990px){
	#login_form{
		padding: 50px;
	}
}

</style>

<div class="fluid w-100">
	<div class="row" style="margin-left: 0px; margin-right: 0px;">
		<div id="design" class="col-lg-8 col-md-12 col-xs-12 col-sm-12 bg-dark" style="height: 100vh;">
		</div>

		<div id="login" class="col-lg-4 col-md-12 col-xs-12 col-sm-12 bg-white p-50" style="height: 100vh; padding: 50px; ">
			<div class="row mt-5 mb-5">
				<div class="col-lg-12">

					

					<form id="login_form" method="POST">

						<img src="{{asset('img/logo/alpax_logo.svg')}}" style="height: 8vh; margin-top: 20px; margin-bottom: 20px;">

					<h4>ALPAX Software Solutions</h4>

						<hr>

						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="uname">
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>

						<hr>

						<div class="form-group">
							<button class="btn btn-primary btn-block">LOG IN</button>
						</div>

						
					</form>

					

				</div>
			</div>

		</div>
	</div>
	@endsection