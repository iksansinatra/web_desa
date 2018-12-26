
		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Project Details"><span>Detail Berita</span></h1>
						<div class="page-breadcrumb">
							<a>Berita</a>/ <span>Detail Berita</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->
		<!-- End Intro Section -->
		<div id="project-detail-section" class="padding pb-60 pt-xs-60 pb-xs-30">
			<div class="container">
				<div class="row ">
					<div class="col-sm-12">
						<div class="heading-box pb-30 ">
							<h2><span>Berita</span> Desa</h2>
							<span class="b-line l-left"></span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="project-details">
							<figure>
                <?php
                foreach ($berita as $key1) {

                ?>
								<center><img src="<?php echo base_url();?>assets/berita/<?php echo $key1->news_image;?>" alt="" width="1920" height="512"></center>
							</figure>
							<div class="project-info col-sm-12 col-lg-4 ">
								<h3>Deskripsi</h3>
								<ul>
									<li>
										<strong>Penulis:</strong><?php echo $key1->news_author;?>
									</li>
									<li>
										<strong>Waktu:</strong><?php
                    //menjadi '08 September 1994'
                    $format1 = date('d F Y', strtotime($key1->news_date));
                    echo $format1;

                    ?>
									</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-7 mt-30">
						<div class="box-title mb-20">
							<h3><?php echo $key1->news_title;?></h3>
						</div>
						<div class="text-content">
							<p>
								<?php echo $key1->news_content;}?>
							</p>

						</div>
					</div>

					<div class="col-sm-12 col-lg-5 mt-40 mt-xs-15">
						<ul class="project-gallery text-right">
							<li>
								<a href="assets/images/popup/small-1-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-1-1.jpg" alt=""></a>
							</li>
							<li>
								<a href="assets/images/popup/small-2-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-2-1.jpg" alt=""></a>
							</li>
							<li>
								<a href="assets/images/popup/small-3-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-3-1.jpg" alt=""></a>
							</li>
							<li>
								<a href="assets/images/popup/small-4-1.jpg" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-4-1.jpg" alt=""></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!-- Related Project-->
		<div class="padding gray-bg ptb-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="heading-box pb-30 ">
							<h2><span>Berita</span> Terkini</h2>
							<span class="b-line l-left"></span>
						</div>

					</div>
					<div class="col-sm-12">
						<div id="related-project" class="nf-carousel-theme">
              <?php
               $no=1;
               foreach ($terkini as $key3) {
              ?>
							<div class="project-item">
								<div class="about-block clearfix">
									<figure>
										<a href="<?php echo base_url();?>assets/berita/<?php echo $key3->news_image;?>"><img class="img-responsive" src="<?php echo base_url();?>assets/berita/<?php echo $key3->news_image;?>" alt="Photo" height="200"></a>
									</figure>
									<div class="text-box mt-25">
										<div class="box-title mb-15">
											<h3><a href="<?php echo site_url("detail-berita-desa?id=".$key3->news_id);?>"><?php echo $key3->news_title;?></a></h3>
										</div>
										<div class="text-content">

											<a href="<?php echo site_url("detail-berita-desa?id=".$key3->news_id);?>" class="btn-text mt-15">Baca Selanjutnya</a>
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
				</div>
			</div>
		</div>
		<!-- Related Project-->
