  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Dosen UMK
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
                <h4 class="modal-title">Tambah Dosen Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Dosen/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Dosen</label>
                      <input type="text" class="form-control" id="password" placeholder="Mata Kuliah" name="lecturer_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan"  name="lecturer_desc" required="required">
                  </div>

                  <div class="form-group">
                    <label for="password">Gambar</label>
                      <input type="file" class="form-control" id="password" placeholder="Gambar" name="gambar" >
                  </div>

                  <div class="form-group">
                      <label for="password">Kategori</label>
                    <select class="form-control" name="major_id">
                        <option>--Pilih Kategori--</option>
                        <?php foreach ($kategori as $key1): ?>
                        <option value="<?php echo $key1->major_id?>" selected><?php echo $key1->major_name?></option>
                      <?php endforeach ?>
                    </select>
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
              <h3 class="box-title">Daftar Dosen</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Dosen</th>
                    <th>Keterangan</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kategori1 as $key) {
                    $id=$key->lecturer_id;
                      $id1=$key->major_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->lecturer_name;?></td>
                    <td><?php echo $key->lecturer_desc;?></td>
                    <td><?php echo $key->major_name;?></td>
                    <td><a href="../assets/dosen/<?php echo $key->lecturer_image;?>"><img src="<?php echo base_url()?>/assets/dosen/<?php echo $key->lecturer_image;?>" title="<?php echo $key->lecturer_name;?>" width="100" height="100"></a></td>

                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit MK" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus MK" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>

                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Dosen</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("dosen/edit");?>
                             <div class="form-group">
                              <label for="password">Dosen</label>
                              <input type="hidden" class="form-control"   value='<?php echo $key->lecturer_id; ?>' name="lecturer_id" required="required" >
                              <input type="text" class="form-control"  value='<?php echo $key->lecturer_name; ?>' name="lecturer_name" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Ket</label>
                                <input type="text" class="form-control"  value='<?php echo $key->lecturer_desc;?>' name="lecturer_desc" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Gambar</label>
                                <input type="file" class="form-control"  value='<?php echo $key->lecturer_image;?>' name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="password">Kategori</label>
                              <select class="form-control" name="major_id">
                                  <option>--Pilih Kategori--</option>
                                  <?php foreach ($kategori as $key1): ?>
                                  <option value="<?php echo $key1->major_id?>"
                                    <?php
                                        if($id1==$key1->major_id){
                                          echo "selected";
                                        }
                                    ?>
                                    ><?php echo $key1->major_name?></option>
                                <?php endforeach ?>
                              </select>
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
                          <h4 class="modal-title">Hapus <?php echo $key->lecturer_name ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus dosen ini?</div>
                        </div>
                        <div class="modal-footer">

                        <?php echo form_open("Dosen/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->lecturer_id?>" name="lecturer_id" required="required">
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
