<?php

if(isset($_POST["submit"]))
{   
    //Here we grab data from the login form
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    //Here we make instance of login controller class
    include "../classes/db_class.php";
    include "../classes/login_model.php";
    include "../classes/login_controller.php";
    $login = new LoginController($login,$password);
    
    //Here we run error checking and log in user
    $login->loginUser();

    //Here we redirect logged in user to home page
    header("location: ../home.php?errors=none");
}