<!--Sidebar -->
<nav id="sidebar">
	<ul class="list-unstyled components">

		<li class="">
			@if(count($auths) > 0 )
				@foreach($auths as $auth)
					@if($auth->parent_id == 0)
					<a href="#{{ $auth->id }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-align: center"><img style="height: 70px;">{{ $auth->name }}</a>
					@else
					<ul class="collapse list-unstyled" id="{{$auth->parent_id}}">

						<li class="">
							<a href="/{{$auth->path}}"><img src="{{$auth->icon}}" style="height: 20px; margin-right: 10px;">{{ $auth->name }}</a>
							
						</li>
					</ul>
					@endif
				@endforeach
			@endif
		</li>

	</ul>

	<ul class="list-unstyled CTAs">
		<li>
			<a class="btn btn-outline-primary" href="#">Log Out</a>
		</li>
	</ul>
</nav>
<!-- Sidebar -->