<?php

$students = ['Nahid','Setu','Afsana','Mafi'];


$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}

echo PHP_EOL;
//----------- array_push to push element in the last index of the array ---------------
array_push($students,'Parvez');
$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}

echo PHP_EOL;
// ----------array_pop to pop the last element from the array -------------
array_pop($students);
$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}

echo PHP_EOL;
// ----------- array_shift to delete the first element of the array ------------
array_shift($students);
$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}

echo PHP_EOL;
//----------- array_unshift to insert element at the top of the array -----------
array_unshift($students,"Maafffiii");
$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
