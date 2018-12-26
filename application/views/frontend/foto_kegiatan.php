
			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Portfolio"><span>Foto Kegiatan</span></h1>
						<div class="page-breadcrumb">
							<a>Galeri</a>/<a>Foto Kegiatan</a>
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
  					 foreach ($foto as $key2) {
  					?>
  						<div class="nf-item branding coffee spacing">
  							<div class="item-box">
  								<a> <img alt="1" src="<?php echo base_url();?>assets/foto_kegiatan/<?php echo $key2->image_file;?>" class="item-container" height="250"> </a>
  								<div class="link-zoom">

  									<a href="<?php echo base_url();?>assets/foto_kegiatan/<?php echo $key2->image_file;?>" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
  									<div class="gallery-heading">
  										<h4><a href="#"><?php echo $key2->image_name;?></a></h4>

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
