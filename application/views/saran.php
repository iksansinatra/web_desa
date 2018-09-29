<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Saran UMK
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Saran"><i class="fa fa-plus"></i> Tambah</button>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Saran Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Saran/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Judul Saran</label>
                      <input type="text" class="form-control" id="password" placeholder="Judul Saran" name="suggestion_title" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal" name="suggestion_postdate" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Waktu</label>
                      <input type="time" class="form-control" id="password" placeholder="Waktu" name="suggestion_postime" required="required" >
                  </div>
                  <div class="form-group">
                      <label for="password">Status</label>
                    <div class="radio" required="required">
                      <label><input type="radio" value="1" name="suggestion_accepted" required="required">Terima</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" value="0" name="suggestion_accepted" >Tidak</label>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="password">Kategori</label>
                    <select class="form-control" name="user_id" required="required">
                        <option>--Pilih Kategori--</option>
                        <?php foreach ($kategori as $key1): ?>
                        <option value="<?php echo $key1->user_id?>" selected ><?php echo $key1->user_name?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="password">Isi</label>
                      <textarea class="form-control ckeditor" id="ckditor" placeholder="Isi"  name="suggestion_content" required="required"></textarea>
                  </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" title="Tambah Saran">Tambah</button>
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
              <h3 class="box-title">Daftar Saran</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Judul Saran</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th style="width: 120px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kategori1 as $key) {
                    $id=$key->suggestion_id;
                    $id1=$key->user_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->suggestion_title;?></td>
                    <td><?php echo $key->suggestion_postdate;?></td>
                    <td><?php echo $key->suggestion_postime;?></td>
                    <td><?php echo $key->suggestion_content;?></td>
                    <td>
                      <?php
                      if($key->suggestion_accepted==1)
                      {
                        echo "<span class='label label-success'>Terima</span>";
                      }
                      else{
                        echo "<span class='label label-danger'>Tolak</span>";
                      }
                    ?>
                </td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit Saran" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Saran" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Saran</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Saran/edit");?>
                             <div class="form-group">
                              <label for="password">Judul Saran</label>
                              <input type="hidden" class="form-control" value='<?php echo $key->suggestion_id; ?>' name="suggestion_id" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->suggestion_title; ?>' name="suggestion_title" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Tanggal</label>
                                <input type="date" class="form-control" id="password" placeholder="Tanggal" value='<?php echo $key->suggestion_postdate; ?>' name="suggestion_postdate" >
                            </div>
                            <div class="form-group">
                              <label for="password">Waktu</label>
                                <input type="time" class="form-control" id="password" placeholder="Waktu" name="suggestion_postime" value='<?php echo $key->suggestion_postime; ?>'>
                            </div>
                            <div class="form-group">
                                <label for="password">Status</label>
                              <div class="radio">
                                <label><input type="radio" value="1" <?php if($key->suggestion_accepted==1) { echo "checked=checked";} ?> name="suggestion_accepted">Terima</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" value="0" <?php if($key->suggestion_accepted==0) { echo "checked=checked";} ?> name="suggestion_accepted">Tidak</label>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Kategori</label>
                              <select class="form-control" name="user_id" required="required">
                                  <option>--Pilih Kategori--</option>
                                  <?php foreach ($kategori as $key1): ?>
                                  <option value="<?php echo $key1->user_id?>"
                                  <?php
                                      if($id1==$key1->user_id){
                                        echo "selected";
                                      }
                                  ?> ><?php echo $key1->user_name?></option>
                                <?php endforeach ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="password">Isi</label>
                                <textarea class="form-control ckeditor" id="ckditor"  value='' name="suggestion_content" required="required">
                                  <?php echo $key->suggestion_content;?>
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
                          <h4 class="modal-title">Hapus Saran <?php echo $key->suggestion_title ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus Saran ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("Saran/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->suggestion_id?>" name="suggestion_id" required="required">
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
