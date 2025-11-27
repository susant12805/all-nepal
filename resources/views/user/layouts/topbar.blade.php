<nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
	<div class="container-fluid">
		<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

		<!-- Horizontal Navbar -->
		<ul class="navbar-nav align-items-center d-none d-xl-block">
			<li class="nav-item dropdown">
				<a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#" role="button">
					Default Settings <span class="fas fa-caret-down"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
					<a class="dropdown-item" href="#"><span>Manage Profile</span></a>
					<a class="dropdown-item" href="#"><span>Themes</span></a>
					<a class="dropdown-item" href="#"><span>Passwords</span></a>
					<a class="dropdown-item" href="#"><span>Payment methods</span></a>
					<a class="dropdown-item" href="#"><span>Other Settings</span></a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0 d-none d-lg-block" data-toggle="dropdown" href="#" role="button">
					Projects <span class="fas fa-caret-down"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
					<a class="dropdown-item" href="#"><span>Active</span></a>
					<a class="dropdown-item" href="#"><span>Marketing</span></a>
					<a class="dropdown-item" href="#"><span>Users</span></a>
					<a class="dropdown-item" href="#"><span>Development</span></a>
					<a class="dropdown-item" href="#"><span>Settings</span></a>
				</div>
			</li>
		</ul>

		<!-- Brand -->
		<a class="navbar-brand pt-0 d-md-none" href="index-2.html">
			<img src="{{asset('backend')}}/assets/img/brand/logo-light.png" class="navbar-brand-img" alt="...">
		</a>
		<!-- Form -->
		<form class="navbar-search navbar-search-dark form-inline mr-3  ml-lg-auto">
			<div class="form-group mb-0">
				<div class="input-group input-group-alternative">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-search"></i></span>
					</div><input class="form-control" placeholder="Search" type="text">
				</div>
			</div>
		</form>
		<!-- User -->
		<ul class="navbar-nav align-items-center ">
			<li class="nav-item d-none d-md-flex">
				<div class="dropdown d-none d-md-flex mt-2 ">
					<a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
					<div class="media align-items-center">
						<!-- <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="{{asset('backend')}}/assets/img/faces/female/32.jpg"></span> -->
						<div class="media-body ml-2 d-none d-lg-block">
							<span class="mb-0 ">{{ Auth::user()->name }}</span>
						</div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
					<div class="dropdown-header noti-title">
						<h6 class="text-overflow m-0">Welcome!</h6>
					</div>
					<div class="dropdown-divider"></div>

					<!-- Logout Form -->
					<!-- resources/views/layouts/sidebar.blade.php -->
					<!-- resources/views/layouts/topbar.blade.php -->
					<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<i class="ni ni-user-run"></i> Logout
					</a>

					<!-- Hidden form -->
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</li>
		</ul>
	</div>
</nav>