<?php

class Signup extends DB{

    protected function setUser($login,$password,$name,$surname,$sex){
        $statement = $this->connect()->prepare('INSERT INTO users (login,password,name,surname,sex)
        VALUES (?,?,?,?,?);');

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if(!$statement->execute(array($login,$hashed_password,$name,$surname,$sex))){
            $statement = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($statement->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }  

    protected function checkUser($login){
        $statement = $this->connect()->prepare('SELECT login FROM users WHERE login = ?;');

        if(!$statement->execute(array($login))){
            $statement = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($statement->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
      }  
}