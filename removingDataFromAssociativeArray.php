<?php
$person = [
'fname' => 'Nahid',
'lname' => 'Parvez'
];

print_r($person);
unset($person['fname']);
print_r($person);