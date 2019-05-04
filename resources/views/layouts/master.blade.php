<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="theme-color" content="#23163b">
	<title>Wisata Jogja - @yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	@yield('head')

</head>
<body class="fixed-left widescreen">
	<div id="wrapper">
		<div class="topbar">
			<div class="topbar-left">
				<div class="text-center">
					<a href="/home" class="logo"><span>Administrator</span></a>
				</div>
			</div>
			<div class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="row-menu">
						<div class="pull-left hidden-xs hidden-sm">
							<button class="button-menu-mobile open-left"><i class="fas fa-bars fa-fw"></i></button>
							<span class="clearfix"></span>
						</div>
						<div class="pull-left visible-xs visible-sm">
							<a href="/home" class="button-menu-mobile">
								<i class="fas fa-home"></i>
							</a>
							<span class="clearfix"></span>
						</div>
						<ul class="nav navbar-nav navbar-right pull-right">
							<li class="dropdown mbl-view" style="float:left;">
								<a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="false">
									<img src="{{ asset('img/default-ava.png') }}" width="30" height="30" class="img-circle"/>
								</a>
								<ul class="dropdown-menu">
									<li><a href="/" target="_blank"><i class="fas fa-desktop"></i><span>&nbsp;&nbsp; Halaman Depan</span></a></li>
									{{-- <li><a href="/settings"><i class="fas fa-cog"></i><span>&nbsp;&nbsp; Pengaturan</span></a></li>
									<li class="divider visible-lg"></li> --}}
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-ban"></i><span>&nbsp;&nbsp; Keluar</span></a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
								</ul>
							</li>
							<li class="menu-btn"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="left side-menu">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto;">
				<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto;">
					<div id="sidebar-menu">
						<ul id="main-menu"">
							<li>
								<a class="has_sub @if(Request::segment(1) == 'home') subdrop @endif" href="/home">
									<i class="fas fa-home fa-fw"></i>
									<span>Home</span>
								</a>
                            </li>
							<li>
								<a class="has_sub @if(Request::segment(1) == 'bantul') subdrop @endif" href="/bantul">
									<i class="fas fa-file-alt fa-fw"></i>
									<span>Kab. Bantul</span>
								</a>
							</li>
							<li>
								<a class="has_sub @if(Request::segment(1) == 'sleman') subdrop @endif" href="/sleman">
									<i class="fas fa-file-alt fa-fw"></i>
									<span>Kab. Sleman</span>
								</a>
							</li>
							<li>
								<a class="has_sub @if(Request::segment(1) == 'gunungkidul') subdrop @endif" href="/gunungkidul">
									<i class="fas fa-file-alt fa-fw"></i>
									<span>Kab. Gunungkidul</span>
								</a>
							</li>
							<li>
								<a class="has_sub @if(Request::segment(1) == 'kulonprogo') subdrop @endif" href="/kulonprogo">
									<i class="fas fa-file-alt fa-fw"></i>
									<span>Kab. Kulonprogo</span>
								</a>
							</li>
                            <li>
								<a class="has_sub @if(Request::segment(1) == 'yogyakarta') subdrop @endif" href="/yogyakarta">
                                    <i class="fas fa-file-alt fa-fw"></i>
                                    <span>Kota Yogyakarta</span>
                                </a>
							</li>
							<li class="has_sub">
								<a href="">
									<i class="fas fa-book fa-fw"></i>
									<span>Referensi</span>
								</a>
								<ul class="list-unstyled">
									<a class="@if(Request::segment(1) == 'referensi') active @endif" @if(Request::segment(1) == 'referensi' && Request::segment(2) == 'fuzzy') style="color:#ED1262" @endif href="/referensi/fuzzy">Fuzzy System</a>
									<a @if(Request::segment(1) == 'referensi' && Request::segment(2) == 'kategori') style="color:#ED1262" @endif href="/referensi/kategori">Kategori</a>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="content-page">
			<nav class="dark-sidebar">
				<div id="sidebar-menu" style="padding-top: 15px;">
					<ul id="main-menu"">
						<li>
							<a class="has_sub" href="/home">
								<i class="fas fa-home fa-fw"></i>
								<span>Home</span>
							</a>
						</li>
						<li>
							<a class="has_sub" href="/bantul">
								<i class="fas fa-file-alt fa-fw"></i>
								<span>Kab. Bantul</span>
							</a>
						</li>
						<li>
							<a class="has_sub" href="/sleman">
								<i class="fas fa-file-alt fa-fw"></i>
								<span>Kab. Sleman</span>
							</a>
						</li>
						<li>
							<a class="has_sub" href="/gunungkidul">
								<i class="fas fa-file-alt fa-fw"></i>
								<span>Kab. Gunungkidul</span>
							</a>
						</li>
						<li>
							<a class="has_sub" href="/kulonprogo">
								<i class="fas fa-file-alt fa-fw"></i>
								<span>Kab. Kulonprogo</span>
							</a>
						</li>
						<li>
							<a class="has_sub" href="/yogyakarta">
								<i class="fas fa-file-alt fa-fw"></i>
								<span>Kota Yogyakarta</span>
							</a>
						</li>
						<li class="has_sub">
							<a href="">
								<i class="fas fa-book fa-fw"></i>
								<span>Referensi</span>
							</a>
							<ul class="list-unstyled">
								<a href="/referensi/fuzzy">Fuzzy System</a>
								<a href="/referensi/kategori">Kategori</a>
							</ul>
						</li>
						<li>
							<a class="has_sub" href="/" target="_blank">
								<i class="fas fa-desktop fa-fw"></i>
								<span>Halaman Depan</span>
							</a>
						</li>
						{{-- <li>
							<a class="has_sub" href="/settings">
								<i class="fas fa-cog fa-fw"></i>
								<span>Pengaturan</span>
							</a>
						</li> --}}
						<li>
							<a class="has_sub" href="{{ route('logout') }}">
								<i class="fas fa-ban fa-fw"></i>
								<span>Keluar</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="content">
				<div class="container">

                    @yield('content')

                </div>
			</div>
		</div>
	</div>

	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="{{ asset('js/croppie.js') }}"></script>
	<script src="{{ asset('js/dashboard-core.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>}

	@yield('script')

</body>
</html>