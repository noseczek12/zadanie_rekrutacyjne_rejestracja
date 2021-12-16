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

    <h3>Panel Główny</h3>

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
    ?>

</body>
</html>