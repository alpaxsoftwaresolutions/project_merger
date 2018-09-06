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
		padding: 0px;
	}
}

.carousel-background{
	height: 100vh;
}

</style>

<div class="fluid w-100">
	<div class="row" style="margin-left: 0px; margin-right: 0px;">

		<div id="design" class="col-lg-8 col-md-12 col-xs-12 col-sm-12 bg-light" style="height: 100vh; padding-right: 0; padding-left: 0;">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="height: 100vh">
				<div class="carousel-inner">

					<div class="carousel-item active">
						<img class="img-responsive carousel-background" src="{{asset('img/carousel/fast.jpg')}}">
						<div class="carousel-caption text-white" style="text-align: right;">
							<h1>Fast</h1>
							<h6></h6>
						</div>
					</div>

					<div class="carousel-item">
						<img class="img-responsive carousel-background" src="{{asset('img/carousel/fast2.jpg')}}">
						<div class="carousel-caption text-white" style="text-align: right;">
							<h1>Convinient</h1>
							<h6></h6>
						</div>
					</div>

					<div class="carousel-item">
						<img class="img-responsive carousel-background" src="{{asset('img/carousel/fast1.jpg')}}">
						<div class="carousel-caption text-white" style="text-align: right;">
							<h1>Reliable</h1>
							<h6></h6>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div id="login" class="col-lg-4 col-md-12 col-xs-12 col-sm-12 bg-white p-50" style="height: 100vh; padding: 50px; ">
			<div class="row mt-5 mb-5">
				<div class="col-lg-12">

					<form id="login_form" method="POST">

						<h1>Ez Pay Plus</h1>

						<img src="{{asset('img/logo/ezpayplus.svg')}}" style="height: 50px;">

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
							<button class="btn bg-orange btn-block">LOG IN</button>
						</div>
						
					</form>

				</div>
			</div>

			<div class="mt-5 mb-5" style="bottom: 0; position: absolute; padding: 10px">
				<div class="row">
					<br><img src="{{asset('img/logo/alpax_logo.svg')}}" style="height: 25px; margin-right: 5px; margin-left: 5px"><span class="text-muted">ALPAX Software Solutions</span>
				</div>
			</div>

		</div>

	</div>

	<script type="text/javascript">
		
	</script>
	@endsection