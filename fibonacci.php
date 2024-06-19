<?php

$v = 0;
$o = 1;
$n = 1;

for($i=0;$i<10;$i++){
    echo $v;
    echo PHP_EOL;
    $o = $n;
    $n = $v +$o;
    $v = $o;
}