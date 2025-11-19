<?php
session_start();

$localhost = 'localhost'; 
$user = 'root';
$psw = "";
$dbname = 'db';


    try{
        $conn = new PDO("mysql:host=$localhost;dbname=$dbname" , $user , $psw);
    }
    catch (Exception $e){
        echo "Somethig went wrong";
    }
?>