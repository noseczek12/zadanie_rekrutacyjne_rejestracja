<?php

if(isset($_POST['submit']))
{   
    //Here we grab data from the form
    $login = $_POST['login'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $sex = $_POST['sex'];

    //Here we make instance of Signup controller class
    include "../classes/db_class.php";
    include "../classes/signup_class.php";
    include "../classes/signup_controller.php";
    $signup = new SignupController($login,$password,$name,$surname,$sex);
    
    //Here we run error checking and sign up user
    $signup->signupUser();

    //Here we go back to index page
    header("location: ../index.php?error=none");
}