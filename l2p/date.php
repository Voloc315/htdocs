<?php
	@$today = getdate();
	print_r($today[seconds]);

	echo "<br/> DATA<br/>";

	$spr = checkdate(13, 11111, 2013);
	if($spr)
		echo "poprawna";
	else 
		echo "zle";

	echo "<br/><br/><br/>";

	$czas = mktime(12, 0, 0, 4, $dzien + 20, $rok);

	echo $czas;
?>