  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Gambar UHO
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Gambar"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Gambar Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("gambar/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Judul Gambar</label>
                      <input type="text" class="form-control" id="password" placeholder="Judul Gambar" name="nama_gambar" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan Gambar</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan"  name="ket_gambar" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Gambar</label>
                      <input type="file" class="form-control" id="password" placeholder="Gambar" name="gambar" >
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" alt="Tambah Gambar">Tambah</button>
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
              <h3 class="box-title">Daftar Gambar</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Gambar</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($gambar as $key) {
                    $id=$key->id_gambar;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->nama_gambar;?></td>
                    <td><?php echo $key->ket_gambar;?></td>
                    <td><a href="../assets/gambar/<?php echo $key->gambar;?>"><img src="<?php echo base_url();?>/assets/gambar/<?php echo $key->gambar;?>" title="<?php echo $key->nama_gambar;?>" width="100" height="100"></a></td>
                    <td><span class="label label-danger">Notification</span></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit Gambar" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Gambar" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>


                        <!-- Modal Update-->

                    </td>
                  </tr>

                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Penerima</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("gambar/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Gambar</label>
                                <input type="text" class="form-control"  value='<?php echo $key->nama_gambar; ?>' name="nama_gambar" required="required">
                                <input type="hidden" class="form-control"   value='<?php echo $key->id_gambar; ?>' name="id_gambar" required="required" readonly>
                            </div>
                            <div class="form-group">
                              <label for="password">Keterangan Gambar</label>
                                <input type="text" class="form-control"  value='<?php echo $key->ket_gambar;?>' name="ket_gambar" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Gambar</label>
                                <input type="file" class="form-control"  value='<?php echo $key->gambar_berita;?>' name="gambar" required="required">
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

                  <!-- Modal Delete-->
                  <div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Hapus Gambar <?php echo $key->nama_gambar ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus Gambar ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("gambar/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->id_gambar?>" name="id_gambar" required="required">
                          <button type="submit" class="btn btn-danger">&nbsp;Ya</button>
                          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
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
