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
            header("location: ../index.php?error=empty_input");
            exit();
        }
        if($this->invalidLogin() == false){
            header("location: ../index.php?error=username_invalid");
            exit();
        }
        if($this->tooShortPassword() == false){
            header("location: ../index.php?error=too_short_password");
            exit();
        }
        if($this->loginTakenCheck() == false){
            header("location: ../index.php?error=login_taken");
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
        if(!preg_match('/^[a-zA-Z0-9]*$/',$this->login) && strlen($this->login)<6)
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