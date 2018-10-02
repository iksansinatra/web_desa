  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Belanja Desa Laywo Jaya
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
                <h4 class="modal-title">Tambah Belanja Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Belanja/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Tahun Anggaran</label>
                      <input type="number" class="form-control" min="2000" max="3000" id="sembarang" placeholder="Tahun Anggaran" name="belanja_tahun" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Penyelengaraan Pemerintahan</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Penyelengaraan Pemerintahan"  name="belanja_pemerintahan" required="required">
                  </div>

                  <div class="form-group">
                    <label for="password">Pembangunan Desa</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Pembangunan Desa" name="belanja_pembangunan" >
                  </div>
                  <div class="form-group">
                    <label for="password">Pembinaan Kemasyarakatan</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Pembinaan Kemasyarakatan" name="belanja_pembinaan" >
                  </div>
                  <div class="form-group">
                    <label for="password">Pemberdayaan Masyarakat</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Pemberdayaan Masyarakat" name="belanja_pemberdayaan" >
                  </div>
                  <div class="form-group">
                    <label for="password">Belanja Tak Terduga</label>
                      <input type="text" class="form-control sembarang" id="password"  placeholder="Belanja Tak Terduga" name="belanja_lainlain" >
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
              <h3 class="box-title">Daftar Belanja</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Tahun Anggaran</th>
                    <th>Penyelengaraan Pemerintahan</th>
                    <th>Pembangunan Desa</th>
                    <th>Pembinaan Kemasyarakatan</th>
                    <th>Pemberdayaan Masyarakat</th>
                    <th>Belanja Tak Terduga</th>
                    <th style="width: 150px">Total Belanja</th>
                    <th style="width: 50px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($belanja as $key) {
                    $id=$key->belanja_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->belanja_tahun;?></td>
                    <td><?php echo "Rp. ".number_format($key->belanja_pemerintahan,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->belanja_pembangunan,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->belanja_pembinaan,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->belanja_pemberdayaan,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->belanja_lainlain,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->belanja_total,0,",",".");?></td>

                    <td>

                      <button type="button" class="btn btn-xs btn-success" title="Edit" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" title="Hapus" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>

                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Belanja</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Belanja/edit");?>

                            <div class="form-group">
                              <label for="password">Tahun Anggaran</label>
                                <input type="hidden" class="form-control"   value='<?php echo $key->belanja_id; ?>' name="belanja_id" required="required" >
                                <input type="number" class="form-control" min="2000" max="3000" id="sembarang" placeholder="Tahun Anggaran" value='<?php echo $key->belanja_tahun; ?>' name="belanja_tahun" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Penyelenggaraan Pemerintahan</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Penyelenggaraan Pemerintahan" value='<?php echo $key->belanja_pemerintahan; ?>' name="belanja_pemerintahan" required="required">
                            </div>

                            <div class="form-group">
                              <label for="password">Pembangunan Desa</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Pembangunan Desa" name="belanja_pembangunan" value='<?php echo $key->belanja_pembangunan; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Pembinaan Kemasyarakatan</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Pembinaan Kemasyarakatan" name="belanja_pembinaan" value='<?php echo $key->belanja_pembinaan; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Pemberdayaan Masyarakat</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Pemberdayaan Masyarakat" name="belanja_pemberdayaan" value='<?php echo $key->belanja_pemberdayaan; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Belanja Tak Terduga</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Belanja Tak Terduga" name="belanja_lainlain" value='<?php echo $key->belanja_lainlain; ?>' >
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
                          <h4 class="modal-title">Hapus Data Belanja Desa Tahun <?php echo $key->belanja_tahun ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus data belanja ini?</div>
                        </div>
                        <div class="modal-footer">

                        <?php echo form_open("Belanja/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->belanja_id?>" name="belanja_id" required="required">
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
