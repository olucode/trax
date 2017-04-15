@extends('layouts.navbar')


{{-- Start Main Body Content  --}}
@section('content')
<div>
	<div class="container-fluid no-spacing">
		<h2> Popular This Week </h2>

		<div class="row">
			<div class="col-md-4 col-sm-6">
				<h3> Most Played </h3>
				{{--@unless(empty($songs))
					@for ($i = 0; $i < 3 ; $i++)
						<h4> {{ ($i + 1)}}. {{ $songs[$i]->artist }} - {{ $songs[$i]->title }} </h4>
					@endfor
				@endunless--}}
			</div>
			<div class="col-md-4 col-sm-6">
				<h3> New Releases </h3>				
				@for($i = 0; $i < 3; $i++ )
					<p> <a href="{{ route('song', $songs[$i]->id) }}"> {{ $songs[$i]->title }} - {{ $songs[$i]->artist }}</a> </p>
				@endfor
			</div>
			<div class="col-md-4 col-sm-6">
				<h3> Trending Discussions </h3>

			</div>
		</div>
	</div>
</div>

<div>
	<div class="container-fluid no-spacing">
		<h2> Daily Dose </h2>

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