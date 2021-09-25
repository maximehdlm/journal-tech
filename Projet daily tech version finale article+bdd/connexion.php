<?php

$host = "localhost";
$name = "journal-tech";
$user = "root";
$pass = "";


    try{
        $db = new PDO ("mysql:host=$host;dbname=$name", $user, $pass);

    } catch (PDOException $e)

    {
        $errpr = "Erreur :" . $e->getMessage() . "<br>";
        print $error;
        die;
    }


?>