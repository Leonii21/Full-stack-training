<?php
try{

    $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
    $sql = "ALTER TABLE users ADD email VARCHAR(255)";
    $pdo -> exec($sql);
    echo "Column was created";

}catch(Exception $e){
    echo "Error creating column". $e-> getMessage();

}

// SOMETHING WRONG
?>