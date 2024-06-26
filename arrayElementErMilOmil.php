<?php

$number1 = [1,2,4,6,9];
$number2 = [3,5,4,6,11,23];

$common = array_intersect($number1,$number2);
print_r($common);
