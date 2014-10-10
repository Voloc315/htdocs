<?php		
 	$df = "count.dat";

 	if(!($fp = @fopen($df, 'r')))
 	{
 		$count = 0;
 	}
 	else
 	{
 		$count = fgets($fp, 100);
 		fclose($fp);

 	}

 	$count +=1;

 	$fp = fopen($df, 'w');

 	if(!flock($fp, LOCK_EX))
 	{
 		fclose($fp);
 		return;
 	}
 	else
 	{
 		fputs($fp, $count);
 		flock($fp, LOCK_UN);
 		fclose($fp);
 	}

 	echo $count;
?>