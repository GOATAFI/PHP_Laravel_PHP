<?php

$fruits = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango'];

$someFruits = array_slice($fruits, 1);
$someFruits = array_slice($fruits, 2, 3);
$someFruits = array_slice($fruits, 2, 4, true); //true dile element er original index preserved thake

$random = [
    "a" => 10,
    "b" => 20,
    "c" => 30,
    "d" => 40,
    12 => 123,
    "e" => 50
];

$someRandom = array_slice($random, 2);
$someRandom = array_slice($random, 0);
$someRandom = array_slice($random, 0, null, true);

print_r($someFruits);
print_r($someRandom);