@extends('layouts.master')

@section('content')

  @section('genreName')

  @unless (empty($songs))
	<div class="container-fluid">
	  <div class="row">
		<div class="text-center">
		  <h3> This is a list of all the tracks under {{ $genre->name }} </h3> 
		</div>
	  </div>
	</div>
  @endunless

  @show

  <div class="container-fluid">
	<div class="row">
	  @include('layouts.partials._listSongs')
	</div>
  </div>
@stop
