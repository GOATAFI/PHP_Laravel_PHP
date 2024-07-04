<?php
$name = "Mafi";

echo 'My name is $name \n'; //parse korbe na , echo hoye jabe jemon ase temon e , $name e show korbe , Mafi ar show korbe na cz single quote er jonno , double quote dile abar ei problem thakbe nah
echo PHP_EOL;
echo "My name is $name \n"; //Now okkk

//-------- heredoc -------
$heredoc = <<<EOD
Hiiiiii
This is {$name} speaking \n \n





EOD;

echo $heredoc;