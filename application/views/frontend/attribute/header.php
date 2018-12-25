<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Beranda / Desa Laywo Jaya</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/q.png">
		<!--link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet"-->
		<link href="<?php echo base_url()?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css">
		<!--Main Slider-->
		<link href="<?php echo base_url()?>assets/assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/assets/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url()?>assets/assets/css/header.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>assets/assets/css/footer.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>assets/assets/css/index.css" rel="stylesheet" type="text/css" />
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

		<!-- HEADER -->
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
					<div class="col-md-12">
					<marquee>
						<h3>
							Selamat Datang di Website Laywo Jaya
						</h3>
					</marquee>
					</div>

				</div>
			</div>
		</div>
		<div class="middel-part__block">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 logo col-md-12 d-flex align-items-center">

							<a href="<?php echo base_url();?>">
								<img src="<?php echo base_url()?>assets/assets/images/logo.png" alt="Logo">
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
										<!-- 13005 Greenvile Avenue
										<span> California, TX 70240</span> -->
									</p>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<p>
										<!-- Call Us
										<span> +56 (0) 012 345 6789</span> -->
									</p>
								</li>
								<li>
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<p>
										<!-- Mail Us -->
										<span>
											<!-- <a href="mailto:info@gmail.com">info@gmail.com</a> -->
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
										<a href="<?php echo site_url('visi-desa');?>">Visi & Misi</a>
									</li>
									<li>
										<a href="<?php echo site_url('sejarah-desa');?>">Sejarah Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('perangkat-desa');?>">Perangkat Desa</a>
									</li>
									<li>
										<a href="#">Demografi Penduduk</a>
									</li>
									<li>
										<a href="<?php echo site_url('fasilitas-desa');?>">Fasilitas Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('anggaran-desa');?>">Anggaran Desa</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="javascript:avoid(0);">Informasi Desa</a>
								<span class="submenu-button"></span>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('berita-desa');?>">Berita Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('kegiatan-desa');?>">Kegiatan Desa</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="<?php echo site_url('pariwisata-desa');?>">Pariwisata</a>
							</li>

							<li>
								<a href="<?php echo site_url('potensi-desa');?>">Potensi</a>
							</li>

							<li>
								<a href="javascript:avoid(0);">Galeri</a>
								<span class="submenu-button"></span>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('foto-desa');?>">Foto Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('foto-kegiatan-desa');?>">Foto Kegiatan</a>
									</li>
									<li>
										<a href="<?php echo site_url('video-desa');?>">Video Desa</a>
									</li>


								</ul>
							</li>

							<li>
								<a href="<?php echo site_url('kontak-desa');?>">Kontak Kami</a>

							</li>
						</ul>
					</div>
					<!--navbar-collapse -->
				</div>
			</nav>
		</div>
	</header>

		<!-- END HEADER -->
