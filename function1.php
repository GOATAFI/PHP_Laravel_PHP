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

echo PHP_EOL;

function sum(int $x, int $y,int $z):int {
    //function declaration seshe () seshe :int bole dilam karon ei function int e return korbe sheta bujhanor jonno
    return $x +$y +$z;
}

echo sum(1,2,3);

echo PHP_EOL;

function sum2($x ,$y , ...$numbers):int {
    //...$numbers diye unlimited paramters receive kora jay , er age kono parameter declare segula k alada vabe handle korte hobe , ... er por ar kono parameter declare kora jabena
    
    $result = 0;
    for($i =0;$i<count($numbers);$i++){
        $result += $numbers[$i];
    }
    return $x + $y + $result;
}

echo sum2(1,2,3,4,5,6);