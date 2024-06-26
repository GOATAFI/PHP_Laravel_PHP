<?php

$number1 = [1,2,4,6,9];
$number2 = [3,5,4,6,11,23];

$common = array_intersect($number1,$number2);
print_r($common);

$fruits1= ['a' =>'apple','b' => 'banana', 'o' => 'orange','p' => 'alta','k' => 'kathal','m' => 'mango', 'd' => 'dates'];
$fruits2 = ['a' =>'apple','c' => 'banana', 'o' => 'orange','p' => 'alta','j' => 'kathal','m' => 'mango', 'd' => 'dates'];

$commonFruit = array_intersect_assoc($fruits1,$fruits2);
print_r($commonFruit);

$diff = array_diff($number1,$number2);
print_r($diff);