<?php
$name = 0;
if(isset($name)){
    echo "Name is set";
}
else{
    echo "Name is not set";
}

echo PHP_EOL;

if(empty($name)){
    echo "Name is empty";
}
else{
    echo "Not empty";
}

echo PHP_EOL;
if(isset($name) && (is_numeric($name)|| $name != '')){
    echo "Name is set and it is not empty";
}
else{
    echo "Name is either not set or it is empty";
}