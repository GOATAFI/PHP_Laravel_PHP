<?php

$number1 = [1,2,4,6,9];
$number2 = [3,5,4,6,11,23];

$common = array_intersect($number1,$number2);
print_r($common);

$fruits1= ['a' =>'apple','b' => 'banana', 'o' => 'orange','p' => 'alta','k' => 'kathal','m' => 'mango', 'd' => 'dates', 's' => 'seggsy'];
$fruits2 = ['a' =>'apple','c' => 'banana', 'o' => 'orange','p' => 'alta','j' => 'kathal','m' => 'mango', 'd' => 'dates'];

$commonFruit = array_intersect_assoc($fruits1,$fruits2);
print_r($commonFruit);

$diff = array_diff($number1,$number2);
print_r($diff);

$difFruitWithoutAssoc = array_diff($fruits1,$fruits2);
$difFruit = array_diff_assoc($fruits1,$fruits2); //array_diff_assoc for associative arrays to check the keys also
print_r($difFruit);
print_r($difFruitWithoutAssoc);