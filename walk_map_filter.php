<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function square($n)
{
    printf("Square of %d is %d \n", $n, $n * $n);
}

array_walk($numbers,'square');

//kintu array_walk() abar return korte pare nah , er jonno lage array_map()

function cube($n){
    return $n * $n *$n;
}

$newArray = array_map('cube',$numbers);

print_r($newArray);