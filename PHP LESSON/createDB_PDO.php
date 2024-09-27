<?php
//Deklarimi i Parametrave:

$host='localhost';
$user= 'root';
$pass = '';

try{
    $conn = new PDO ("mysql:host=$host",$user,$pass);
    $sql="Create database testingg";
    $conn -> exec($sql);
    echo "DataBase is created";
}catch(Exception $e){
        echo " Database not created,something went wrong";
    

}



?>