<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Strona internetowa </title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

    <h3>Logowanie</h3>
    <p style="color:red;"><?php if(!empty($_GET['error']) && $_GET['error']!="none")echo $message = $_GET['error']?></p>
    <form action="/includes/login.php" method="post">
	
		Login: <br /> <input type="text" name="login" required /> <br />
		Hasło: <br /> <input type="password" name="password" required/> <br /><br />
		<input type="submit" name="submit" value="Zaloguj się" />
	
	</form>
    <br/>
    <a href="registration.php">Nie masz konta? Zarejestruj się </a>
    <p style="color:red;"><?php if(!empty($_GET['message']))echo $message = $_GET['message']?></p>
</body>
</html>