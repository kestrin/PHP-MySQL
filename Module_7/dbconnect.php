<?php
$host = 'localhost';
$user = 'user';
$password = '';

try{
    $conn = new PDO ("mysql:$host; , $user , $password");
    echo "Connected";
} catch (Exception $e){
    echo " Not connected";
}


?>