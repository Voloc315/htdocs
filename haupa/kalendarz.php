<?php
	$today = getdate();

	//pierwszy dzien miesiaca w formie liczbowej
	@$pierwszy_dzien_miesiaca = date("N", mktime(0,0,0,$today[mon],01,$today[year]));
	////////////////////////////////////////////////////////////////////////////////
	
	echo "<TABLE bgcolor = \"#E3C8D6\" border = \"1\">";
	echo "<tr>";
		echo "<td>PON</td> <td>WTO</td> <td>SRO</td> <td>CZW</td> <td>PIA</td> <td>SOB</td> <td>NIE</td>";
	echo "</tr>";
	echo "<tr>";

	//ILOSC DNI W POPRZEDNIM MIESIACU
	@$ilosc_dni_w_poprzednim = date("t", mktime(0,0,0,$today[mon] - 1,01,$today[year]));
	/////////////////////////////////////////////////////////////////////
	
	//WYSPISANIE DNI POPRZEDNIEGO MIESIACA
	$ostatnie_dni = $ilosc_dni_w_poprzednim + 2 - $pierwszy_dzien_miesiaca;

	for($i = $ostatnie_dni; $i <= $ilosc_dni_w_poprzednim; $i++)
		echo "<td bgcolor = \"gray\">".$i."</td>";
	/////////////////////////////////////////////////////////////////////

	//WYSWIETLENIE KALENDZARZA
	for($i = 1, $j = 1; $i <= 36 - $pierwszy_dzien_miesiaca; $i++)
	{	
		//KOLOR DNIA KTORY JETST AKTUALNY
		if($i == date('j'))
			echo "<td bgcolor = \"#3D993D\">".$i."</td>";
		//DNI NASTEPNEGO MIESIACA 
		else if($i > date('t'))
		{	
			echo "<td bgcolor = \"gray\">".$j."</td>";
			$j++;
		}
		//CZERWONE NIDZIELE
		else if((($i + $pierwszy_dzien_miesiaca)- 1) % 7 == 0)
			echo "<td bgcolor = \"red\">".$i."</td>";
		//DNI POPROSTU
		else
			echo "<td bgcolor = \"#5C8AE6\">".$i."</td>";

		//CIECIE
		if((($i + $pierwszy_dzien_miesiaca) - 1) % 7 == 0)
		{
			echo "</tr>";
			if($i < 28)
				echo "<tr>";
		}
	}
	echo "</TABLE>";
?>