<?php



function maximum($x,$y){
    if($x>$y){
        return $x;
        
    }
    else{
        return $y;
       
    }
} 

$a=40;
$b=30;

$test=maximum($a,$b);


   
echo "The max value of $a  and $b  is $test \n";
?>