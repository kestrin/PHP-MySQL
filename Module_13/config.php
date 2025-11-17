<?php
session_start()

    $host = 'localhost';
    $user = 'root';
    $psw = "";
    $dbname = 'db1';


    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname" , $user , $psw);
    }
    catch (Exception $e){
        echo "Somethig went wrong";
    }
?>