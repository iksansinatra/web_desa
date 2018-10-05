<?php
error_reporting(0);
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Beranda
      </h1>
    </section>
    <section class="content col-lg-12 connectedSortable" >
    	 <div class="page-content">
      <!-- /.ace-settings-container -->
      <div class="row">

        <div class="col-xs-12">
          <h2>Selamat Datang, <?php echo $this->session->userdata('user_fullname')?></h2>
          <div class="infobox infobox-green infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-text-height"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Text</div>
              <div class="infobox-content"><?php echo $text?></div>
            </div>
          </div>

          <div class="infobox infobox-blue infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-video-camera"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Video</div>
              <div class="infobox-content"><?php echo $video?></div>
            </div>
          </div>

          <div class="infobox infobox-grey infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-image"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Images</div>
              <div class="infobox-content"><?php echo $image?></div>
            </div>
          </div>

          <div class="infobox infobox-pink infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-users"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Guest</div>
              <div class="infobox-content"><?php echo $guest?></div>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    </section>
  </div>
