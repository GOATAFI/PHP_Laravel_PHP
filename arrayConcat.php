<?php
$fruits = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango'];

$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,3,null,true);

$newFruits = array_merge($newFruits1,$newFruits2);

print_r($newFruits);

$newFruitsPlus = $newFruits1 + $newFruits2;
print_r($newFruitsPlus);