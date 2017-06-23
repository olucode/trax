@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<h3> This is a list of all the genres on the site</h3>
	<h3> Select a genre to continue </h3>
</div>
<div class="container-fluid">
	<div class="row">
	@foreach ($genres as $genre)
		<div class="col-md-2 col-sm-5 panel panel-default">
			<a href="{{ route('genre',$genre) }}">
			<div class="panel-body">
				<h3> {{ $genre }} </h3>
			</div>
			</a>
		</div>	
	@endforeach
	</div>
</div>	

@stop