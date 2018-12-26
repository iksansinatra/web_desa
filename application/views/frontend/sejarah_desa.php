
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Sejarah Desa</span></h1>
						<div class="page-breadcrumb">
							<a>Tentang Desa</a>/ <span>Sejarah Desa</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- Intro Section -->
		<!-- Service Section -->
		<div id="services-section" class="padding ptb-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sx-12">
						<div class="single-sidebar-widget">
							<div class="special-links">
								<ul>
									<li>
										<a  href="<?php echo site_url('Home/visi');?>">Visi & Misi</a>
									</li>
									<li>
										<a class="active" href="<?php echo site_url('Home/sejarah_desa');?>">Sejarah Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/perangkat');?>">Perangkat Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/fasilitas');?>">Fasilitas Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/anggaran');?>">Anggaran Desa</a>
									</li>
									<li>
										<a href="<?php echo site_url('Home/penduduk');?>">Demografi Penduduk</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
					<?php
					 $no=1;
					 foreach ($sejarah as $key) {

			 	 ?>
					<div class="col-lg-8 mt-xs-30 mt-sm-30">
						<div class="full-pic">
							<figure>
								<img src="<?php echo base_url()?>assets/sejarah_desa/<?php echo $key->sejarah_image; ?>" alt="">
							</figure>
						</div>
						<div class="text-box mt-40">
							<div class="box-title mb-20">
								<h2><?php echo $key->sejarah_title; ?></h2>
							</div>
							<div class="text-content">

									<?php echo $key->sejarah_desa; ?>

							</div>

							<div class="row">
								<div class="col-sm-12 service-box mt-30 mt-xs-0">
									<h3>Sejarah Pemerintahan</h3>
									<div class="text-content mb-30">

											<?php echo $key->sejarah_pemerintahan; }?>

									</div>


									<!-- About Section -->

									<div class="col-md-1 mt-xs-40 pb-xs-40">

												</div>

													<div class="col-md-11">


													<!-- About Section -->
										<div class="pt-90 pt-xs-60">
											<div class="history-timeline__block">
											<ul class="history-timeline">
												<?php
												 $no=1;
												 foreach ($sejarah1 as $key2) {

											 ?>
											<li>
												<div class="icon-dot"></div>
												<p class="date text-block text-bold m-b-30"></p>
												<div class="mv-block">
												<div class="abt-block__left abt-block__bg">
													<h2><?php echo $key2->sejarah_name;?></h2>
													<p>
													<?php echo $key2->sejarah_keterangan;?>
													</p>
													<a href="#" class="abt-block_link"> <?php echo $key2->sejarah_periode;?> <i class="fa fa-chevron-circle-right abt-block_link-arrow" aria-hidden="true"></i></a>
												</div>
													<div>
														<img src="<?php echo base_url()?>assets/sejarah_pemerintahan/<?php echo $key2->sejarah_image;?>" width="900" height="300">
												</div>
											</li>
											<?php
													}
											?>

											</ul>
											</div>
											<div class="abt-block">

											</div>

										</div>
							<!-- About Section End-->

										</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service Section end -->
