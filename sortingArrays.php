<?php
$fruits = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango'];
$fruits2 = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango', 'f' => 'dates' ]; //last e ekta key value nilam
sort($fruits);
print_r($fruits);

sort($fruits2); //sort korbe thik e kintu key preserve korbe na
print_r($fruits2); 

$fruitsAssociate = ['a' =>'apple','b' => 'banana', 'o' => 'orange','m' => 'malta','k' => 'kathal',  'm' => 'mango', 'd' => 'dates'];
asort($fruitsAssociate); //associative array k sort korte chaile normal sort() er jaygay asort() use korte hobe , asort() key k preserve kore
print_r($fruitsAssociate);

$numbers = [10,40,20,11,9,3,199,34,300];
asort($numbers);
print_r($numbers);

//asort() use korsi , key gula preserved thakbe, value gula sort hoye jabe kintu key gula thakbe original array er key gulai
