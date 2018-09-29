<div class="content-wrapper">
    <section class="content-header">
      <h1>
      User Profile UMK
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
                <h4 class="modal-title">Tambah Profile Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Userprofile/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama User</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama" name="userprofile_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Alamat</label>
                      <input type="text" class="form-control" id="password" placeholder="Alamat" name="userprofile_address" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Nomor Handphone</label>
                      <input type="text" class="form-control" id="password" placeholder="Handphone" name="userprofile_phone" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Foto</label>
                      <input type="file" class="form-control" id="password" placeholder="Foto" name="gambar">
                  </div>
                  <div class="form-group">
                    <label for="password">Email</label>
                      <input type="email" class="form-control" id="password" placeholder="Email" name="userprofile_email" required="required">
                  </div>

                  <div class="form-group">
                      <label for="password">Kategori Grup</label>
                    <select class="form-control" name="group_id" required="required">
                        <option>--Pilih Kategori--</option>
                        <?php foreach ($kategori as $key1): ?>
                        <option value="<?php echo $key1->group_id?>" selected ><?php echo $key1->group_name?></option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group">
                      <label for="password">Kategori User</label>
                    <select class="form-control" name="user_id" required="required">
                        <option>--Pilih Kategori--</option>
                        <?php foreach ($kategori2 as $key2): ?>
                        <option value="<?php echo $key2->user_id?>" selected ><?php echo $key2->user_name?></option>
                      <?php endforeach ?>
                    </select>
                  </div>


                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" title="Tambah User">Tambah</button>
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
              <h3 class="box-title">Daftar User</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Grup</th>
                    <th>Foto</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kategori1 as $key) {
                    $id=$key->userprofile_id;
                    $id1=$key->group_id;
                    $id3=$key->user_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->userprofile_name;?></td>
                    <td><?php echo $key->userprofile_address;?></td>
                    <td><?php echo $key->userprofile_email;?></td>
                    <td><?php echo $key->userprofile_phone;?></td>
                    <td><?php echo $key->group_name;?></td>
                    <td><a href="<?php echo base_url()?>assets/userprofile/<?php echo $key->userprofile_image;?>"><img src="<?php echo base_url()?>/assets/userprofile/<?php echo $key->userprofile_image;?>" title="<?php echo $key->userprofile_name;?>" width="100" height="100"></a></td>


                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit User" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus User" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data User</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Userprofile/edit");?>
                             <div class="form-group">
                              <label for="password">User</label>
                              <input type="hidden" class="form-control" value='<?php echo $key->userprofile_id; ?>' name="userprofile_id" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->userprofile_name; ?>' name="userprofile_name" required="required">
                            </div>

                            <div class="form-group">
                              <label for="password">Alamat</label>
                                <input type="text" class="form-control" id="password" placeholder="Alamat" value='<?php echo $key->userprofile_address; ?>' name="userprofile_address" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Nomor Handphone</label>
                                <input type="text" class="form-control" id="password" placeholder="Handphone" value='<?php echo $key->userprofile_phone; ?>' name="userprofile_phone" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Foto</label>
                                <input type="file" class="form-control" id="password" placeholder="Foto" value='<?php echo $key->userprofile_image; ?>' name="gambar" >
                            </div>
                            <div class="form-group">
                              <label for="password">Email</label>
                                <input type="email" class="form-control" id="password" placeholder="Email" value='<?php echo $key->userprofile_email; ?>' name="userprofile_email" required="required">
                            </div>

                            <div class="form-group">
                                <label for="password">Kategori Grup</label>
                              <select class="form-control" name="group_id" required="required">
                                  <option>--Pilih Kategori--</option>
                                  <?php foreach ($kategori as $key1): ?>
                                  <option value="<?php echo $key1->group_id?>"
                                  <?php
                                      if($id1==$key1->group_id){
                                        echo "selected";
                                      }
                                  ?> ><?php echo $key1->group_name?></option>
                                <?php endforeach ?>
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="password">Kategori User</label>
                              <select class="form-control" name="user_id" required="required">
                                  <option>--Pilih Kategori--</option>
                                  <?php foreach ($kategori2 as $key3): ?>
                                  <option value="<?php echo $key3->user_id?>"
                                  <?php
                                      if($id3==$key3->user_id){
                                        echo "selected";
                                      }
                                  ?> ><?php echo $key3->user_name?></option>
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
                          <h4 class="modal-title">Hapus User <?php echo $key->userprofile_name ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus User ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("Userprofile/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->userprofile_id?>" name="userprofile_id" required="required">
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
