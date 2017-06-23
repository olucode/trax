<!DOCTYPE html>
<html>

<head>

	{{-- To goverride the title on particular pages --}}
	@section('title')
		<title> TRAX || Review Your Music </title>
	@show
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0 " >
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	@section('stylesheet')
	<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
	<style type="text/css">
		.navbar-profile-img{
			width: 32px;
			height: 32px;
			position: absolute;
			top: 10px;
			left: 10px;
			border-radius: 50%;
			padding-bottom: 5px;
		}
	</style>
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}"> --}}
	@show

	<script type="text/javascript">
		$.ajaxSetup({
			headers: {'X-CSRF-TOKEN':$('meta[name = "csrf-token"]').attr('content') }
		});
	</script>
</head>

<body>
	{{-- Start Navigation Bar --}}
	@include('layouts.partials._navbar')
	{{-- End Navigation Bar --}}

	{{-- Start body content here --}}
	@yield('content')
	{{-- End body content here --}}

</body>

<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js') }}"> </script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script>

</html>