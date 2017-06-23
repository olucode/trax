@extends('layouts.master')

@section('content')
<div class="container">
	<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('songs.store') }}">
		{{ csrf_field() }}

		<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
			<label for="title" class="col-md-4 control-label"> Title of the Song </label>

			<div class="col-md-6">
				<input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

				@if ($errors->has('title'))
				<span class="help-block">
					<strong>{{ $errors->first('title') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('artist') ? 'has-error' : '' }}">
			<label for="artist" class="col-md-4 control-label"> Artist  </label>

			<div class="col-md-6 ">
				<input id="artist" type="text" class="form-control" name="artist" value="{{ old('artist') }}" required>

				@if ($errors->has('artist'))
				<span class="help-block">
					<strong>{{ $errors->first('artist') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('album') ? 'has-error' : '' }}">
			<label for="album" class="col-md-4 control-label"> Album (Optional)  </label>

			<div class="col-md-6 ">
				<input id="album" type="text" class="form-control" name="album" value="{{ old('album') }}">

				@if ($errors->has('album'))
				<span class="help-block">
					<strong>{{ $errors->first('album') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('producer') ? 'has-error' : '' }}">
			<label for="producer" class="col-md-4 control-label"> Producer </label>

			<div class="col-md-6 ">
				<input id="producer" type="text" class="form-control" name="producer" value="{{ old('producer') }}" required>

				@if ($errors->has('producer'))
				<span class="help-block">
					<strong>{{ $errors->first('producer') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
			<label for="year" class="col-md-4 control-label"> Year of Release  </label>

			<div class="col-md-2 ">
				<input id="year" type="text" class="form-control" name="year" value="{{ old('year') }}" required>

				@if ($errors->has('year'))
				<span class="help-block">
					<strong>{{ $errors->first('year') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }} ">
			<label for="genre_id" class="col-md-4 control-label"> What's The Genre  </label>
			<div class="col-md-4">
				<select class="form-control" name="genre_id">
					@foreach($genres as $genre)
						<option value="{{ $genre->id }}">{{ $genre->name }}</option>
					@endforeach
				</select>

				@if ($errors->has('genre'))
				<span class="help-block">
					<strong>{{ $errors->first('genre') }}</strong>
				</span>
				@endif				
			</div>
		</div>

		<div class="form-group">
			<label for="comment" class="col-md-4 control-label"> Extra Info about the Song </label>

			<div class="col-md-4 ">
				<textarea class="form-control" rows="4" name="comment" value="{{ old('comment') }}">  </textarea>
			</div>
		</div>

		<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    		<label for="image" class="col-md-4 control-label "> Cover Art </label>
    		<div class="col-md-4">
    			<input type="file" id="image" name="image">
   		 		{{-- <p class="help-block">Example block-level help text here.</p> --}}
   		 		@if ($errors->has('image'))
   		 			<span class="help-block">
   		 				<strong> {{ $errors->first('image') }} </strong>
   		 			</span>
   		 		@endif
    		</div>
  		</div>


		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Add Song
				</button>
			</div>
		</div>

	</form>

</div>
@endsection