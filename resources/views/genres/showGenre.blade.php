@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<h3> This is a list of all the genres on the site</h3>
	<h3> Select a genre to continue </h3>
</div>
<div class="container-fluid">
	<div class="row">
	@foreach ($genres as $genre)
		<div class="col-md-2">
			<div class="panel panel-default">
				<a href="{{ route('songsUnderGenre', $genre->name) }}">
				<div class="panel-body">
					<h3> {{ $genre->name }} </h3>
				</div>
				</a>
			</div>
		</div>	
	@endforeach
	</div>
</div>	

@stop