@extends('layouts.master')

@section('stylesheet')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <img class="profile-img" src="/storage/{{ Auth::user()->avatar }}"> <br><br>
                        <div>
                            <p> Welcome {{ Auth::user()->name }}</p>
                            <p> This is your profile. Yeah, it's pretty much empty... like your brain. </p>
                            <p> According to your info, your email is {{ Auth::user()->email }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(Auth::user()->is_admin)
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <p> CLick here if you would like to add, remove, edit your own song to the Trax
                                library. </p>

                            <div class="panel panel-default col-sm-1 col-lg-2 col-xs-3 col-md-3">
                                <a href="{{ route('songs.create') }}">
                                    <span class="glyphicon glyphicon-plus"
                                          style="color: orange; font-size: 30px; "></span>
                                </a>
                            </div>
                            <div class="panel panel-default col-sm-1 col-lg-2 col-xs-3 col-md-3">
                                <a href="{{ url('songs') }}">
                                    <span class="glyphicon glyphicon-pencil"
                                          style="color: orange; font-size: 30px; "></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection