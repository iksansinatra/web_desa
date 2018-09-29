<?php 

$paragraphs = array(

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
function getTag($text1, $sebelum, $sesudah){
	$text = ''.$text1;
	$ini = strpos($text, $sebelum);
	if($ini == ''){
		return '';
	}
	
	$panjang= strpos($text, $sesudah, $ini)-$ini;
	return substr($text, $ini, $panjang+1);
}
function hapusTag($text){
	
	while(($find = getTag($text, '<', '>')) != ''){
			$text = str_replace($find, '', $text);
	}
	return trim($text);
}
function hapus($text){
	
	while(($find = getTag($text, '\\', 'n')) != ''){
			$text = str_replace($find, ' ', $text);
	}
	return trim($text);
}
      $url = "http://umkendari.ac.id/berita.php?baca=293";
      $base = file_get_contents($url);

      echo $base;
   //    $base = getStringBetween($base, '<div class="side-bawah-tengah">', '</div>');

   //    $base = str_replace('&nbsp;', '', $base);
   //    // echo $base;
   //    // $text = getStringBetween($text, 'class="MsoNormal" style="text-align:justify">', '</p>');

   //    while(($find = getStringBetween($base, '<p class="MsoNormal" style="text-align:justify">', '</p>')) != ''){
   //    		$text = hapusTag($find);
   //    		$text = json_encode($text);
	  //     	$text = hapus($text);

	  //     	$text = json_decode($text);
			// array_push($paragraphs, $text);

			// $base = str_ireplace('<p class="MsoNormal" style="text-align:justify">'.$find.'</p>', '', $base);
   //    }
   //    echo json_encode($paragraphs);

 ?>