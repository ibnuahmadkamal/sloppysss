<!DOCTYPE html>
<html lang="en">
<head>
<title>Rooms</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Major - 5* Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link href="{{ URL::asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link href="{{ URL::asset('plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/rooms.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/rooms_responsive.css') }}">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<img src="images/logo.png">
						</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-right justify-content-start" style="margin-left: 780px;">
								<li><a href="{{url('index')}}">Home</a></li>
								<li class="nav-item submenu dropdown">
                                <a href="{{url('index')}}" class="d-flex flex-row align-items-center justify-content-start" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User</a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
					                <a class="dropdown-item" href="{{url('index')}}" data-toggle="modal" data-target="#logoutModal">
					                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					                  Logout
					                </a>
					              </div>
                            	</li> 
							</ul>
						</nav>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="index.html">Home</a></li>
				<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="{{url('index')}}" data-toggle="modal" data-target="#logoutModal">
						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					    	Logout
				   	</a>
				</div>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/rooms.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>Homestay</h1></div>
							<!-- Pencarian -->
							<div class="pencarian"><h1>Di Daerah Yogyakarta</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Rooms -->
	<div class="rooms">	
		<div class="rooms">	
		<div class="container">
			<div class="row rooms_row">
				<!-- Room -->
				@foreach($model_hs as $p)
				<div class="col-lg-4">
					<div class="rooms_item">
						<div class="rooms_image"><img src="{{URL::asset('data_file/'.$p->gambar)}}" height="300px;" width="360px;"></div>
						<div class="rooms_title_container text-center">
							<div class="rooms_title"><h1>{{ $p->name }}</h1></div>
							<div class="rooms_price">Harga <span>Rp.{{ $p->tarif }}</span> /malam</div>
						</div>
						<div class="rooms_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Alamat:</div></div>
									<div>{{ $p->alamat }}</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Kapasitas:</div></div>
									<div>2 Dewasa</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Deskripsi:</div></div>
									<div>{{ $p->deskripsi }}</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Fasilitas:</div></div>
									<div>{{ $p->fasilitas }}</div>
								</li>
							</ul>
						</div>
						<div class="button rooms_button ml-auto mr-auto"><a href="{{url('buatreview')}}">Review</a></div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

	
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-md-row flex-column align-items-center align-items-start justify-content-start">
						<div class="copyright"> Copyright @2019 | Sloppy Team</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	
</div>

<script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ URL::asset('css/popper.js') }}"></script>
<script src="{{ URL::asset('css/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ URL::asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ URL::asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ URL::asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ URL::asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ URL::asset('plugins/easing/easing.js') }}"></script>
<script src="{{ URL::asset('plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ URL::asset('plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ URL::asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ URL::asset('js/rooms.js') }}"></script>
</body>
</html>