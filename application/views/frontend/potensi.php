
		<!-- CONTENT -->
		<!-- Intro Section -->
  <section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Service"><span>Potensi Desa</span></h1>
						<div class="page-breadcrumb">
							<span>Potensi Desa</span>
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
							<h2>Potensi <span>Desa</span></h2>
						</div>
					</div>
				</div>

				<div class="row">

				<?php
				function limit_words($string, $word_limit){
						$words = explode(" ",$string);
						return implode(" ",array_splice($words,0,$word_limit));
				}
				 	foreach ($potensi as $key) {
				?>

						<div class="col-md-6 col-lg-4 mb-30">
							<div class="service_box">
								<figure>
									<img src="<?php echo base_url()?>assets/potensi/<?php echo $key->potensi_image;?>" alt="" height="250" />
								</figure>
								<h3><a href="<?php echo site_url("detail-potensi-desa?id=".$key->potensi_id);?>"><?php echo $key->potensi_name;?></a></h3>
								<p>
									<?php

										$limited_string = limit_words($key->potensi_desc, 25);
										echo $limited_string;
									?>
								</p>
							</div>
							<center><a href="<?php echo site_url("detail-potensi-desa?id=".$key->potensi_id);?>" class="btn-text">Baca Selanjutnya</a> </center>
						</div>

							<?php
						}
							?>



				</div>

			</div>
		</section>
			<!-- Service Section end -->
