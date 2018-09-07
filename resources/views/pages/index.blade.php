@extends('layouts.app')

@section('content')

@include('inc.table')

<script type="text/javascript">
	$(document).ready(function(){
		$('.datatable').DataTable();
	});
</script>

@endsection