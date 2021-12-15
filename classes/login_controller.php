<?php

class LoginController extends Login{

    private $login;
    private $password;

    public function __Construct($login,$password){
        $this->login = $login;
        $this->password = $password;
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=empty_input");
            exit();
        }

        $this->getUser($this->login, $this->password);
    }

    private function emptyInput()
    {
        $isInputEmpty;
        if(empty($this->login) || empty($this->password)){
            $isInputEmpty = false;
        }
        else
        {
            $isInputEmpty = true;
        }
        return $isInputEmpty;
    }

    
}