<?php

$spices = explode(',', 'lal morich,holud,jira');
print_r($spices);
echo PHP_EOL;
$vegetables = preg_split('/(, |,)/', 'brinjal,broccli, carrot, capsicum, potato');
print_r($vegetables);