<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Grup UMK
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Grup"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Grup Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Grup/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Grup</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Grup" name="group_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Isi</label>
                      <textarea class="form-control ckeditor" id="ckditor" placeholder="Grup"  name="group_desc" required="required"></textarea>
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
              <h3 class="box-title">Daftar Grup</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Grup</th>
                    <th>Keterangan</th>

                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($grup as $key) {
                    $id=$key->group_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->group_name;?></td>
                    <td><?php echo $key->group_desc;?></td>

                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit Grup" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Grup" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>
                    <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Grup</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Grup/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Grup</label>
                              <input type="text" class="form-control"  value='<?php echo $key->group_name; ?>' name="group_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->group_id; ?>' name="group_id" required="required" >
                            </div>
                            <div class="form-group">
                              <label for="password">Isi Pengumuman</label>
                                <textarea class="form-control ckeditor" id="ckditor"  value='' name="group_desc" required="required">
                                  <?php echo $key->group_desc;?>
                                </textarea>
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
                          <h4 class="modal-title">Hapus Grup <?php echo $key->group_name ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus Grup ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("Grup/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->group_id?>" name="group_id" required="required">
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
