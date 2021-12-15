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
	
	<h3>Rejestracja</h3>
	
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
		<input type="submit" name="submit" value="submit" />
	
	</form>

    <h3>Logowanie</h3>
    <form action="/includes/login.php" method="post">
	
		Login: <br /> <input type="text" name="login" required /> <br />
		Hasło: <br /> <input type="password" name="password" required/> <br />
		<input type="submit" name="submit" value="submit" />
	
	</form>

    <?php
        if (isset($_SESSION["userId"])){
    ?>
        <p style="color:green;">Jesteś zalogowany</p>
        <p>Witamy serdecznie na naszej stronie internetowej ! </p>
        <p>Numer id użytkownika: <?php echo $_SESSION["userId"]?></p>
        <a href="/includes/logout.php">Wyloguj się</a>
    <?php
        }
        else
        {
    ?>
        <p style="color:red;">Wylogowano</p>
    <?php
        }
    ?>

</body>