<?php 

function evenOdd($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}

$x = 13;

if(evenOdd($x)){
    echo "{$x} is even number";
}
else{
    echo "{$x} is odd number";
}

echo PHP_EOL;

function factorial( int $n){
    $result = 1;
    for($i=$n;$i>1;$i--){
        $result *= $i;
    }
    return $result;
}
$x = 5;
echo "Factorial of {$x} is ". factorial($x);

echo PHP_EOL;
function serve($foodType = "Coffee",$numberOfItems = "1 Cup"){
    echo "{$numberOfItems} of {$foodType} have been served";
}
$i = "salad";
$n = "3 Plates";
serve($i,$n);