<?php

$students = [
    'fname' => 'Nahid',
    'lname' => 'Parvez',
    'age' => 24,
    'class' => 'Hons 3rd Year',
    'section' => 'A'
];

print_r($students);
// associative array theke string e convert korar 2 ta way ache , 1. serialize 2.JSON
//--------- serialize ---------
$serialized = serialize($students);
echo $serialized;

echo PHP_EOL;
$newStudents = unserialize($serialized);
print_r($newStudents);

// -------- JSON --------
$jsonData = json_encode($students);
echo $jsonData;
echo PHP_EOL;
$jsonStudentsObject = json_decode($jsonData);
print_r($jsonStudentsObject);

echo PHP_EOL;
$jsonStudentsArray = json_decode($jsonData,true);
print_r($jsonStudentsArray);