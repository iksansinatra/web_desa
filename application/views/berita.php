<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Berita Desa Laywo Jaya
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
	  <a href="<?php echo site_url('berita')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Berita Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Berita/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Berita</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Berita" name="news_title" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Penulis</label>
                      <input type="text" class="form-control" id="password" placeholder="Penulis"  name="news_author" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Gambar Berita</label>
                      <input type="file" class="form-control" id="password" placeholder="Gambar"  name="gambar" >
                  </div>
                  <div class="form-group">
                    <label for="password">Tanggal Berita</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal"  name="news_date" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan Berita</label>
                      <textarea  class="form-control ckeditor" id="ckedtor" placeholder="Keterangan" name="news_content" required="required"></textarea>
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
              <h3 class="box-title">Daftar Berita</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Berita</th>
                    <th>Keterangan</th>
                    <th>Penulis</th>
					<th>Tanggal</th>
                    <th>Gambar</th>

                    <th style="width: 50px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($berita as $key) {
                    $id=$key->news_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->news_title;?></td>
                    <td><?php echo $key->news_content;?></td>
					<td><?php echo $key->news_date;?></td>
                    <td><?php echo $key->news_author;?></td>
                    <td><a href="" data-toggle="modal" data-target="#imageModal<?php echo $id;?>"><img src="<?php echo base_url()?>/assets/berita/<?php echo $key->news_image;?>" title="<?php echo $key->news_title;?>" width="100" height="100"></a></td>
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
                                 <center><img src="<?php echo base_url()?>assets/berita/<?php echo $key->news_image;?>" height="300px" width="300px"></center>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!-- Modal Delete-->
                  <div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                            <?php echo form_open("Berita/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Berita</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->news_title?></b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->news_id?>" name="news_id" required="required">
                              <input type="hidden" class="form-control" value="<?php echo $key->news_image?>" name="news_image" required="required">
                              <button type="submit" class="btn btn-danger">Ya</button>
                              <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
                            </div>
                            <?php echo form_close(); ?>
                          </div>
                    </div>
                  </div>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Berita</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Berita/edit");?>
                             <div class="form-group">
                              <label for="password">Nama Berita</label>
                              <input type="hidden" class="form-control"  value='<?php echo $key->news_id; ?>' name="news_id" required="required">
                              <input type="hidden" class="form-control" value='<?php echo $key->news_image; ?>' name="news_image" required="required" readonly>
                                <input type="text" class="form-control"  value='<?php echo $key->news_title; ?>' name="news_title" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Penulis</label>
                                <input type="text" class="form-control" id="password" placeholder="Penulis" value='<?php echo $key->news_author; ?>'  name="news_author" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Gambar Berita</label>
                                <input type="file" class="form-control" id="password" placeholder="Gambar"  name="gambar" >
                            </div>
                            <div class="form-group">
                              <label for="password">Tanggal Berita</label>
                                <input type="date" class="form-control" id="password" placeholder="Tanggal" value='<?php echo $key->news_date; ?>' name="news_date" required="required" >
                            </div>
                            <div class="form-group">
                              <label for="password">Keterangan Berita</label>
                                <textarea class="form-control ckeditor" id="ckeditor"  value='' style="text-align:justify" name="news_content" required="required">
                                  <?php echo $key->news_content;?>
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
