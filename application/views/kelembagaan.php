<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Potensi Kelembagaan Desa Laywo Jaya
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Potensi Kelembagaan Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Kelembagaan/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Kelembagaan</label>
                      <input type="text" class="form-control" id="password" placeholder="Kelembagaan" name="potential_institute" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tahun 2016</label>
                      <input type="text" class="form-control" id="password" placeholder="" name="potential_2016" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tahun 2017</label>
                      <input type="text" class="form-control" id="password" placeholder="" name="potential_2017" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tahun 2018</label>
                      <input type="text" class="form-control" id="password" placeholder="" name="potential_2018" required="required">
                  </div>
				  <div class="form-group">
                    <label for="password">Tahun 2019</label>
                      <input type="text" class="form-control" id="password" placeholder="" name="potential_2019" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tahun 2020</label>
                      <input type="text" class="form-control" id="password" placeholder="" name="potential_2020" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                    <input type="text" class="form-control" id="password" placeholder="" name="potential_info" required="required">  
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div><!-- /.box-footer -->
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Kelembagaan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <tr><th>Kelembagaan</th></tr>
                    <tr><th>Tahun 2016</th></tr>
                    <tr><th>Tahun 2017</th></tr>
                    <tr><th>Tahun 2018</th></tr>
                    <tr><th>Tahun 2019</th></tr>
					<tr><th>Tahun 2020</th></tr>
					<tr><th>Keterangan</th></tr>

                    <th style="width: 50px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kelembagaan as $key) {
                    $id=$key->kelembagaan_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->potential_institute ;?></td>
                    <td><?php echo $key->potential_2016;?></td>
                    <td><?php echo $key->potential_2017;?></td>
                    <td><?php echo $key->potential_2018;?></td>
					<td><?php echo $key->potential_2019;?></td>
					<td><?php echo $key->potential_2020;?></td>
					<td><?php echo $key->potential_info;?></td>
                    <td>
                      <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>
                  <!-- Modal Delete-->
                  <div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Hapus Data <?php echo $key->potential_institute ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus Data ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("Kelembagaan/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->kelembagaan_id?>" name="kelembagaan_id" required="required">
                          <button type="submit" class="btn btn-danger">&nbsp;Ya</button>
                          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                        <?php echo form_close(); ?>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Kelembagaan</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Kelembagaan/edit");?>
                             <div class="form-group">
                              <label for="password">Kelembagaan</label>
                              <input type="hidden" class="form-control"  value='<?php echo $key->kelembagaan_id; ?>' name="kelembagaan_id" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->potential_institute; ?>' name="potential_institute" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Tahun 2016</label>
                                <input type="text" class="form-control" id="password" placeholder="" value='<?php echo $key->potential_2016; ?>'  name="potential_2016" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Tahun 2017</label>
                                <input type="text" class="form-control" id="password" placeholder="" value='<?php echo $key->potential_2017; ?>'  name="potential_2017" required="required">
                            </div>
							<div class="form-group">
                              <label for="password">Tahun 2018</label>
                                <input type="text" class="form-control" id="password" placeholder="" value='<?php echo $key->potential_2018; ?>'  name="potential_2018" required="required">
                            </div>
							<div class="form-group">
                              <label for="password">Tahun 2019</label>
                                <input type="text" class="form-control" id="password" placeholder="" value='<?php echo $key->potential_2019; ?>'  name="potential_2019" required="required">
                            </div>
							<div class="form-group">
                              <label for="password">Tahun 2020</label>
                                <input type="text" class="form-control" id="password" placeholder="" value='<?php echo $key->potential_2020; ?>'  name="potential_2020" required="required">
                            </div>
							<div class="form-group">
                              <label for="password">Keterangan</label>
                                <input type="text" class="form-control" id="password" placeholder="" value='<?php echo $key->potential_info; ?>'  name="potential_info" required="required">
                            </div>
                          </div><!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                          </div>
                        <?php echo form_close(); ?>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php
                  $no++;
                  }
                ?>
                </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box-primary -->
        </div><!-- /.col-md -->
      </div><!-- /.row -->
    </section>
  </div>
