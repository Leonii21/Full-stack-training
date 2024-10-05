<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=test","root","");

    $sql = "ALTER TABLE users DROP COLUMN email";
    $pdo ->exec($sql);
    echo "column was dropped";

}catch(Exception $e){
    echo $e-> getMessage();
}





?>