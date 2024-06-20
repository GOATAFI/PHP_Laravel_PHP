<?php

function printN($i)
{
    if ($i > 10) {
        return;
    }
    echo $i . "\n";
    $i++;
    printN($i);
}

printN(1);
echo PHP_EOL;
function printNumbers($counter , $end , $stepping = 1){
    if($counter > $end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumbers($counter , $end ,$stepping);
}

printNumbers(20,50,2);