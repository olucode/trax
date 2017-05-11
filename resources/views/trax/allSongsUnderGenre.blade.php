@extends('layouts.navbar')

@section('content')

  @section('genreName')

  @unless (empty($songs))
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <h3> This is a list of all the tracks under {{ $genre }} </h3>  
      </div>
    </div>
  </div>
  @endunless

  @show

  <div class="container-fluid">
     <div class="row">
     <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 ">
      @foreach ($songs as $song)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a href="{{ route('song',$song->id) }}">
               <img src="{{ asset('storage/'.$song->image) }}" alt="{{ $song->title }}">
            </a>
              <div class="container">
                <div class="caption col-md-10">
                    <h4>{{ $song->title }} -<br> {{ $song->artist }} </h4>
                    <p> Producer: {{ $song->producer}} </p>
                </div>
              </div>
          </div>
        </div>
      @endforeach
      </div>
    {{ $songs->links() }}
    </div>
  </div>
@stop