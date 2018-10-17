<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Chillclean - Cleaning Services HTML5 Bootstrap4 Responsive Template</title><link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="<?php echo base_url()?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
		<!--Main Slider-->
		<link href="<?php echo base_url()?>assets/assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url()?>assets/assets/css/header.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/footer.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>assets/assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />
	</head>
	<body>
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>

		<!--loader-->
		<!--Header Section Start Here
		==================================-->
		<header>
		<div class="top-part__block">
			<div class="search__box-block">
				<div class="container">
					<input type="text" id="search" class="input-sm form-full" placeholder="Search Now">
					<a href="#!" class="search__close-btn">
						<i class="fa fa-times" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<p>
							Welcome to our corporate buisness
						</p>
					</div>
					<div class="col-sm-5">
						<div class="social-link__block text-right">
							<a href="#" class="facebook">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="twitter">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="google-plus">
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" class="linkedin">
								<i class="fa fa-linkedin"></i>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="middel-part__block">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 logo col-md-12 d-flex align-items-center">

							<a href="index.html">
								<img src="assets/images/logo.png" alt="Logo">
								</a>

								 <div class="navbar-header">
						<button type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#navbar-menu">
							<i class="fa fa-bars"></i>
						</button>

					</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="top-info__block text-right">
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<p>
										13005 Greenvile Avenue
										<span> California, TX 70240</span>
									</p>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<p>
										Call Us
										<span> +56 (0) 012 345 6789</span>
									</p>
								</li>
								<li>
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<p>
										Mail Us
										<span>
											<a href="mailto:info@gmail.com">info@gmail.com</a>
										</span>
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main_nav stricky-header__top navbar-toggleable-md">

			<nav class="navbar navbar-default navbar-sticky bootsnav">
				<div class="container">
					<!-- Start Header Navigation -->

					<!-- End Header Navigation -->
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						<ul class="nav navbar-nav mobile-menu d-flex justify-content-between">
							<li>
								<a href="<?php echo base_url();?>">Beranda</a>
								<span class="submenu-button"></span>

							</li>
							<li>
								<a href="#!">Tentang Desa</a>
								<span class="submenu-button"></span>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('Home/visi');?>">Visi & Misi</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/sejarah_desa');?>">Sejarah Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/perangkat');?>">Perangkat Desa</a>
									</li>
									<li>
										<a href="#">Demografi Penduduk</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/fasilitas');?>">Fasilitas Desa</a>
									</li>
									<li>
										<a href="#">Anggaran Desa</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="javascript:avoid(0);">Informasi Desa</a>
								<span class="submenu-button"></span>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('Home/berita');?>">Berita Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/kegiatan');?>">Kegiatan Desa</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="<?php echo site_url('Home/pariwisata');?>">Pariwisata</a>
							</li>

							<li>
								<a href="<?php echo site_url('Home/potensi');?>">Potensi</a>
							</li>

							<li>
								<a href="javascript:avoid(0);">Galeri</a>
								<span class="submenu-button"></span>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('Home/foto');?>">Foto Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/foto_kegiatan');?>">Foto Kegiatan</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/video');?>">Video Desa</a>
									</li>


								</ul>
							</li>

							<li>
								<a href="<?php echo site_url('Home/kontak');?>">Kontak Kami</a>

							</li>
						</ul>
					</div>
					<!--navbar-collapse -->
				</div>
			</nav>
		</div>
	</header><!--Section End Here-->

		<!-- END HEADER -->
		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Project"><span>Berita Desa</span></h1>
						<div class="page-breadcrumb">
							<a>Informasi </a>/ <span>Desa</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->
		<!-- Work Section -->
		<section id="work" class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-40 mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Berita Desa</h2>
							<p class="mb-0">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text.
							</p>
						</div>
					</div>
				</div>

				<div class="row container-grid nf-col-3">

					<?php

					 foreach ($berita as $key2) {
					?>
						<div class="nf-item branding coffee spacing">
							<div class="item-box">
								<a> <img alt="1" src="<?php echo base_url();?>assets/berita/<?php echo $key2->news_image;?>" class="item-container"> </a>
								<div class="link-zoom">
									<a href="<?php echo site_url("home/detail_berita?id=".$key2->news_id);?>" class="project_links same_style"> <i class="fa fa-link"> </i> </a>
									<a href="<?php echo base_url();?>assets/berita/<?php echo $key2->news_image;?>" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
									<div class="gallery-heading">
										<h4><a href="#"><?php echo $key2->news_title;?></a></h4>

									</div>
								</div>

							</div>
						</div>
						<?php

					 }
						?>



				</div>

			</div>
		</section>
		<!-- End Work Section -->
		<!--End Contact-->


		<!-- Footer_Section -->
		<footer class="footer pt-50">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 footer_logo">
						<a href="index.html"><img src="assets/images/footer_logo.png" alt=""></a>
						<p>
							Lorem ipsum dolor amet natum latine copiosa at quo, suas labore saperet has there any quote for write lorem percit latineu suas dummy.
						</p>
						<ul>
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>

					<div class="col-md-6 col-lg-2 mt-xs-30 link_footer">
						<h4>Information</h4>
						<ul>
							<li>
								<a href="#">About us</a>
							</li>
							<li>
								<a href="#">Service</a>
							</li>
							<li>
								<a href="#">Project</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li>
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

					<div class="col-md-6 col-lg-3 mt-sm-30 mt-xs-30 footer-latest-news">
						<h4>Latest News</h4>
						<div class="single-news">
							<h5><a href="#">How can be successfull in market place..</a></h5>
							<span>13 Nov, 2018  /  Business</span>
						</div>
						<div class="single-news">
							<h5><a href="#">How can be successfull in market place..</a></h5>
							<span>13 Nov, 2018  /  Business</span>
						</div>
					</div>

					<div class="col-md-6 col-lg-4 mt-sm-30 mt-xs-30 footer-subscribe">
						<h4>Subscribe Us</h4>
						<p>
							Lorem ipsum dolor amet natum latine copiosa at quo, suas labore saperet has there any quote.
						</p>
						<form action="#">
							<input type="text" placeholder="Enter your e-mail">
							<button class="btn-text">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</button>
						</form>

					</div>

				</div>
			</div>
			<div class="bottom-footer text-center">
				<div class="container">
					<div class="bor_top clearfix">
						<p>
							Copyright © 2018 clean Theme. All rights reserved <a href="#">Chillclean</a>
						</p>

					</div>
				</div>
			</div>
		</footer>
		<!-- Footer_Section_End -->
		<!-- Site Wraper End -->
		<!-- Site Wraper End -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/tether.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/assets/js/jquery.easing.js" type="text/javascript"></script>

		<!-- fancybox Js -->
		<script src="<?php echo base_url()?>assets/assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="<?php echo base_url()?>assets/assets/js/owl.carousel.js" type="text/javascript"></script>

		<!-- imagesloaded Js -->
		<script src="<?php echo base_url()?>assets/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="<?php echo base_url()?>assets/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/assets/js/jquery.appear.js" type="text/javascript"></script>

		<!-- revolution Js -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.revolution.js"></script>
		<!-- custom Js -->
		<script src="<?php echo base_url()?>assets/assets/js/custom.js" type="text/javascript"></script>

	</body>
</html>
