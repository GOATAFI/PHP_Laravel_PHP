<?php

$students = ['Nahid', 'Setu', 'Afsana', 'Mafi'];

// Function to print the array
function printArray($array) {
    foreach ($array as $element) {
        echo $element . "\n";
    }
}

printArray($students);

echo PHP_EOL;

// ----------- array_push to push element in the last index of the array ---------------
array_push($students, 'Parvez');
printArray($students);

echo PHP_EOL;

// ---------- array_pop to pop the last element from the array -------------
array_pop($students);
printArray($students);

echo PHP_EOL;

// ----------- array_shift to delete the first element of the array ------------
array_shift($students);
printArray($students);

echo PHP_EOL;

// ----------- array_unshift to insert element at the top of the array -----------
array_unshift($students, "Maafffiii");
printArray($students);

?>
