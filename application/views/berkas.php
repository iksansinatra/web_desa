  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Mekanisme Mengurus Berkas
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Berkas"><i class="fa fa-plus"></i> Tambah</button>
	  <a href="<?php echo site_url('berkas')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Berkas Desa</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Berkas/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Berkas</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Berkas" name="berkas_name" required="required">
                  </div>
				
                  <div class="form-group">
                    <label for="password">Mekanisme</label>
                    <input type="file" class="form-control" id="password" placeholder="Foto" name="gambar">
                  </div>
					<div class="form-group">
                    <label for="password">Syarat</label>
                      <textarea class="form-control ckeditor" id="ckeditor" placeholder="Syarat"  name="berkas_desc" required="required"></textarea>
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
              <h3 class="box-title">Mekanisme Mengurus Berkas</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Berkas</th>
                    <th>Syarat</th>
                    <th>Mekanisme</th>

                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($berkas as $key) {
                    $id=$key->berkas_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->berkas_name;?></td>
                    <td><?php echo $key->berkas_desc;?></td>
					 <td><a href="" data-toggle="modal" data-target="#imageModal<?php echo $id;?>"><img src="<?php echo base_url()?>/assets/berkas/<?php echo $key->berkas_image;?>" width="100" height="100"></a></td>
                    <td>
                      <button type="button" class="btn btn-xs btn-success" title="Edit Berkas" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Berkas" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
				   <!-- Modal image-->
                      <div class="modal fade" id="imageModal<?php echo $id;?>" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>Lihat Mekanisme</b></h4>
                            </div>
                            <div class="modal-body">
                              <div class="box-body">
                                 <center><img src="<?php echo base_url()?>assets/berkas/<?php echo $key->berkas_image;?>" height="300px" width="300px"></center>
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
                          <h4 class="modal-title">Ubah Berkas Desa</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Berkas/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Berkas</label>
                              <input type="text" class="form-control"  value='<?php echo $key->berkas_name; ?>' name="berkas_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->berkas_id; ?>' name="berkas_id" required="required" >
                            </div>
							<div class="form-group">
                              <label for="password">Mekanisme</label>
                                <input type="file" class="form-control" id="password" placeholder="Foto"  name="gambar" >
                            </div>
							<div class="form-group">
                              <label for="password">Syarat</label>
                                <textarea class="form-control ckeditor" id="ckeditor"  value='' name="berkas_desc" required="required">
                                  <?php echo $key->berkas_desc;?>
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
                          <h4 class="modal-title">Hapus Berkas Desa <?php echo $key->berkas_name ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus berkas desa ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("Berkas/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->berkas_id?>" name="berkas_id" required="required">
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
