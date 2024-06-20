<?php

function fibonacciRecur($old , $new ,  $end){
    static $start;
    $start = $start ?? 1;
    if($start > $end){
        return;
    }
    $start++;
    echo $old."\n";

    $temp = $old + $new;
    $old = $new;
    $new = $temp;

    fibonacciRecur($old,$new,$end);
}

fibonacciRecur(0,1,10);