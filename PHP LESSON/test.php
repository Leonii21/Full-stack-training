<?php

function test(){

    static $a=1;
    echo $a;
    $a=$a+1;
    
}

test();



?>