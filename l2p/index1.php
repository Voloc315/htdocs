<?php		
 	$text = "KAKAOWY SWIAT";
 	@$plik=fopen("kakao.txt", 'r');
 	if(!$plik)
 	{
 		echo "NIIIIIIII KAKAŁKO";
	}
 	else 
 	{
 		fwrite($plik, $text);

 	}

 	while(!feof($plik))
 		$czytaj=fgets($plik);

 	echo $czytaj;

 $asd = fread($plik, filesize('kakao.txt'));
 echo $asd;
 	

?>