<nav class="navbar navbar-default navbar-inverse" role="navigation">
	<div class="container-fluid ">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-trax-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"> T R A X</a>
		</div>

		<div class="collapse navbar-collapse navbar-right" id="bs-trax-navbar-collapse-1">
			{{-- Right navbar --}}
			<ul class="nav navbar-nav">
				{{-- Check if User is logged in --}}

				@if ( Auth::check() )

					<li><a href="{{  url('profile') }} " style="position: relative; padding-left: 50px;"> <img class="navbar-profile-img" src="/storage/{{ Auth::user()->avatar }}"> {{ Auth::user()->name }} </a></li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown"> Listen <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Your Playlists</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Recommendations</a></li>
						</ul>
					</li>

				@else
				{{-- If user is not logged in, show something slightly dissimilar --}}
					@section('top-right') 
						{{-- Make it a section so that I can override it in the register and log in pages --}}
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li>  <a href="{{ url('/register') }}">Register</a>	</li>
					@show
				@endif
				{{-- Default links that'd appear on every page nevbar --}}
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Explore <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('allgenres') }}"> Songs</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="/albums"> Albums</a></li>

						@if (Auth::check())
							{{-- If user is logged in, show logout button --}}
							<li role="presentation" class="divider"></li>
							<li>
								<a href="{{ url('/logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Logout
								</a>
								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						@endif

					</ul>	
				</li>
			</ul>
			{{-- End --}}
		</div>		
	</div>	
</nav>