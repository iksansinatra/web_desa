<div class="content-wrapper">
    <section class="content-header">
      <h1>
      User UMK
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
                <h4 class="modal-title">Tambah User Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("User/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama User</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama User" name="user_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="user_password" required="required">
                  </div>
				  <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="user_fullname" placeholder="Nama Lengkap" required="required">
                                  </div>
                  <!--div class="form-group">
                    <label for="password">User IP Address</label>
                      <input type="text" class="form-control" id="password" placeholder="IP Address" name="user_ipaddress" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Salt</label>
                      <input type="text" class="form-control" id="password" placeholder="Salt" name="user_salt" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Email</label>
                      <input type="email" class="form-control" id="password" placeholder="Email" name="user_email" required="required">
                  </div>

                  <div class="form-group">
                      <label for="password">Waktu Dibuat</label>
                    <div class="input-append date form_datetime">
                        <input type="text" value="" class="form-control" name="user_created" >
                        <span class="add-on"><i class="icon-calendar"></i></span>
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="password">Login Terakhir</label>
                    <div class="input-append date form_datetime">
                        <input type="text" value="" class="form-control" name="user_lastlogin" >
                        <span class="add-on"><i class="icon-calendar"></i></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password">Active</label>
                      <input type="text" class="form-control" id="password" placeholder="Maks 5 karakter" name="username_active" required="required">
                  </div-->
                  <div class="form-group">
                      <label for="password">Kategori</label>
                    <select class="form-control" name="group_id" required="required">
                        <option>--Pilih Kategori--</option>
                        <?php foreach ($kategori as $key1): ?>
                        <option value="<?php echo $key1->group_id?>" selected ><?php echo $key1->group_name?></option>
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
                    <th>Nama User</th>
                    <!--th>IP Address</th>
                    <th>Email</th>
                    <th>Dibuat Pada</th-->
                    <th>Nama Lengkap</th>
                    <th>Kategori</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kategori1 as $key) {
                    $id=$key->user_id;
                    $id1=$key->group_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->user_name;?></td>
                    <!--td><?php echo $key->user_ipaddress;?></td>
                    <td><?php echo $key->user_email;?></td>
                    <td><?php echo $key->user_created;?></td-->
                    <td><?php echo $key->user_fullname;?></td>
                    <td><?php echo $key->group_name;?></td>

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
                           <?php echo form_open_multipart("User/edit");?>
                             <div class="form-group">
                              <label for="password">User</label>
                              <input type="hidden" class="form-control" value='<?php echo $key->user_id; ?>' name="user_id" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->user_name; ?>' name="user_name" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="user_password" value='<?php echo $key->user_password; ?>' required="required">
                            </div>
							<div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" class="form-control"  value='<?php echo $key->user_fullname;?>' name="user_fullname" placeholder="Nama Lengkap" required="required">
                                      </div>
                            <!--div class="form-group">
                              <label for="password">User IP Address</label>
                                <input type="text" class="form-control" id="password" placeholder="IP Address" name="user_ipaddress" value='<?php echo $key->user_ipaddress; ?>' required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Salt</label>
                                <input type="text" class="form-control" id="password" placeholder="Salt" name="user_salt" value='<?php echo $key->user_salt; ?>' required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Email</label>
                                <input type="email" class="form-control" id="password" placeholder="Email" name="user_email" value='<?php echo $key->user_email; ?>' required="required">
                            </div>


                            <div class="form-group">
                                <label for="password">Waktu Dibuat</label>
                              <div class="input-append date form_datetime">
                                  <input type="text" value="<?php echo $key->user_created; ?>" class="form-control" name="user_created" >
                                  <span class="add-on"><i class="icon-calendar"></i></span>
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Login Terakhir</label>
                              <div class="input-append date form_datetime">
                                  <input type="text" value="<?php echo $key->user_lastlogin; ?>" class="form-control" name="user_lastlogin" >
                                  <span class="add-on"><i class="icon-calendar"></i></span>
                              </div>
                            </div>

                            <!--div class="form-group">
                              <label for="password">Dibuat</label>
                              <?php  $buat = strftime('%Y-%m-%dT%H:%M:%S', strtotime($key->user_created)); ?>
                                <input type="datetime-local" class="form-control" id="password" placeholder="Dibuat" name="user_created" value='<?php echo $buat; ?>' required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Login Terakhir</label>
                              <?php  $login = strftime('%Y-%m-%dT%H:%M:%S', strtotime($key->user_lastlogin)); ?>
                                <input type="datetime-local" class="form-control" id="password" placeholder="Login Terakhir" name="user_lastlogin" value='<?php echo $login; ?>' required="required" >
                            </div>
                            <div class="form-group">
                              <label for="password">Active</label>
                                <input type="text" class="form-control" id="password" placeholder="Maks 5 karakter" name="username_active" value='<?php echo $key->username_active; ?>' required="required">
                            </div-->
                            <div class="form-group">
                                <label for="password">Kategori</label>
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
                          <h4 class="modal-title">Hapus User <?php echo $key->user_name ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus User ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("User/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->user_id?>" name="user_id" required="required">
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
