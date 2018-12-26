
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Jumlah Penduduk</span></h1>
						<div class="page-breadcrumb">
							<a>Tentang Desa</a> / <span>Jumlah Penduduk</span>
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
								<h2>Jumlah Penduduk Berdasarkan Jenis Kelamin</h2>
							</div>
							<div class="text-content">
								<div class="box">

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th>No.</th>
                  <th>Jenis Kelamin</th>
                  <th>Jumlah (Jiwa)</th>
                  <th>Persentase (%)</th>
                </tr>
								<?php
									 $no=1;
									 foreach ($jenis as $key) {
						 		?>
                <tr>
                  <td><?php echo $no;?>.</td>
                  <td><?php echo $key->jenis_name;?></td>
                  <td><?php echo $key->jenis_jiwa;?></td>
                  <td><?php echo $key->jenis_jiwa;?></td>
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

				<!-- Belanja -->

				<div class="row">

					<div class="col-lg-12 mt-xs-30 mt-sm-30">

						<div class="text-box mt-40">
							<div class="box-title mb-20">
								<h2>Jumlah Penduduk Berdasarkan Usia</h2>
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
                  <th>Usia</th>
                  <th>Jumlah (Jiwa)</th>
                  <th>Persentase (%)</th>
                </tr>
								<?php
									 $no1=1;
									 foreach ($usia as $key1) {
						 		?>
                <tr>
                  <td ><?php echo $no1;?>.</td>
                  <td><?php echo $key1->usia_name;?></td>
                  <td><?php echo $key1->usia_jiwa;?></td>
                  <td><?php echo $key1->usia_persen;?></td>
                </tr>
								<?php
									 $no1++;
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
