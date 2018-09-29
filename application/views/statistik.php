  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Statistik Tracer UMK
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah statistik Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Statistik/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">statistik</label>
                      <input type="text" class="form-control" id="password" placeholder="statistik" name="nama" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan"  name="ket" required="required">
                  </div>

                  <div class="form-group">
                    <label for="password">Gambar</label>
                      <input type="file" class="form-control" id="password" placeholder="Gambar" name="gambar" >
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" alt="Tambah">Tambah</button>
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
              <h3 class="box-title">Daftar Statistik Tracer</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($statistik as $key) {
                    $id=$key->id_statistik;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->nama;?></td>
                    <td><?php echo $key->ket;?></td>
                    <td><a href="../assets/statistik/<?php echo $key->gambar;?>"><img src="<?php echo base_url()?>/assets/statistik/<?php echo $key->gambar;?>" title="<?php echo $key->nama;?>" width="100" height="100"></a></td>
                    <td><span class="label label-danger">Notification</span></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit statistik" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus statistik" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>

                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah statistik</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Statistik/edit");?>
                             <div class="form-group">
                              <label for="password">statistik</label>
                              <input type="hidden" class="form-control"   value='<?php echo $key->id_statistik; ?>' name="id_statistik" required="required" >
                              <input type="text" class="form-control"  value='<?php echo $key->nama; ?>' name="nama" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Ket</label>
                                <input type="text" class="form-control"  value='<?php echo $key->ket;?>' name="ket" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Gambar</label>
                                <input type="file" class="form-control"  value='<?php echo $key->gambar;?>' name="gambar" required="required">
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
                          <h4 class="modal-title">Hapus statistik <?php echo $key->nama ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus statistik ini?</div>
                        </div>
                        <div class="modal-footer">

                        <?php echo form_open("Statistik/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->id_statistik?>" name="id_statistik" required="required">
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
