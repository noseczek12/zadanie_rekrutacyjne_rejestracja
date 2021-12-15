<?php

class Login extends DB{

    protected function getUser($login,$password){
        $statement = $this->connect()->prepare('SELECT password FROM users WHERE login = ?;');

        if(!$statement->execute(array($login,$password))){
            $statement = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($statement->rowCount() == 0 )
        {
            $statement = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $passwordHashed = $statement->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashed[0]["password"]);

        if($checkPassword == false){
            $statement = null;
            header("location: ../index.php?error=wrong_password");
            exit();
        }
        elseif($checkPassword == true){
            $statement = $this->connect()->prepare('SELECT * FROM users WHERE login = ? AND password = ?;');

            if(!$statement->execute(array($login,$password))){
                $statement = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($statement->rowCount() == 0 )
            {
                $statement = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $statement->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userId"] = $user[0]["id"];
            $_SESSION["userLogin"] = $user[0]["login"];

            $statement = null;
        }

        
    }   
}