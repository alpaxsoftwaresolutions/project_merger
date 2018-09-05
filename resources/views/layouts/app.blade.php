<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/color.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">

	<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/animate.min.js')}}"></script>

	<title>{{config('app.name', 'Merger')}}</title>

</head>
<body>

	<div class="wrapper">
		@include('inc.sidebar')

		<div id="content">

			@include('inc.navbar')

			@include('inc.title')

			@yield('content')

		</div>

	</div>

	

</body>


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function () {

		var interval = setInterval(function() {
			var momentNow = moment();
			$('#date').html(momentNow.format('MMMM DD, YYYY') + ' - '
				/*+ momentNow.format('dddd ')*/
				.substring(0,9));
			$('#time').html(momentNow.format('hh:mm:ss A'));
		}, 100);

		$('#sidebarCollapse').on('click', function () {
			$('#sidebar').toggleClass('active');
			$(this).toggleClass('active');
		});

	});
</script>

</html>
