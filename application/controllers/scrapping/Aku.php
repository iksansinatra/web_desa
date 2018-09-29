<?php 

$berita = array(
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

for($i=1; $i<=3; $i++){
	$url = "http://umkendari.ac.id/index.php?halaman=".$i;
	$base = file_get_contents($url);
	for($j=1; $j<=2; $j++){
		$text =	getStringBetween($base, '<div id="div'.$j.'">', '</div>');
		
		$tanggal= str_replace('/', '-', getStringBetween($text, '<span class="glyphicon glyphicon-calendar"></span>', '<span class="glyphicon glyphicon-tag">'));
		$tanggal = date('M, d Y', strtotime($tanggal));
		$judul = getStringBetween($text, '<font color="white">', '</font>');
		$tag = getStringBetween($text, '<span class="glyphicon glyphicon-tag"></span>', '<span class="glyphicon glyphicon-user">');
		$penulis = getStringBetween($text, '<span class="glyphicon glyphicon-user"></span> ', '</span><br>');
		$isi = getStringBetween($text, '<p align="justify">', '</p>');
		$gambar = getStringBetween($text, 'berita.php?', '"><font');
		$a = array(
			'judul' => "$judul",
			'tanggal' => "$tanggal", 
			'tag' =>"$tag", 
			'penulis' => "$penulis", 
			'isi' => "$isi" , 
			'gambar' =>"$gambar"
		);

		array_push($berita, $a);
	}
}

		// $text =	getStringBetween($base, '<div id="div'.$j.'">', '</div>');
		// array_push($berita['judul'], getStringBetween($text, '<font color="white">', '</font>'));
		// $tanggal= str_replace('/', '-', getStringBetween($text, '<span class="glyphicon glyphicon-calendar"></span>', '<span class="glyphicon glyphicon-tag">'));
		// array_push($berita['tanggal'], date('Y-m-d', strtotime($tanggal)));
		// array_push($berita['tag'], getStringBetween($text, '<span class="glyphicon glyphicon-tag"></span>', '<span class="glyphicon glyphicon-user">'));
		// array_push($berita['penulis'], getStringBetween($text, '<span class="glyphicon glyphicon-user"></span> ', '</span><br>'));
		// array_push($berita['isi'], getStringBetween($text, '<p align="justify">', '</p>'));
		// array_push($berita['gambar'], getStringBetween($text, 'berita.php?', '"><font'));
echo json_encode($berita);

 ?>