<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Pertanyaan UMK
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Pertanyaan"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Pertanyaan Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("pertanyaan/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Judul Pertanyaan</label>
                      <input type="text" class="form-control" id="password" placeholder="Judul Pertanyaan" name="judul" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Dari</label>
                      <input type="text" class="form-control" id="password" placeholder="Dari" name="dari" >
                  </div>
                  <div class="form-group">
                    <label for="password">Isi </label>
                      <textarea class="form-control ckeditor" id="ckditor" placeholder="Isi"  name="isi" required="required"></textarea>
                  </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" title="Tambah Pertanyaan">Tambah</button>
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
              <h3 class="box-title">Daftar Pertanyaan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Judul Pertanyaan</th>
                    <th>Dari</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($pertanyaan as $key) {
                    $id=$key->id_pertanyaan;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->judul;?></td>
                    <td><?php echo $key->dari;?></td>
                    <td><?php echo $key->isi;?></td>
                    <td><span class="label label-danger">Notification</span></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit Gambar" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Gambar" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Pertanyaan</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("pertanyaan/edit");?>
                             <div class="form-group">
                              <label for="password">Judul Pertanyaan</label>
                              <input type="hidden" class="form-control"   value='<?php echo $key->id_pertanyaan; ?>' name="id_pertanyaan" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->judul; ?>' name="judul" required="required">
                            </div>

                            <div class="form-group">
                              <label for="password">Dari</label>
                                <input type="text" class="form-control"  value='<?php echo $key->dari; ?>' name="dari" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Isi</label>
                                <textarea class="form-control ckeditor" id="ckditor"  value='' name="isi" required="required">
                                  <?php echo $key->isi;?>
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
                          <h4 class="modal-title">Hapus Pertanyaan <?php echo $key->judul ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus Pertanyaan ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("pertanyaan/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->id_pertanyaan?>" name="id_pertanyaan" required="required">
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
