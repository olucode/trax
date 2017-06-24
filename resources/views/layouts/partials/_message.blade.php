<div class="col-md-6">
	@if(session()->has('success'))
		<div class="alert alert-success" role="alert">
			<h3> {{ session()->get('success') }} </h3>
			@if(session()->has('song'))
				<p> View the song <a href="{{ route('song', $song->id) }}">over here.</a> </p>
			@endif
		</div>
	@endif

	@if(session()->has('message'))
		<div class="alert alert-info" role="alert">
			<h3> {{ session()->get('message') }} </h3>
		</div>
	@endif
</div>
