  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Pendapatan Desa Laywo Jaya
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
                <h4 class="modal-title">Tambah Pendapatan Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Pendapatan/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Tahun Anggaran</label>
                      <input type="number" class="form-control" min="2000" max="3000" id="sembarang" placeholder="Tahun Anggaran" name="pendapatan_tahun" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Pendapatan Asli Desa</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Pendapatan Asli Desa"  name="pendapatan_pad" required="required">
                  </div>

                  <div class="form-group">
                    <label for="password">Dana Desa</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Dana Desa" name="pendapatan_dd" >
                  </div>
                  <div class="form-group">
                    <label for="password">Alokasi Dana Desa</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Alokasi Dana Desa" name="pendapatan_add" >
                  </div>
                  <div class="form-group">
                    <label for="password">Bantuan Keuangan</label>
                      <input type="text" class="form-control sembarang" id="password" placeholder="Bantuan Keungan" name="pendapatan_bk" >
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
              <h3 class="box-title">Daftar Pendapatan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Tahun Anggaran</th>
                    <th>Pendapatan Asli Desa</th>
                    <th>Dana Desa</th>
                    <th>Alokasi Dana Desa</th>
                    <th>Bantuan Keungan</th>
                    <th>Total Pendapatan</th>
                    <th style="width: 50px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($pendapatan as $key) {
                    $id=$key->pendapatan_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->pendapatan_tahun;?></td>
                    <td><?php echo "Rp. ".number_format($key->pendapatan_pad,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->pendapatan_dd,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->pendapatan_add,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->pendapatan_bk,0,",",".");?></td>
                    <td><?php echo "Rp. ".number_format($key->pendapatan_total,0,",",".");?></td>

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
                          <h4 class="modal-title">Ubah Data Pendapatan</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Pendapatan/edit");?>

                            <div class="form-group">
                              <label for="password">Tahun Anggaran</label>
                                <input type="hidden" class="form-control"   value='<?php echo $key->pendapatan_id; ?>' name="pendapatan_id" required="required" >
                                <input type="number" class="form-control" min="2000" max="3000" id="sembarang" placeholder="Tahun Anggaran" value='<?php echo $key->pendapatan_tahun; ?>' name="pendapatan_tahun" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Pendapatan Asli Desa</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Pendapatan Asli Desa" value='<?php echo $key->pendapatan_pemerintahan; ?>' name="pendapatan_pad" required="required">
                            </div>

                            <div class="form-group">
                              <label for="password">Dana Desa</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Dana Desa" name="pendapatan_dd" value='<?php echo $key->pendapatan_dd; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Alokasi Dana Desa</label>
                                <input type="text" class="form-control sembarang" id="password" placeholder="Alokasi Dana Desa" name="pendapatan_add" value='<?php echo $key->pendapatan_add; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Bantuan Keuangan</label>
                                <input type="text" class="form-control sembarang " id="password" placeholder="Bantuan Keuangan" name="pendapatan_bk" value='<?php echo $key->pendapatan_bk; ?>' >
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
                          <h4 class="modal-title">Hapus Data Pendapatan Desa Tahun <?php echo $key->pendapatan_tahun ?></h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus data pendapatan ini?</div>
                        </div>
                        <div class="modal-footer">

                        <?php echo form_open("Pendapatan/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->pendapatan_id?>" name="pendapatan_id" required="required">
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
