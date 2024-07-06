<?php
$string = "Hello World,Hello Hello Omaigawwwdd";
$string2 ="The lazy fox jumps over the brown dog";
$parts = explode(" ",$string);
print_r($parts);
echo PHP_EOL;
$original = join(" ",$parts);
$original2 = implode(" ",$parts);
echo $original;
echo PHP_EOL;
echo $original2;