<?php 

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

$url = "http://umkendari.ac.id/index.php?halaman=20";
try {
	$base = file_get_contents($url);

	echo $base;
} catch (Exception $e) {
	echo 'gagal';
}


 ?>
