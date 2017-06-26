
	@if(session()->has('success'))
		<div class="row">
			<div class="alert alert-success alert-dismissable" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3> {{ session()->get('success') }} </h3>
					<p> View the song <a href="{{ route('song', session()->get('songId')) }}">over here.</a> </p>
			</div>
		</div>	
	@endif

	@if(session()->has('message'))
		<div class="row">
			<div class="alert alert-info" role="alert">
				<h3> {{ session()->get('message') }} </h3>
			</div>
		</div>	
	@endif

