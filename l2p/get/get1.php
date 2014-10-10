
	<form action = "get.php" method = "get">
		<p>Login</p>
		<input type = "text" name = "login" id = "login"/> <br/>
		<p>Haslo</p>
		<input type = "password" name = "haslo" id = "haslo"/> <br/>
		<input type = "submit" value = "zaloguj" />
	</form>

<?php
	echo "<form action=\"get.php?".$uzytkownik."&haslo=".$haslo."\"method=\"GET\">\n";
?>