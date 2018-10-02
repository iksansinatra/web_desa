  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Kegiatan Desa Laywo Jaya
      </h1>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" title="Tambah"><i class="fa fa-plus"></i> Tambah</button>
	  <a href="<?php echo site_url('agenda')?>" class="btn btn-white btn-success btn-bold tooltip-success" data-rel="tooltip" data-placement="top" title="Refresh Page">
                          <i class="fa fa-refresh"></i>
                        </a>
      <!-- Modal Insert-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Kegiatan Baru</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart("Agenda/input");?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="password">Nama Kegiatan</label>
                      <input type="text" class="form-control" id="password" placeholder="Nama Kegiatan" name="agenda_name" required="required">
                  </div>
                  <div class="form-group">
                    <label for="password">Keterangan</label>
                      <input type="text" class="form-control" id="password" placeholder="Keterangan"  name="agenda_desc" required="required">
                  </div>

                  <div class="form-group">
                    <label for="password">Tanggal</label>
                      <input type="date" class="form-control" id="password" placeholder="Tanggal" name="agenda_date" >
                  </div>
                  <div class="form-group">
                    <label for="password">Waktu</label>
                      <input type="time" class="form-control" id="password" placeholder="Waktu" name="agenda_time" >
                  </div>
                  <div class="form-group">
                    <label for="password">Tempat</label>
                      <input type="text" class="form-control" id="password" placeholder="Tempat" name="agenda_place" >
                  </div>
                  <div class="form-group">
                    <label for="password">Organizer</label>
                      <input type="text" class="form-control" id="password" placeholder="Organizer" name="agenda_organizer" >
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
              <h3 class="box-title">Daftar Kegiatan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Kegiatan</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                    <th>Organizer</th>
                    <th style="width: 120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($agenda as $key) {
                    $id=$key->agenda_id;

                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $key->agenda_name;?></td>
                    <td><?php echo $key->agenda_desc;?></td>
                    <td><?php echo $key->agenda_date;?></td>
                    <td><?php echo $key->agenda_time;?></td>
                    <td><?php echo $key->agenda_place;?></td>
                    <td><?php echo $key->agenda_organizer;?></td>

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
                          <h4 class="modal-title">Ubah Kegiatan</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box-body">
                           <?php echo form_open_multipart("Agenda/edit");?>

                            <div class="form-group">
                              <label for="password">Nama Kegiatan</label>
                                <input type="hidden" class="form-control"   value='<?php echo $key->agenda_id; ?>' name="agenda_id" required="required" >
                                <input type="text" class="form-control" id="password" placeholder="Nama Kegiatan" value='<?php echo $key->agenda_name; ?>' name="agenda_name" required="required">
                            </div>
                            <div class="form-group">
                              <label for="password">Keterangan</label>
                                <input type="text" class="form-control" id="password" placeholder="Keterangan" value='<?php echo $key->agenda_desc; ?>' name="agenda_desc" required="required">
                            </div>

                            <div class="form-group">
                              <label for="password">Tanggal</label>
                                <input type="date" class="form-control" id="password" placeholder="Tanggal" name="agenda_date" value='<?php echo $key->agenda_date; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Waktu</label>
                                <input type="time" class="form-control" id="password" placeholder="Waktu" name="agenda_time" value='<?php echo $key->agenda_time; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Tempat</label>
                                <input type="text" class="form-control" id="password" placeholder="Tempat" name="agenda_place" value='<?php echo $key->agenda_place; ?>' >
                            </div>
                            <div class="form-group">
                              <label for="password">Organizer</label>
                                <input type="text" class="form-control" id="password" placeholder="Organizer" name="agenda_organizer" value='<?php echo $key->agenda_organizer; ?>' >
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
                          <h4 class="modal-title">Hapus Kegiatan </h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->agenda_name ?></b>" ?</div>
                        </div>
                        <div class="modal-footer">

                        <?php echo form_open("Agenda/delete");?>
                          <input type="hidden" class="form-control" value="<?php echo $key->agenda_id?>" name="agenda_id" required="required">
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
