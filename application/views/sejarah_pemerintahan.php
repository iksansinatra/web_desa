  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Sejarah Pemerintahan Desa Laywo Jaya
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah Sejarah"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('Sejarah_Pemerintahan')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Sejarah Pemerintahan</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Sejarah_Pemerintahan/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama" name="sejarah_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Periode</label>
                    <input type="text" class="form-control" id="password" placeholder="Periode" name="sejarah_periode" required="required">
                      <!-- <input type="number" class="form-control" min="2000" max="3000" id="sembarang" placeholder="Periode" name="sejarah_periode" required="required"> - <input type="number" class="form-control" min="2000" max="3000" id="sembarang" placeholder="Periode" name="sejarah_periode" required="required"> -->
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan" name="sejarah_keterangan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Gambar</label>
                    <input type="file" class="form-control" id="password" placeholder="Foto" name="gambar">
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
              <h3 class="box-title">Sejarah Pemerintahan Desa</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Periode</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>

                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($sejarah_pemerintahan as $key) {
                    $id=$key->sejarah_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->sejarah_name;?></td>
                    <td><?php echo $key->sejarah_periode;?></td>
                    <td><?php echo $key->sejarah_keterangan;?></td>
          <td><a href="" data-toggle="modal" data-target="#imageModal<?php echo $id;?>"><img src="<?php echo base_url()?>/assets/sejarah_pemerintahan/<?php echo $key->sejarah_image;?>" width="100" height="100"></a></td>
                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
           <!-- Modal image-->
                      <div class="modal fade" id="imageModal<?php echo $id;?>" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>Lihat Gambar</b></h4>
                            </div>
                            <div class="modal-body">
                              <div class="box-body">
                                 <center><img src="<?php echo base_url()?>assets/sejarah_pemerintahan/<?php echo $key->sejarah_image;?>" height="300px" width="300px"></center>
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
                          <h4 class="modal-title">Ubah Sejarah Desa</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Sejarah_Pemerintahan/edit");?>
                             <div class="form-group">
                              <label for="password">Nama</label>
                              <input type="text" class="form-control"  value='<?php echo $key->sejarah_name; ?>' name="sejarah_name" required="required">
                              <input type="hidden" class="form-control"   value='<?php echo $key->sejarah_id; ?>' name="sejarah_id" required="required" >
                              <input type="hidden" class="form-control" value='<?php echo $key->sejarah_image; ?>' name="sejarah_image" required="required" readonly>
                            </div>
                            <div class="form-group">
                              <label for="password">Periode</label>
                              <input type="text" class="form-control"  value='<?php echo $key->sejarah_periode; ?>' name="sejarah_periode" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Keterangan</label>
                              <input type="text" class="form-control"  value='<?php echo $key->sejarah_keterangan; ?>' name="sejarah_keterangan" required="required">
                            </div>
              <div class="form-group">
                              <label for="password">Gambar</label>
                                <input type="file" class="form-control" id="password" placeholder="Foto"  name="gambar" >
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
                        <?php echo form_open("Sejarah_Pemerintahan/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Sejarah Pemerintahan</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->sejarah_name?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->sejarah_id?>" name="sejarah_id" required="required">
                              <input type="hidden" class="form-control" value="<?php echo $key->sejarah_image?>" name="sejarah_image" required="required">
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
