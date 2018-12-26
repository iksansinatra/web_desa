
		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Shop"><span>Fasilitas</span></h1>
						<div class="page-breadcrumb">
							<a>Tentang Desa</a>/ <span>Fasilitas</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->

		<section class="page-section padding ptb-xs-40">
			<div class="container shop text-center">
				<div class="row">

						<?php

						 foreach ($fasilitas as $key) {

			 			?>
					<div class="col-sm-6 col-lg-3">
						<div class="product-item mb-xs-30">
							<div class="product-img">
								<img src="<?php echo base_url()?>assets/fasilitas/<?php echo $key->fasilitas_image;?>" alt="" width="275" height="276" />
								<div class="product-overlay">

									<div class="quick-view">
										<a href="<?php echo base_url()?>assets/fasilitas/<?php echo $key->fasilitas_image;?>" data-rel="prettyPhoto[portfolio]"> <i class="fa fa-eye"></i> Lihat Fasilitas</a>
									</div>

								</div>
							</div>
							<div class="product-details">
								<h4><?php echo $key->fasilitas_name;?></h4>
								<p class="text-color"><?php echo $key->fasilitas_desc;?></p>
							</div>
						</div>
					</div>
					<?php
					}
					?>
					<!-- .product -->
				</div>
			</div>

		</section>

		<!--End Contact-->

	
