<?php
$string = "Hello World";
$length = strlen($string);
for($i = $length - 1; $i >= 0; $i--) {
    echo $string[$i];
}

echo PHP_EOL;

for($i=1;$i<=$length;$i++){
    echo $string[$i*-1];
}

echo PHP_EOL;

echo strrev($string);

echo PHP_EOL;

$string = "Hello World";
$words = explode(" ", $string);
$reversedWords = array_map(function($word) {
    return strrev($word);
}, $words);
$reversedString = implode(" ", $reversedWords);
echo $reversedString;

