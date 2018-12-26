<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Jumlah Penduduk Berdasarkan Usia
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
    <a href="<?php echo site_url('usia')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Usia/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Usia</label>
                      <input type="text" class="form-control" id="password" placeholder="Usia" name="usia_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Jumlah (Jiwa)</label>
                      <input type="number" class="form-control sembarang" id="password" placeholder="Jumlah (Jiwa)"  name="usia_jiwa" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Persentase (%)</label>
                      <input type="text" class="form-control" id="password" placeholder="Persentase (%)"  name="usia_persen" required="required">
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
              <h3 class="box-title">Jumlah Penduduk Berdasarkan Usia</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Usia</th>
                    <th>Jumlah (Jiwa)</th>
                    <th>Persentase (%)</th>
                    <th style="width: 50px">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($usia as $key) {
                    $id=$key->usia_id;
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->usia_name;?></td>
                    <td><?php echo $key->usia_jiwa;?></td>
                    <td><?php echo $key->usia_persen;?></td>
                    <td>
                      <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php echo $id;?>"><i class="fa fa-edit"></i></button>
                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>

                    </td>
                  </tr>
                  <!-- Modal Update-->
                  <div class="modal fade" id="edit<?php echo $id;?>" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Usia/edit");?>
                             <div class="form-group">
                              <label for="password">Usia</label>
                              <input type="hidden" class="form-control"  value='<?php echo $key->usia_id; ?>' name="usia_id" required="required">
                                <input type="text" class="form-control"  value='<?php echo $key->usia_name; ?>' name="usia_name" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Jumlah (Jiwa)</label>
                                <input type="number" class="form-control sembarang" id="password" placeholder="Jumlah (Jiwa)" value='<?php echo $key->usia_jiwa; ?>'  name="usia_jiwa" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Persentase (%)</label>
                                <input type="text" class="form-control" id="password" placeholder="Persentase (%)" value='<?php echo $key->usia_persen; ?>'  name="usia_persen" required="required">
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
                            <?php echo form_open("Usia/delete");?>
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Hapus Data</h4>
                            </div>
                            <div class="modal-body">
                              <div class="alert alert-danger">Apakah anda yakin ingin menghapus Data ini </b>" ?</div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" class="form-control" value="<?php echo $key->usia_id?>" name="usia_id" required="required">
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
