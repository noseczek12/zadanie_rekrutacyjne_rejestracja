<?php

class Login extends DB{

    protected function getUser($login,$password){
        $statement = $this->connect()->prepare('SELECT password FROM users WHERE login = ?;');

        if(!$statement->execute(array($login)))
        {
            $statement = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($statement->rowCount() == 0 )
        {
            $statement = null;
            header("location: ../index.php?error=Nie znaleziono użytkownika!");
            exit();
        }

        $passwordHashed = $statement->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashed[0]["password"]);

        if($checkPassword == false)
        {
            $statement = null;
            header("location: ../index.php?error=Nieprawidłowe hasło!");
            exit();
        }
        elseif($checkPassword == true){
            $statement = $this->connect()->prepare('SELECT * FROM users WHERE login = ? AND password = ?;');

            if(!$statement->execute(array($login,$passwordHashed[0]["password"])))
            {
                $statement = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($statement->rowCount() == 0 )
            {
                $statement = null;
                header("location: ../index.php?error=Nie ma takiego użytkownika!");
                exit();
            }

            $user = $statement->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userId"] = $user[0]["id"];
            $_SESSION["userLogin"] = $user[0]["login"];
            $_SESSION["userName"] = $user[0]["name"];
            $_SESSION["userSurname"] = $user[0]["surname"];
            $_SESSION["userSex"] = $user[0]["sex"];
            if($_SESSION["userSex"] == "M")
            {
                $_SESSION["userSex"] = "Mężczyzna";
            }
            else
            {
                $_SESSION["userSex"] = "Kobieta";
            }

            $statement = null;
        }

        
    }   
}