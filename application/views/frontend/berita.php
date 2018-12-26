
		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Project"><span>Berita Desa</span></h1>
						<div class="page-breadcrumb">
							<a>Informasi Desa </a>/ <span>Berita Desa</span>
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
								<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. -->
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
								<a> <img alt="1" src="<?php echo base_url();?>assets/berita/<?php echo $key2->news_image;?>" class="item-container" width="100px" height="200px"> </a>
								<div class="link-zoom">
									<a href="<?php echo site_url("detail-berita-desa?id=".$key2->news_id);?>" class="project_links same_style"> <i class="fa fa-link"> </i> </a>
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
