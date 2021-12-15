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
}