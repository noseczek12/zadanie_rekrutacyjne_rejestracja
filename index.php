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
    <form action="/includes/login.php" method="post">
	
		Login: <br /> <input type="text" name="login" required /> <br />
		Hasło: <br /> <input type="password" name="password" required/> <br /><br />
		<input type="submit" name="submit" value="submit" />
	
	</form>
    <br/>
    <a href="registration.php">Nie masz konta? Zarejestruj się </a>

    <?php
        if (isset($_SESSION["userId"])){
    ?>
        <p style="color:green;">Jesteś zalogowany</p>
        <p>Witamy serdecznie na naszej stronie internetowej ! </p>
        <p>Numer id użytkownika : <?php echo $_SESSION["userId"]?></p>
        <p>Imię i nazwisko : <?php echo $_SESSION["userName"]." ".$_SESSION["userSurname"]?></p>
        <p>Płeć : <?php echo $_SESSION["userSex"]?></p>
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
</html>