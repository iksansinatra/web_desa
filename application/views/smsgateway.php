<?php 
  error_reporting(0);
  $hostname = "localhost";
  $username = "root";
  $password = "raspberry";
  $database = "snort";
  $date=date('Y-m-d');
  // Koneksi dan memilih database di server
  mysql_connect($hostname,$username,$password) or die("Koneksi Gagal");
  mysql_select_db($database) or die("Database Tidak Ditemukan");
  //==============================================================
  $query = "select a.cid,a.signature, a.timestamp, inet_ntoa(a.ip_dst) as ip_diserang, inet_ntoa(a.ip_src) as ip_penyerang, b.sig_name
            from acid_event a, signature b 
            where a.ip_src !='3232235793' and a.ip_src != '3232235777' and a.signature=b.sig_id and a.timestamp like '%$date%' and a.status=''";
  $hasil = mysql_query($query);
  while ($data = mysql_fetch_array($hasil)) {
  
  
    $id = $data['cid'];
    $ip_penyerang = $data['ip_penyerang'];
    $ip_diserang = $data['ip_diserang'];
    $ip_diserang = $data['ip_diserang'];
    $serangan = $data['sig_name'];
    $waktu=$data['timestamp'];
    //echo $id;

    //Load Nomor Penerima Notifikasi
    $query2 = "SELECT * FROM t_receiver";
    $hasil2 = mysql_query($query2); 
    while ($data2 = mysql_fetch_array($hasil2)) {
      $nomor=$data2['no_hp'];
      $pesan=$serangan." dilakukan ".$ip_penyerang." pada ".$waktu;
      //echo "$serangan dilakukan $ip_penyerang pada $waktu kirim ke $nomor <br>";

      //Kirim Pesan disini
      $query3 = "INSERT INTO outbox(DestinationNumber, TextDecoded, CreatorID) VALUES  ('$nomor', '$pesan', 'Gammu')"; 
      $hasil3 = mysql_query($query3); 
    }

    //Update Status menjadi terkirim
    $query4 = "UPDATE acid_event SET status = 'ok' WHERE cid = '$id'";
    $hasil4 = mysql_query($query4);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta content='1' http-equiv='refresh'/>
    <title>SMSGateway</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
  </head>
  <body class="hold-transition lockscreen">
  <div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
      <a href="<?php echo base_url();?>"><b>SMS</b>Gateway sedang Aktif</a>
    </div>
    <div class="lockscreen-name"><i class="fa fa-spin fa-refresh"></i>&nbsp; Service Berjalan</div>
    
      
    </div>
    
  </div>
  <script src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
