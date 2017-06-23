@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="{{ asset('storage/'.$song['image'] ) }}" alt=" {{ $song['title'] }} " >
				<div class="caption">
					<p>
						<a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a> &nbsp; 
						<a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-thumbs-down"></span></a> &nbsp;
						@if(Auth::user()->status == "admin")
							<a class="btn btn-danger" href="{{ route('songs.edit', $song['id']) }}"><span class="glyphicon glyphicon-pencil"></span></a>
						@endif
					</p>
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<h3> Title: {{ $song['title'] }} </h3>
			@if (empty($song['album']))
			<h3> No Album </h3>
			@endif
			<h3> Album: {{ $song['album'] }} </h3>
			<p> Think Groovy, Traditional Beat, and an awesome voice. That's what we have here </p>				
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<h3>&nbsp; Leave a Review</h3>
		<form action="" method="post">
			{{ csrf_field() }}
			<div class="col-md-4">
				<div class="form-group">
					<label for="name">Enter Name</label>
					<input class="form-control" type="text" name="name" value="{{ old('name') }}" required/>
					@if($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>	
					@endif	
				</div>

				<input type="hidden" name="song_id" value="">
				
				<div class="form-group">
					<label for="review">Review</label>
					<textarea class="form-control" name="review" rows="8"></textarea>
					@if($errors->has('review'))
						<span class="help-block">
							<strong>{{ $errors->first('body') }}</strong>
						</span>
					@endif
				</div>
				<button class="form-control btn btn-default" type="submit" name="" > Submit </button>
			</div>
		</form>
	</div>	
</div>
<br>
<hr>
<br>

@stop