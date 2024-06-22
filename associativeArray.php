<?php

$foods = [
    'vegetables' => 'Kumra,Lau,Shaak',
    'fruits' => 'Apple,Orange,Jackfruit',
    'drinks' => 'Coconut Water,Mojo'
];

foreach($foods as $key=>$value){
    echo $key . "=>" . $value ."\n";
    echo $key ."\n";
    echo $value ."\n";
}

echo PHP_EOL;
$keys = array_keys($foods);
for($i = 0;$i<count($keys);$i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";
}