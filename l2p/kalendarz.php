<?php
	
	@$today = getdate();


/*	
	$miesiac = $today[mon];
	$rok = $today[year];
	$dzien =
	today[wday] nr dniatyg
*/
	$miesiace = ["Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien"];

	echo $miesiace[$today[mon] - 1]." ".$today[year];
	echo "<br/>";
	

	@$ilosc = date('t');

	echo "<TABLE border = \"1\">";
	echo "<tr>";
	echo "<td>Pon</td> <td>Wto</td> <td>Sro</td> <td>Czw</td> <td>Pia</td> <td>Sob</td> <td>Nie</td></tr>";
	

	$j =  7 - $today[wday] ;

	for($a; $a < $j; $a++)
		echo "<td> </td>";
	



	$flag = false;
	
	for($i = 0 ; $i < $ilosc; $i++)
	{
		if(@date('j') == $i)
			echo "<td bgcolor = \"red\">".$i."</td>";
		else if ($i > 0)
		{
			echo "<td>".$i."</td>";
			$flag = true;
		}
		
			
		




		if($flag)
		{
			if($i % 7 == $today[wday])
				echo "</tr>";
		}

		

			
	}
	echo "</tr>";
	echo "</TABLE>";
?>