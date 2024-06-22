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


function printData($p){
    $p['fname'] = 'Halum';
    return $p;
}

$newPerson3 =  printData($person);
print_r($person);
print_r($newPerson3);

function printData2(&$p){
    $p['fname'] = 'Hambaa';
    return $p;
}
$newPerson4 =  printData2($person);
print_r($person);
print_r($newPerson4);