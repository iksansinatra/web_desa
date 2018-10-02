<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Perangkat Desa Laywo Jaya
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('perangkat')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Perangkat Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Perangkat/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Perangkat</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Perangkat" name="perangkat_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Jabatan</label>
                      <input type="text" class="form-control" id="password" placeholder="Jabatan"  name="perangkat_text" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tempat Lahir</label>
                      <input type="text" class="form-control" id="password" placeholder="Tempat Lahir"  name="perangkat_place" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal Lahir"  name="perangkat_date" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">SK Perangkat</label>
                      <input type="text" class="form-control" id="password" placeholder="SK Perangkat"  name="perangkat_sk" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Foto</label>
                      <input type="file" class="form-control" id="password" placeholder="Foto"  name="gambar" >
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
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
              <h3 class="box-title">Daftar Perangkat</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Perangkat</th>
                    <th>Jabatan</th>
                    <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
                    <th>SK Perangkat</th>
                    <th>Foto</th>

                    <th style="width: 50px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($perangkat as $key) {
                    $id=$key->perangkat_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->perangkat_name;?></td>
                    <td><?php echo $key->perangkat_text;?></td>
                    <td><?php echo $key->perangkat_place;?></td>
                    <td><?php echo $key->perangkat_date;?></td>
                    <td><?php echo $key->perangkat_sk;?></td>
                    <td><a href="" data-toggle="modal" data-target="#imageModal<?php echo $id;?>"><img src="<?php echo base_url()?>/assets/perangkat/<?php echo $key->perangkat_image;?>" title="<?php echo $key->perangkat_name;?>" width="100" height="100"></a></td>
                    <td>
                      <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>
          <!-- Modal image-->
                      <div class="modal fade" id="imageModal<?php echo $id;?>" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>Lihat Foto</b></h4>
                            </div>
                            <div class="modal-body">
                              <div class="box-body">
                                 <center><img src="<?php echo base_url()?>assets/perangkat/<?php echo $key->perangkat_image;?>" height="300px" width="300px"></center>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Perangkat</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Perangkat/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Perangkat</label>
                              <input type="hidden" class="form-control"  value='<?php echo $key->perangkat_id; ?>' name="perangkat_id" required="required">
                              <input type="hidden" class="form-control" value='<?php echo $key->perangkat_image; ?>' name="perangkat_image" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->perangkat_name; ?>' name="perangkat_name" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Jabatan</label>
                                <input type="text" class="form-control" id="password" placeholder="Jabatan" value='<?php echo $key->perangkat_text; ?>'  name="perangkat_text" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Tempat Lahir</label>
                                <input type="text" class="form-control" id="password" placeholder="Tempat Lahir" value='<?php echo $key->perangkat_place; ?>'  name="perangkat_place" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="password" placeholder="Tanggal Lahir" value='<?php echo $key->perangkat_date; ?>' name="perangkat_date" required="required" >
                            </div>
                            <div class="form-group">
                              <label for="password">SK Perangkat</label>
                                <input type="text" class="form-control" id="password" placeholder="SK Perangkat" value='<?php echo $key->perangkat_sk; ?>'  name="perangkat_sk" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Foto</label>
                                <input type="file" class="form-control" id="password" placeholder="Gambar"  name="gambar" >
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
                            <?php echo form_open("Perangkat/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Perangkat</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->perangkat_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->perangkat_id?>" name="perangkat_id" required="required">
                              <input type="hidden" class="form-control" value="<?php echo $key->perangkat_image?>" name="perangkat_image" required="required">
                              <button type="submit" class="btn btn-danger">Ya</button>
                              <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                            </div>
                            <?php echo form_close(); ?>
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
