<?php
$numbers =[1,50,40,330,22,10,43,90,42,55];

if(in_array($n = 50,$numbers)){
    echo "{$n} is here";
    echo PHP_EOL;
}

$index = array_search(10,$numbers);
echo $index;