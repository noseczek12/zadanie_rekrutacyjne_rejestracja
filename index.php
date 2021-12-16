<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Strona internetowa </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body> 

    <div class="container login-container">
    <div class="col-md-6 login-form-2">
        <h3>Logowanie</h3>
        <p style="color:red;"><?php if(!empty($_GET['message']))echo $message = $_GET['message']?></p>
        <p style="color:red;"><?php if(!empty($_GET['error']) && $_GET['error']!="none") echo $message = $_GET['error']?></p>
            <form action="/includes/login.php" method="post">
                <div class="form-group">
                <label for="loginInput">Login</label>
                <input type="text" class="form-control" name="login" placeholder="Wpisz login" required>
                </div>
                <div class="form-group">
                <label for="loginInput">Hasło</label>
                <input type="password" class="form-control" name="password" placeholder="Wpisz hasło" required>
                </div>
            <input type="submit" name="submit" class="btnSubmit" value="Zaloguj się" />
            </form>
        <br/>
        <a href="registration.php" class="ForgetPwd">Nie masz konta? Zarejestruj się </a>
    </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>