<?php
	
	@$today = getdate();
/*	
	$miesiac = $today[mon];
	$rok = $today[year];
	$dzien =
*/
	$miesiace = ["Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien"];

	echo $miesiace[$today[mon]]." ".$today[year];
	echo "<br/>";

	@$ilosc = date('t');
	
	echo "<TABLE border = \"1\" width = \"30\">";
	echo "<tr>";
	for($i = 0; $i < $ilosc; $i++)
	{
		if(@date('j') == $i)
			echo "<td bgcolor = \"red\">".$i."</td>";
		else
			echo "<td>".$i."</td>";
	}
	echo "</tr>";
	echo "</TABLE>";
?>