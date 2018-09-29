<?php 
$error = array();
$berita = array(
		'judul' => array(), 
		'tanggal' =>array(), 
		'tag' =>array(), 
		'penulis' =>array(), 
		'isi' =>array(), 
		'gambar' =>array() 
	);
	
function getStringBetween($text1, $sebelum, $sesudah){
	$text = ''.$text1;
	$ini = strpos($text, $sebelum);
	if($ini == ''){
		return '';
	}
	$ini += strlen($sebelum);
	$panjang= strpos($text, $sesudah, $ini)-$ini;
	return trim(substr($text, $ini, $panjang));
}

for($i=20; $i<=20; $i++){
	$url = "http://umkendari.ac.id/index.php?halaman=".$i;
	$base = file_get_contents($url);
	for($j=1; $j<=2; $j++){	
		if(($text =	getStringBetween($base, '<div id="div'.$j.'">', '</div>')) != ''){
			array_push($berita['judul'], getStringBetween($text, '<font color="white">', '</font>'));
			$tanggal= str_replace('/', '-', getStringBetween($text, '<span class="glyphicon glyphicon-calendar"></span>', '<span class="glyphicon glyphicon-tag">'));
			array_push($berita['tanggal'], date('Y-m-d', strtotime($tanggal)));
			array_push($berita['tag'], getStringBetween($text, '<span class="glyphicon glyphicon-tag"></span>', '<span class="glyphicon glyphicon-user">'));
			array_push($berita['penulis'], getStringBetween($text, '<span class="glyphicon glyphicon-user"></span> ', '</span><br>'));
			array_push($berita['isi'], getStringBetween($text, '<p align="justify">', '</p>'));
			array_push($berita['gambar'], getStringBetween($text, 'berita.php?', '"><font'));
		}else{
			echo 'gagal mengambil berita pada url : '.$url;
		}
	}
}

$string='';
for($i=0; $i< count($berita['isi']); $i++){
		$judul = $berita['judul'][$i];
		$tanggal = $berita['tanggal'][$i];
		$tag = $berita['tag'][$i];
		$penulis = $berita['penulis'][$i];
		$isi = $berita['isi'][$i];
		$gambar = $berita['gambar'][$i];
		$string .= "(NULL, '$judul', '$tanggal', '$tag', '$penulis', '$isi', '$gambar'),";
}
$string = substr($string, 0, strlen($string)-1);
// echo $string;

require 'koneksi.php';
$sql = "INSERT INTO `berita` (`id`, `judul`, `tanggal`, `tag`, `penulis`, `isi`, `gambar`) 
					  VALUES".$string;
try {
             $conn->exec($sql);
             	echo json_encode('berhasil');
       } catch (PDOException $e) {
         	echo json_encode('gagal');
      }
	$conn=null;


foreach ($error as $i) {
	echo $i."<br>";
}
// echo json_encode($berita);




// $text1 = hapusTag(str_replace('&nbsp;', '', getStringBetween($base, '</xml><![endif]-->', '<!--[if gte mso 9]><xml>')));

// $url = "http://umkendari.ac.id/berita.php?baca=".$i;
// $base = file_get_contents($url);
//  $text1 = hapusTag(str_replace('&nbsp;', '', getStringBetween($base, '</xml><![endif]-->', '<!--[if gte mso 9]><xml>')));
// array_push($berita['isi'], $text1);

// echo json_encode($berita['isi'][0]);

// function getTag($text1, $sebelum, $sesudah){
// 	$text = ''.$text1;
// 	$ini = strpos($text, $sebelum);
// 	if($ini == ''){
// 		return '';
// 	}
	
// 	$panjang= strpos($text, $sesudah, $ini)-$ini;
// 	return substr($text, $ini, $panjang+1);
// }
// function hapusTag($text){
	
// 	while(($find = getTag($text, '<', '>')) != ''){
// 			$text = str_replace($find, ' ', $text);
// 	}
// 	return $text;
// }

 ?>