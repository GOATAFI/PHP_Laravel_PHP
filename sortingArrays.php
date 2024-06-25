<?php
$fruits = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango'];
$fruits2 = ['apple', 'banana', 'orange', 'malta', 'kathal', 'mango', 'f' => 'dates' ]; //last e ekta key value nilam
sort($fruits);
print_r($fruits);

sort($fruits2); //sort korbe thik e kintu key preserve korbe na
print_r($fruits2); 
