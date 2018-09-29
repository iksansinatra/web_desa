  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Pariwisata Desa
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Pariwisata"><i class="fa fa-plus"></i> Tambah</button>
	  <a href="<?php echo site_url('pariwisata')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Pariwisata Desa</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Pariwisata/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Pariwisata Desa</label>
                      <input type="text" class="form-control" id="password" placeholder="Pariwisata Desa" name="pariwisata_name" required="required">
                  </div>
				
                  <div class="form-group">
                    <label for="password">Foto Pariwisata</label>
                    <input type="file" class="form-control" id="password" placeholder="Foto" name="gambar">
                  </div>
					<div class="form-group">
                    <label for="password">Deskripsi Pariwisata</label>
                      <textarea class="form-control ckeditor" id="ckeditor" placeholder="Deskripsi Pariwisata"  name="pariwisata_desc" required="required"></textarea>
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
              <h3 class="box-title">Pariwisata Desa</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Pariwisata Desa</th>
                    <th>Deskripsi Pariwisata</th>
                    <th>Foto Pariwisata</th>

                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($pariwisata as $key) {
                    $id=$key->pariwisata_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->pariwisata_name;?></td>
                    <td><?php echo $key->pariwisata_desc;?></td>
					 <td><a href="" data-toggle="modal" data-target="#imageModal<?php echo $id;?>"><img src="<?php echo base_url()?>/assets/pariwisata/<?php echo $key->pariwisata_image;?>" width="100" height="100"></a></td>
                    <td>
                      <button type="button" class="btn btn-xs btn-success" title="Edit Pariwisata" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus Pariwisata" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
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
                                 <center><img src="<?php echo base_url()?>assets/pariwisata/<?php echo $key->pariwisata_image;?>" height="300px" width="300px"></center>
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
                          <h4 class="modal-title">Ubah Pariwisata Desa</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Pariwisata/edit");?>
                             <div class="form-group">
                              <label for="password">Pariwisata Desa</label>
                              <input type="text" class="form-control"  value='<?php echo $key->pariwisata_name; ?>' name="pariwisata_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->pariwisata_id; ?>' name="pariwisata_id" required="required" >
                            </div>
							<div class="form-group">
                              <label for="password">Foto Pariwisata</label>
                                <input type="file" class="form-control" id="password" placeholder="Foto"  name="gambar" >
                            </div>
							<div class="form-group">
                              <label for="password">Deskripsi Pariwisata</label>
                                <textarea class="form-control ckeditor" id="ckeditor"  value='' name="pariwisata_desc" required="required">
                                  <?php echo $key->pariwisata_desc;?>
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
                          <h4 class="modal-title">Hapus Pariwisata Desa <?php echo $key->pariwisata_name ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus pariwisata desa ini?</div>
                        </div>
                        <div class="modal-footer">
                        <?php echo form_open("Pariwisata/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->pariwisata_id?>" name="pariwisata_id" required="required">
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
