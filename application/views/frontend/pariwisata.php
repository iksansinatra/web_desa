
		<!-- CONTENT -->
		<!-- Intro Section -->
  <section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Service"><span>Pariwisata Desa</span></h1>
						<div class="page-breadcrumb">
							<span>Pariwisata Desa</span>
						</div>

					</div>

				</div>
			</div>
		</section>
  <!-- Intro Section -->
			<!-- Service Section -->
			<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30 text-center">
					<div class="col-md-12">
						<div class="section-title_home">
							<h2>Pariwisata <span>Desa</span></h2>
						</div>
					</div>
				</div>

				<div class="row">

				<?php
				function limit_words($string, $word_limit){
						$words = explode(" ",$string);
						return implode(" ",array_splice($words,0,$word_limit));
				}
				 	foreach ($pariwisata as $key) {
				?>

						<div class="col-md-6 col-lg-4 mb-30">
							<div class="service_box">
								<figure>
									<img src="<?php echo base_url()?>assets/pariwisata/<?php echo $key->pariwisata_image;?>" alt="" height="250" width="350" />
								</figure>
								<h3><a href="<?php echo site_url("detail-pariwisata-desa?id=".$key->pariwisata_id);?>"><?php echo $key->pariwisata_name;?></a></h3>
								<p>
									<?php

										$limited_string = limit_words($key->pariwisata_desc, 25);
										echo $limited_string;
									?>
								</p>
							</div>
							<center><a href="<?php echo site_url("home/detail_pariwisata?id=".$key->pariwisata_id);?>" class="btn-text">Baca Selanjutnya</a> </center>
						</div>

							<?php
						}
							?>



				</div>

			</div>
		</section>
			<!-- Service Section end -->
