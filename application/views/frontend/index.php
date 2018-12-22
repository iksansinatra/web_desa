<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Beranda / Desa Laywo Jaya</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!--link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet"-->
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
					<div class="col-sm-7">
						<p>
							Welcome to our website
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
	</header>

		<!-- END HEADER -->

		<!--  Main Banner Start Here-->
		<div class="main-banner banner_up">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
					<ul>
						<?php
					 $no=129;
					 foreach ($gambar as $key) {

						// $id=$key->id_gambar;
				 ?>
						<!-- SLIDE  -->
						<li data-index="rs-<?php echo $no;?>" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo base_url()?>assets/foto/<?php echo $key->image_file;?>"  alt=""  class="rev-slidebg" >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title tp-resizeme "
							id="slide-<?php echo $no;?>-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['700','700','700','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on" >
								<div class="banner-text">
									<!-- <span class="sub-text">we are here to help you</span> -->
									<h2><?php echo $key->image_name;?></h2>
									<p>
										<?php echo $key->image_desc;?>
									</p>
									<a class="btn-text" href="#"> Read More</a>
								</div>
							</div>
						</li>
						<?php
						  $no++;
					}
				?>
						<!-- SLIDE  -->
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		<!--  Main Banner End Here-->

		<!-- About -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30">
					<div class="col-md-4 d-flex align-items-center">
						<div class="section_tit">
							<h2>Desa Laywo</h2>
							<span class="b-line l-left sm-l-center"></span>
						</div>
					</div>

					<div class="col-md-8 mt-xs-30 text-center text-md-left">
						<p>
							<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text. -->
						</p>
						<p>
							<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text. -->
						</p>
					</div>
				</div>


			</div>
		</section>
		<!-- About -->

		<!-- Service_Section -->
		<section class="padding ptb-xs-40 gray-bg service_sec">
			<div class="container">
				<div class="row text-center mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Kegiatan Desa</h2>
							<span class="b-line"></span>
							<p>
								<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. -->
							</p>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<div class="service_slider_home next_btn_style">
							<?php
						 $no=1;
						 foreach ($semua as $key1) {


					 	?>
							<div class="service_box">
								<figure>
									<img src="<?php echo base_url()?>assets/foto_kegiatan/<?php echo $key1->image_file;?>" alt="" height="250" />
								</figure>
								<h3><a href="#"><?php echo $key1->image_name;?></a></h3>
								<!--p>
									<?php echo $key1->image_desc;?>
								</p-->
							</div>
							<?php
						}
							?>

						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- Service_Section_End -->



		<!-- Counter_Section -->
		<section class="padding ptb-xs-40 counter_sec">
			<div class="container">
				<div class="row text-center light-color mb-40 mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Perangkat Desa</h2>
							<span class="b-line"></span>
							<p>
								<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text.
 -->							</p>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="counter_box">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="row bg_withe">
							<div class="col-lg-3 col-md-6">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
									 Kepala Dusun
									</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 mt-xs-30">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
										Kepala Urusan
									</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
										Kepala Seksi
									</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
										Kepala Keagamaan
									</p>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Counter_Section_End -->

		<!-- Work Section -->
		<section id="work" class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-40 mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Berita Terkini</h2>
							<span class="b-line"></span>
							<p>
								<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. -->
							</p>
						</div>
					</div>
				</div>

				<div class="row container-grid nf-col-3">

				<?php
				 $no=1;
				 foreach ($terkini as $key2) {
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
					 $no++;
				 }
					?>

				</div>

			</div>
		</section>
		<!-- End Work Section -->



		<footer class="footer pt-50">
			<!-- <div class="container">
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
			</div> -->
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
		<!-- Mail Function Js -->
		<script src="<?php echo base_url()?>assets/assets/js/mail.js" type="text/javascript"></script>

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
