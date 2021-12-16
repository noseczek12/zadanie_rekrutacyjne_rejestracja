<?php

class SignupController extends Signup{

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

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location: /registration.php?error=Pusty Formularz");
            exit();
        }
        if($this->invalidLogin() == false){
            header("location: /registration.php?error=Zbyt krótki login(przynajmniej 6 znaków)");
            exit();
        }
        if($this->tooShortPassword() == false){
            header("location: /registration.php?error=Zbyt krótkie hasło(przynajmniej 8 znaków)");
            exit();
        }
        if($this->loginTakenCheck() == false){
            header("location: /registration.php?error=Login w użyciu, proszę wpisać inny");
            exit();
        }

        $this->setUser($this->login, $this->password, $this->name, $this->surname, $this->sex);
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
        if(strlen($this->login)<6)
        {
            $isLoginValid = false;
        }
        else
        {
            $isLoginValid = true;
        }
        return $isLoginValid;
    }

    private function loginTakenCheck(){
        $isntLoginTaken;
        if(!$this->checkUser($this->login))
        {
            $isntLoginTaken = false;
        }
        else
        {
            $isntLoginTaken = true;
        }
        return $isntLoginTaken;
    }

    private function tooShortPassword(){
        $isPasswordTooShort;
        if(strlen($this->password)<8)
        {
            $isPasswordLong = false;
        }
        else
        {
            $isPasswordLong = true;
        }
        return $isPasswordLong; 
    }

}