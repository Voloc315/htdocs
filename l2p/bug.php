<?php
	$ceny =[
		"klucz" => "wartosc",
		"kolo" => "2",
	];



while($element = each($wartosc))
{
	echo $element['klucz'];
	echo '-';
	echo $element['wartosc'];
	echo "<br/>";
}
/*
		$dane [0] = "aaa";
		$dane [1] = "bbb";
		$dane [2] = "ccc";



	for($i = 0; $i < 5; $i++)
	{
		echo $dane[$i]."<br/>";
	}

	*/
 ?>