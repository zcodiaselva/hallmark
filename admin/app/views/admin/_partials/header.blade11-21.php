<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container">

			@if (Auth::check())

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </a>

			<a class="brand" href="#">
				<img src="{{ URL::asset('assets/admin/img/logo.png') }}">
				
			</a>

			<div class="nav-collapse collapse navbar-responsive-collapse">

				<ul class="nav">

					<li {{ Request::is('admin*') ? 'class="active"' : '' }} >
						<a href="{{ URL::to('admin') }}"><i class="icon-home"></i> HALLMARK SELECT</a>
					</li>

					<li {{ Request::is('es-admin*') ? 'class="active"' : '' }} >
						<a href="{{ URL::to('es-admin') }}"><i class="icon-briefcase"></i> E &amp; S</a>
					</li>

					<li {{ Request::is('pro-admin*') ? 'class="active"' : '' }} >
						<a href="{{ URL::to('pro-admin') }}"><i class="icon-eye-close"></i> PROFESSIONAL LIABILITY</a>
					</li>

					<li {{ Request::is('aero-admin*') ? 'class="active"' : '' }} >
						<a href="{{ URL::to('aero-admin') }}"><i class="icon-plane"></i> AEROSPACE</a>
					</li>
					
				</ul>

				<ul class="nav pull-right">

					<li {{ Request::is('admin/admins*') ? 'class="active"' : '' }} >
						<a href="{{ URL::route('admin.admins.index') }}"><i class="icon-user"></i> USERS</a>
					</li>

			        <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			            	<i class="icon-user"></i> {{ strtoupper(Auth::user()->first_name) }} <b class="caret"></b>
			            </a>
			            <ul class="dropdown-menu">
			            	
			              		<li><a href="{{ URL::route('admin.admins.edit', Auth::user()->id) }}"><i class="icon-edit"></i> Edit Profile</a></li>
			            	
			              	<li><a href="{{ URL::route('admin.logout') }}"><i class="icon-off"></i> Logout</a></li>
			            </ul>
			        </li>
			    </ul>

			</div>

			
			@endif

		</div>
	</div>
</div>
