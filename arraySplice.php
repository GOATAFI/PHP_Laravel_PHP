<?php
$fruits = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango'];
$moreFruits = ['pineapple','grapes'];
// $newFruits = array_splice($fruits,1,3);
$newFruits = array_splice($fruits,1,3,$moreFruits);

print_r($newFruits);
print_r($fruits);
