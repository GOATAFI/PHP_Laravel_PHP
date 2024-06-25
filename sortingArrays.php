<?php
$fruits = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango'];
$fruits2 = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango', 'f' => 'dates' ]; //last e ekta key value nilam
sort($fruits);
print_r($fruits);

sort($fruits2); //sort korbe thik e kintu key preserve korbe na
print_r($fruits2); 

$fruitsAssociate = ['a' =>'apple','b' => 'banana', 'o' => 'orange','m' => 'malta','k' => 'kathal',  'm' => 'mango', 'd' => 'dates'];
asort($fruitsAssociate); //associative array k sort korte chaile normal sort() er jaygay asort() use korte hobe
print_r($fruitsAssociate);