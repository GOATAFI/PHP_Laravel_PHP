<?php
$string = "Hello World,Hello Hello Omaigawwwdd";
$string2 ="The lazy fox ,jumps over, the brown dog";
$parts = explode(" ",$string);
print_r($parts);
echo PHP_EOL;
$original = join(" ",$parts);
$original2 = implode(" ",$parts);
echo $original;
echo PHP_EOL;
echo $original2;
$parts2 = str_split($string);
print_r($parts2);
$parts3 = strtok($string," ,"); //space and , duita kei count e rakhbe divide korar somoy
while($parts3 !== false){
    echo $parts3."\n";
    $parts3= strtok(" ,");
}
echo PHP_EOL;
$parts5 = preg_split("/ |,/",$string2);
print_r($parts5);