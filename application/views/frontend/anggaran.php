
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Anggaran Desa</span></h1>
						<div class="page-breadcrumb">
							<a>Tentang Desa</a>/ <span>Anggaran Desa</span>
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
								<h2>Pendapatan Desa</h2>
							</div>
							<div class="text-content">
								<div class="box">

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 1px">No.</th>
                  <th>Tahun Anggaran</th>
                  <th>Pendapatan Asli Desa</th>
                  <th>Dana Desa</th>
                  <th>Alokasi Dana Desa</th>
                  <th>Bantuan Keuangan</th>
                  <th>Total Pendapatan</th>
                </tr>
								<?php
									 $no=1;
									 foreach ($pendapatan as $key) {
						 		?>
                <tr>
                  <td><?php echo $no;?>.</td>
                  <td><?php echo $key->pendapatan_tahun;?></td>
                  <td><?php echo "Rp. ".number_format($key->pendapatan_pad,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key->pendapatan_dd,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key->pendapatan_add,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key->pendapatan_bk,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key->pendapatan_total,0,',','.');?></td>


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
								<h2>Belanja Desa</h2>
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
                  <th>Tahun Anggaran</th>
                  <th>Penyelenggaraan Pemerintahan</th>
                  <th>Pembangunan Desa</th>
                  <th>Pembinaan Kemasyarakatan</th>
                  <th>Pemberdayaan Masyarakat</th>
                  <th>Belanja Tak Terduga</th>
                  <th>Total Belanja</th>
                </tr>
								<?php
									 $no1=1;
									 foreach ($belanja as $key1) {
						 		?>
                <tr>
                  <td ><?php echo $no1;?>.</td>
                  <td><?php echo $key1->belanja_tahun;?></td>
									<td><?php echo "Rp. ".number_format($key1->belanja_pemerintahan,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key1->belanja_pembangunan,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key1->belanja_pembinaan,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key1->belanja_pemberdayaan,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key1->belanja_lainlain,0,',','.');?></td>
                  <td><?php echo "Rp. ".number_format($key1->belanja_total,0,',','.');?></td>

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
