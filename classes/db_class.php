<?php

class DB{
    protected private function connect(){
        try
        {
            $username = "root";
            $password = "";
            $db = new PDO('mysql:host=localhost; dbname=page_database',$username,$password);
            return $db;
        }
        catch(PDOException $e)
        {
            print "Error!: ". $e->getMessage() . "<br/>";
            die();
        }
    }
}