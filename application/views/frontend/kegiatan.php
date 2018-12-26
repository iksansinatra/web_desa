
		<!-- CONTENT -->
		<!-- Intro Section -->
  <section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Service"><span>Kegiatan Desa</span></h1>
						<div class="page-breadcrumb">
							<a>Informasi Desa</a>/ <span>Kegiatan Desa</span>
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
							<h2>Kegiatan <span>Desa</span></h2>
						</div>
					</div>
				</div>

				<div class="row">

				<?php
				 	foreach ($kegiatan as $key) {
				?>

						<div class="col-md-6 col-lg-4 mb-30">
							<div class="service_box">
								<figure>
									<img src="<?php echo base_url()?>assets/foto_kegiatan/<?php echo $key->image_file;?>" alt="" height="250" />
								</figure>
								<h3><a href="#"><?php echo $key->image_name;?></a></h3>
								<p>
									<?php echo $key->image_desc;?>
								</p>
							</div>
						</div>

							<?php
						}
							?>



				</div>

			</div>
		</section>
			<!-- Service Section end -->
