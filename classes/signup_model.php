<?php

class Signup extends DB{

      protected function checkUser($login){
        $statement = $this->connect()->prepare('SELECT login FROM users WHERE login = ?');

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