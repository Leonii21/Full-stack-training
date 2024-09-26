<?php

$sport1="Football";
$sport2="Basketball";
$sport3="Handball";
$sport4="Voleyball";

$sports = array('Football','Basketball','Handball','Voleyball');

$sportss= ['Football','Basketball','Handball','Voleyball'];
echo $sportss[1];



echo end($sports);
echo count ($sportss);

$len=count($sports);

for( $i=0; $i<$len; $i++){
    echo $sports[$i], "\n";
}

?>