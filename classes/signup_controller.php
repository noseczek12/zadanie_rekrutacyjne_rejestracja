<?php

class SignupController{

    private $login;
    private $password;
    private $name;
    private $surname;
    private $sex;

    public function __Construct($login,$password,$name,$surname,$sex){
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->sex = $sex;
    }

    private function emptyInput()
    {
        $isInputEmpty;
        if(empty($this->login) || empty($this->password) || empty($this->name) || empty($this->surname) || empty($this->sex)){
            $isInputEmpty = false;
        }
        else
        {
            $isInputEmpty = true;
        }
        return $isInputEmpty;
    }

    private function invalidLogin(){
        $isLoginValid;
        if(!preg_match('/^[a-zA-Z0-9]*$/',$this->login) && strlen($this->login)<6)
        {
            $isLoginValid = false;
        }
        else
        {
            $result = true;
        }
        return $isLoginValid;
    }

}