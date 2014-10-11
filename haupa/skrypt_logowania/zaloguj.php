<?php
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	
	@$plik_login = fopen("login.txt", 'r');
	@$plik_haslo = fopen("haslo.txt", 'r');

	$licznik_login = 0;
	$char = ' ';
	while(!feof($plik_login))
	{
 		$login_plik = fgets($plik_login);
 		//strlen($czytaj)
 		$login_plik[strlen($login_plik) - 1] = $char;

 		if($login.$char == $login_plik)
 			break;

 		$licznik_login++;

 	}

 	/////////////////////////////////////////////////////////////////////////////
 	//HASLO
 	$licznik_haslo = 0;
 	while(!feof($plik_haslo))
 	{
 		$haslo_plik = fgets($plik_haslo);

 		if($licznik_haslo == $licznik_login)
 		{
 			$haslo_plik[strlen($haslo_plik) - 1] = $char;
 			break;
 		}

 		$licznik_haslo++;
 	}


 	if($login.$char == $login_plik && $haslo.$char == $haslo_plik)
 		echo "dostp";
 	else 
 		echo "BRAK DOSTEPU";
 	////////////////////////////////////////////////////////////////////////////////

	fclose($plik_haslo);
	fclose($plik_login);

?>