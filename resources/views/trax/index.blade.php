@extends('layouts.master')

{{-- Start Main Body Content  --}}
@section('content')
<div>
	<div class="container-fluid no-spacing">
		<h2 class="text-center"> Popular This Week </h2>

		<div class="row">
			<div class="col-md-4">
				<h3> Most Played </h3>

			</div>
			<div class="col-md-4">
				<h3> New Releases </h3>				
			</div>
			<div class="col-md-4">
				<h3> Trending Discussions </h3>

			</div>
		</div>
	</div>
</div>

<div>
	<div class="container-fluid no-spacing">
		<h2 class="text-center"> Daily Dose </h2>

		<div class="row">
			<div class="col-md-4  col-sm-6">
				<h3> Curious California Crashes</h3>
				<p> Shocking news this weekend as the now infamous Delaware RedZone imploded due to <a href="#"> Read More..</a> </p>	
			</div>
			<div class="col-md-4  col-sm-6">
				<h3> Disney's Future Stars</h3>
				<p> It's certainly been a time of ripe and fruitful profit for Disney channel as their kid stars bagged <a href="#"> Read More..</a> </p>	
			</div>
			<div class="col-md-4 col-sm-6">
				<h3> Crying Mars</h3>
				<p> The Uptown Funk crooner recently broke down in tears in an interview with <a href="#"> Read More..</a></p>	
			</div>
		</div>
	</div>
</div>
@stop
{{-- End Main Body Content --}}