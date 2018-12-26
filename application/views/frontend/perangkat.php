
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Perangkat Desa</span></h1>
						<div class="page-breadcrumb">
							<a>Tentang Desa</a>/ <span>Perangkat Desa</span>
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

					<div class="col-lg-12 mt-xs-30 mt-sm-30">

						<div class="text-box mt-40">
							<div class="box-title mb-20">
								<h2>Perangkat Desa</h2>
							</div>
							<div class="text-content">
								<div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>SK Pengangkatan</th>
                  <th>Foto</th>
                </tr>
								<?php
									 $no=1;
									 foreach ($perangkat as $key) {
						 		?>
                <tr>
                  <td style="width: 5px"><?php echo $no;?>.</td>
                  <td><?php echo $key->perangkat_name;?></td>
                  <td><?php echo $key->perangkat_text;?></td>
                  <td><?php echo $key->perangkat_place;?></td>
                  <td><?php
									//menjadi '08 September 1994'
									$format1 = date('d F Y', strtotime($key->perangkat_date));
									echo $format1;

									?></td>
                  <td><?php echo $key->perangkat_sk;?></td>
                  <td><img src="<?php echo base_url()?>assets/perangkat/<?php echo $key->perangkat_image;?>" width="250" height="150" ></td>

                </tr>
								<?php
									 $no++;
								 }

								?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
