<?php		
 	@$plik = fopen("dane.txt", "r");
 	if(!$plik)
 		echo "Dane nie zostały wczytane";
 	else
 	{
 		
 	}

 	echo "<table>";
 	echo "<tr>";
 	for($i; $i < 10; $i++)
 	{
 		echo "<td>".$i."</td>";
 		echo "";
 	}
 	echo "</table>";

 	fclose($plik);


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