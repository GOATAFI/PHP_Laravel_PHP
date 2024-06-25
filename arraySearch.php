<?php
$numbers =[1,50,40,330,22,10,43,90,42,55];

if(in_array($n = 50,$numbers)){
    echo "{$n} is here";
    echo PHP_EOL;
}

$index = array_search(10,$numbers);
echo $index;
echo PHP_EOL;

$fruits = ['a' =>'apple','b' => 'banana', 'o' => 'orange','p' => 'alta','k' => 'kathal','m' => 'mango', 'd' => 'dates'];

if(key_exists("a",$fruits)){
    echo "key exists";
}
