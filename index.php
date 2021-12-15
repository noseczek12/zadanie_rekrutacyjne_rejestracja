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
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="password" /> <br />
        Imię: <br /> <input type="text" name="name" /> <br />
        Nazwisko: <br /> <input type="text" name="surname"/><br />
        Płeć: <br /> <input type="text" name="sex"/><br /><br />
		<input type="submit" name="submit" value="submit" />
	
	</form>

</body>