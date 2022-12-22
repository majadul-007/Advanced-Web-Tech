<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="/usershomepage" class="logo m-0">Trip Alpine <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					 
					
					<li class="{{ request()->routeIs('usershomepage') ? 'active' : '' }}"><a href="{{route('usershomepage')}}">Home</a></li>
					@if(Session::get('user')) {{Session::get('name')}} 

					<li class="{{ request()->routeIs('myorders') ? 'active' : '' }}"><a  href="{{route('myorders')}}">My Panel</a></li>
					
										
					<li class="{{ request()->routeIs('myprofileinfo') ? 'active' : '' }}"><a class="" href="{{route('myprofileinfo')}}">My Profile</a></li>
					<li class="{{ request()->routeIs('book') ? 'active' : '' }}"><a  href="{{route('book')}}">Book Now</a></li>
					
					<li class="{{ request()->routeIs('logout') ? 'active' : '' }}"><a  href="{{route('logout')}}">Logout</a></li>
					@else
					<li class="{{ request()->routeIs('userregistration') ? 'active' : '' }}"><a  href="{{route('userregistration')}}">User Registration</a></li>
					<li class="{{ request()->routeIs('userlogin') ? 'active' : '' }}" ><a href="{{route('userlogin')}}">User Login</a></li>



    				@endif
					
					
					

					

					

				
					<!-- <li><a href="/contact">Contact Us</a></li> -->
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>