  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Link UMK
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Fakultas"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Link Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Link/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Judul</label>
                      <input type="text" class="form-control" id="password" placeholder="Judul" name="link_title" required="required">
                  </div>

                  <div class="form-group">
                    <label for="password">URL</label>
                    <input type="url" class="form-control" id="password" placeholder="Example => https://www.google.co.id" name="link_url" >
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
              <h3 class="box-title">Daftar Link</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Judul</th>
                    <th>Link</th>

                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($link as $key) {
                    $id=$key->link_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->link_title;?></td>
                    <td><?php echo $key->link_url;?></td>


                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit Fakultas" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Fakultas" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>


                        <!-- Modal Update-->

                    </td>
                  </tr>
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data </h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Link/edit");?>
                             <div class="form-group">
                              <label for="password">Judul</label>
                              <input type="hidden" class="form-control"   value='<?php echo $key->link_id; ?>' name="link_id" required="required" >
                              <input type="text" class="form-control"  value='<?php echo $key->link_title; ?>' name="link_title" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Link</label>
                                <input type="url" class="form-control" placeholder="Example => https://www.google.co.id"  value='<?php echo $key->link_url;?>' name="link_url" required="required">
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
                          <h4 class="modal-title">Hapus <?php echo $key->link_title ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("Link/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->link_id?>" name="link_id" required="required">
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
