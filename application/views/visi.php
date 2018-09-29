  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Visi dan Misi UMK
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
                <h4 class="modal-title">Tambah Visi Misi Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Visi/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Visi</label>
                      <input type="text" class="form-control" id="password" placeholder="Visi" name="visi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Misi</label>
                      <input type="text" class="form-control" id="password" placeholder="Misi"  name="misi" required="required">
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
              <h3 class="box-title">Daftar Visi Misi</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($visi as $key) {
                    $id=$key->id_visi;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->visi;?></td>
                    <td><?php echo $key->misi;?></td>
                    <td><a href="../assets/visi/<?php echo $key->gambar;?>"><img src="<?php echo base_url()?>/assets/visi/<?php echo $key->gambar;?>" title="<?php echo $key->visi;?>" width="100" height="100"></a></td>
                    <td><span class="label label-danger">Notification</span></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit Visi Misi" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Visi Misi" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>

                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Visi</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Visi/edit");?>
                             <div class="form-group">
                              <label for="password">Visi</label>
                              <input type="hidden" class="form-control"   value='<?php echo $key->id_visi; ?>' name="id_visi" required="required" >
                              <input type="text" class="form-control"  value='<?php echo $key->visi; ?>' name="visi" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Misi</label>
                                <input type="text" class="form-control"  value='<?php echo $key->misi;?>' name="misi" required="required">
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
                          <h4 class="modal-title">Hapus fakultas <?php echo $key->visi ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus visi misi ini?</div>
                        </div>
                        <div class="modal-footer">

                        <?php echo form_open("Visi/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->id_visi?>" name="id_visi" required="required">
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
