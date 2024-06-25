<?php
$fruits = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango'];
$fruits2 = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango', 'f' => 'dates' ]; //last e ekta key value nilam
sort($fruits);
print_r($fruits);

sort($fruits2); //sort korbe thik e kintu key preserve korbe na
print_r($fruits2); 

$fruitsAssociate = ['a' =>'apple','b' => 'banana', 'o' => 'orange','p' => 'malta','k' => 'kathal','m' => 'mango', 'd' => 'dates'];
asort($fruitsAssociate); //associative array k sort korte chaile normal sort() er jaygay asort() use korte hobe , asort() key k preserve kore
print_r($fruitsAssociate);

$numbers = [10,40,20,11,9,3,199,34,300];
asort($numbers);
print_r($numbers);

//asort() use korsi , key gula preserved thakbe, value gula sort hoye jabe kintu key gula thakbe original array er key gulai

for($i=0;$i<count($numbers);$i++){
    echo $numbers[$i];
    echo PHP_EOL;
}

//asort use korar por jodi for loop use kori tahole original array er key onujayi array er element print hobe , sorted array print hobe nah , so we will use foreach loop
echo "----------------";
echo PHP_EOL;
foreach($numbers as $number){
    echo $number;
    echo PHP_EOL;
}

$fruitsAssociate2 = ['a' =>'apple','b' => 'banana', 'o' => 'orange','p' => 'alta','k' => 'kathal','m' => 'mango', 'd' => 'dates'];

ksort($fruitsAssociate2); //ksort() used as key sorting
print_r($fruitsAssociate2);
