@extends('layouts.master')

@section('content')
	<div class="container-fluid">
		@if(Auth::user()->is_admin)
			<div class="row">
				@include('layouts.partials._listSongs')
			</div>
			{{ $songs->links() }}
		@else
				<div class="row">
						<div class="col-md-6">
							<div class="alert alert-warning" role="alert">
							<h3> Sorry, You are not allowed to view this section.</h3>
							</div>		
						</div>
				</div>
		@endif
	</div>	
@stop