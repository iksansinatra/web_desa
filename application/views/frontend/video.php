
			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Portfolio"><span>Video Desa</span></h1>
						<div class="page-breadcrumb">
							<a>Galeri</a>/<a>Video Desa</a>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
			<!-- Work Section -->
			<section id="work" class="padding ptb-xs-40">
				<div class="container">

					<div class="row container-grid nf-col-3">

            <?php
            if($this->uri->segment(2)=="index"){
                          $no=1+$this->uri->segment(4);
                        }else{
                          $no=1+$this->uri->segment(5);
                        }
  					 foreach ($video as $key2) {
  					?>
  						<div class="nf-item branding coffee spacing">
  							<div class="item-box">
                  <video width="320" height="240" controls >
                    <source src="<?php echo base_url();?>assets/video/<?php echo $key2->video_file;?>" type="video/mp4" controls>
                    Sorry, your browser doesn't support the video element.
                  </video>
  								<div class="link-zoom">

  									<a href="<?php echo base_url();?>assets/video/<?php echo $key2->video_file;?>" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
  									<div class="gallery-heading">
  										<h4><a href="#"><?php echo $key2->video_name;?></a></h4>

  									</div>
  								</div>

  							</div>
  						</div>
  						<?php

  					 }
  						?>

					</div>
          <!-- Tampilkan Pagging -->
                    <?php // echo $links;?>
				</div>

			</section>


			<!--End Contact-->
