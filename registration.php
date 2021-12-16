<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rejestracja </title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
	
	<h3>Rejestracja</h3>
	<p style="color:red;"><?php if(!empty($_GET['error']) && $_GET['error']!="none") echo $message = $_GET['error']?></p>
	<form action="/includes/signup.php" method="post">
	
		Login: <br /> <input type="text" name="login" required /> <br />
		Hasło: <br /> <input type="password" name="password" required/> <br />
        Imię: <br /> <input type="text" name="name" required/> <br />
        Nazwisko: <br /> <input type="text" name="surname" required/><br /><br/>
        Płeć:  <select name="sex" required>
            <option value="">Wybierz...</option>
            <option value="K">Kobieta</option>
            <option value="M">Mężczyzna</option>
        </select><br/><br/>
		<input type="submit" name="submit" value="Zarejestruj się" />
	
	</form>
    <br/>
    <a href="index.php"> Powrót </a>
</body>
</html>
