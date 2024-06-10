<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags --> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>RTWebConnect</title>
	<link rel="icon" href="assets/images/RTRWLOGO.png" type="image/x-icon">
	
	<!-- Vendor css --> 
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/vendors/owl.carousel/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/vendors/owl.carousel/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/vendors/jquery-flipster/css/jquery.flipster.css">

	<!-- sass landing page css --> 
	<link rel="stylesheet" href="assets/css/style.min.css">	
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="mobile-menu-overlay"></div>
	
	<!-- top header menu --> 
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="assets/images/logokecil.png" alt="Mooli"  ></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
					<img src="assets/images/logo-dark.svg" class="logo-mobile-menu" alt="logo">
					<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
				</div>
				<ul class="navbar-nav ml-auto align-items-center">
					<li class="nav-item active"><a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#data-warga">DATA WARGA</a></li>
					<li class="nav-item"><a class="nav-link" href="#">KEGIATAN</a></li>
					<li class="nav-item"><a class="nav-link" href="#">UMKM</a></li>
					<li class="nav-item"><a class="nav-link" href="#">KEUANGAN</a></li>
					<li class="nav-item"><a class="nav-link" href="#">TEMPLATE SURAT</a></li>
					<li class="nav-item"><a class="nav-link" href="#">BANSOS</a></li>
					<li class="nav-item"><a class="nav-link btn btn-primary" href="{{ url('/login') }}">LOGIN</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- main sass landing page html --> 
	<div class="page-body-wrapper">
		<section id="home" class="home" style="background-image: url('assets/images/sd01.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; width: 100vw;">
			<div class="container">
			</div>
		</section>
		

		{{-- <section class="" id="geografis" style="background-size: cover; background-position: center; background-repeat: no-repeat; height: 70vh; width: 100vw;">
			<div class="container">
				<div class="row">
					<div class="judul-geo" style="flex: 1; text-align: center;">
						<h1 style="font-weight: 1000; font-size: 80px; color: #C7A4C9;">GEOGRAFIS</h1>
					</div>
					<div class="col-sm-12">
						<div class="main-banner" style="display: flex; align-items: center;">
							<div class="bnr-text" style="flex: 1; padding: 0 20px;">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15803.838566623332!2d112.7334772525049!3d-8.00309917354418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6258c343c1a43%3A0xb61abf69f45dbfc!2sBokor%2C%20Kec.%20Tumpang%2C%20Kabupaten%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1718003434244!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							<div class="bnr-img" style="flex: 1; text-align: right;">
								<img src="assets/images/maprwis.png" width="100%" style="max-width: 600px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		
		

		{{-- <section class="" id="datawarga">
			
		</section> --}}
		
	
		<section class="our-services" id="mini-dashboard" style="background-color: #ffffff;">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12">
						<h3 class="font-weight-bold mb-5" style="color: #D1EDF4; font-size: 56px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Mini Dashboard</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 text-center text-lg-left">
						<div class="services-box">
							<img src="assets/images/data-warga.png" alt="integrated-marketing" style="width: auto; height: 80px; ">
							<h6 class="mb-3 mt-4 font-weight-medium" style="color: #508390; font-size: 24px; font-weight: 600;">DATA WARGA</h6>
							<p>Lorem ipsum dolor sit amet, pretium pretium tempor.Lorem ipsum </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center text-lg-left">
						<div class="services-box">
							<img src="assets/images/kegiatan.png" alt="design-development"style="width: auto; height: 80px;" >
							<h6 class="mb-3 mt-4 font-weight-medium" style="color: #508390; font-size: 24px; font-weight: 600;">KEGIATAN</h6>
							<p>Lorem ipsum dolor sit amet, pretium pretium tempor.Lorem ipsum </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center text-lg-left">
						<div class="services-box">
							<img src="assets/images/umkm.png" alt="digital-strategy" style="width: auto; height: 80px;">
							<h6 class="mb-3 mt-4 font-weight-medium" style="color: #508390; font-size: 24px; font-weight: 600;">UMKM</h6>
							<p>Lorem ipsum dolor sit amet, pretium pretium tempor.Lorem ipsum </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center text-lg-left">
						<div class="services-box pb-lg-0" >
							<img src="assets/images/keuangan.png" alt="digital-marketing" style="width: auto; height: 80px;">
							<h6 class="mb-3 mt-4 font-weight-medium" style="color: #508390; font-size: 24px; font-weight: 600;">KEUANGAN</h6>
							<p>Lorem ipsum dolor sit amet, pretium pretium tempor.Lorem ipsum </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center text-lg-left">
						<div class="services-box pb-lg-0" >
							<img src="assets/images/surat.png" alt="growth-strategy" style="width: auto; height: 80px;">
							<h6 class="mb-3 mt-4 font-weight-medium" style="color: #508390; font-size: 24px; font-weight: 600;">SURAT</h6>
							<p>Lorem ipsum dolor sit amet, pretium pretium tempor.Lorem ipsum </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 text-center text-lg-left">
						<div class="services-box pb-0" >
							<img src="assets/images/bansos.png" alt="saving-strategy" style="width: auto; height: 80px;">
							<h6 class="mb-3 mt-4 font-weight-medium" style="color: #508390; font-size: 24px; font-weight: 600;">BANSOS</h6>
							<p>Lorem ipsum dolor sit amet, pretium pretium tempor.Lorem ipsum </p>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-5">
				<div class="owl-carousel-projects owl-carousel owl-theme">
					<div class="item"><img src="assets/images/carousel/slider1.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider2.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider3.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider4.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider5.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider1.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider2.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider3.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider4.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider5.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider1.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider2.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider3.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider4.jpg" alt="slider"></div>
					<div class="item"><img src="assets/images/carousel/slider5.jpg" alt="slider"></div>
				</div>
			</div>
		</section>

		<section class="our-process" id="data-warga" style="background-color:  #D1EDF4; background-size: cover; background-position: center; background-repeat: no-repeat; height: 50vh; width: 100vw;">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-12">
						
						<h3 class="font-weight-medium text-dark" style=" font-weight: 900;">DATA WARGA RW 01 DESA BOKOR</h3>
						<h5 class="text-dark">Total penduduk per RT</h5>
						
						
				</div>
			</div>
			<div class="container stat-icon">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" >
									<img src="assets/images/stat-icon-1.svg" alt="" class="mr-3">
									<div>
										<h4 class="font-weight-bold mb-0"><span class="">{{$warga->where('rt','1')->count()}}</span></h4>
										<h6 class="mb-0">RT 01</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="d-flex py-3 my-3 my-lg-0 justify-content-center">
									<img src="assets/images/stat-icon-1.svg" alt="" class="mr-3">
									<div>
										<h4 class="font-weight-bold mb-0"><span class="">{{$warga->where('rt','2')->count()}}</span></h4>
										<h6 class="mb-0">RT 02</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" >
									<img src="assets/images/stat-icon-1.svg" alt="" class="mr-3">
									<div>
										<h4 class="font-weight-bold mb-0"><span class="">{{$warga->where('rt','3')->count()}}</span></h4>
										<h6 class="mb-0">RW 03</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

	
	<!-- main footer section --> 
	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<address>
							<p>70 Bowman St. South Windsor,</p>
							<p class="mb-4">CT 06074</p>
							<div class="d-flex align-items-center">
								<p class="mr-4 mb-0">+3 123 456 789</p>
								<a href="#" class="footer-link">info@yourmail.com</a>
							</div>
							<div class="d-flex align-items-center">
								<p class="mr-4 mb-0">+1 222 345 342</p>
								<a href="#" class="footer-link">rose-coke@example.com</a>
							</div>
						</address>
						<div class="social-icons">
							<h6 class="footer-title font-weight-bold">Social Share</h6>
							<div class="d-flex">
								<a href="#"><i class="mdi mdi-github-circle"></i></a>
								<a href="#"><i class="mdi mdi-facebook-box"></i></a>
								<a href="#"><i class="mdi mdi-twitter"></i></a>
								<a href="#"><i class="mdi mdi-dribbble"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4">
								<h6 class="footer-title">Social Share</h6>
								<ul class="list-footer">
									<li><a href="#home" class="footer-link">Home</a></li>
									<li><a href="#mini-dashboard" class="footer-link">About</a></li>
									<li><a href="#" class="footer-link">Contact</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<h6 class="footer-title">Services</h6>
								<ul class="list-footer">
									<li><a href="#" class="footer-link">UI/UX Design</a></li>
									<li><a href="#" class="footer-link">Web Development</a></li>
									<li><a href="#" class="footer-link">App Development</a></li>
									<li><a href="#" class="footer-link">Digital Marketing</a></li>
									<li><a href="#" class="footer-link">API Development</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<h6 class="footer-title">Company</h6>
								<ul class="list-footer">
									<li><a href="#" class="footer-link">Advertise</a></li>
									<li><a href="#" class="footer-link">Confidentiality</a></li>
									<li><a href="#" class="footer-link">Our Work</a></li>
									<li><a href="#" class="footer-link">Help Center</a></li>
									<li><a href="#" class="footer-link">Our Facts</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<div class="d-flex align-items-center">
						<p class="mb-0 text-small pt-1">RTWebConnect</p>
					</div>
					<div>
						<div class="d-flex">
							<a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>          
							<a href="#" class="text-small text-white mx-2 footer-link">Customer Support </a>
							<a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- animation line --> 
	<div class="animate_lines">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</div>
		
	<!-- vendors js file --> 
	<script src="assets/vendors/base/vendor.bundle.base.js"></script>
	<script src="assets/vendors/owl.carousel/js/owl.carousel.js"></script>
	<script src="assets/vendors/jquery-flipster/js/jquery.flipster.min.js"></script>

	<!-- page js --> 
	<script src="assets/js/template.js"></script>
</body>
</html>

