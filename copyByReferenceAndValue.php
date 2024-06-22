<?php
// ------ copy by value ba deep copy ---------
$person = [
'fname' => 'Hello',
'lname' => 'World'
];

$newPerson = $person;
print_r($person);
echo PHP_EOL;
print_r($newPerson);
// ------- copy by reference ba shallow copy --------
$newPerson2 = &$person;
$newPerson2['fname'] = 'Heheboii';
print_r($person);
print_r($newPerson2);