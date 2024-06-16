<?php 

$fname = "Isaac";
$lname = "Newton";
$middlename = "Parvez";

printf('His name is %3$s %1$s %2$s ',$fname,$middlename,$lname);
echo "\n";

printf('The binary equivalent of %1$d is %1$b ',12);
echo "\n";
$n = 45.124;
printf("%.2f",$n);

echo "\n";

$m = 123.3253;
$n = 27.155;

printf("%08.2f \n",$m);
printf("%08.2f \n",$n);

// ---------- sprintf ----------

$output = sprintf("His name is %s %s",$fname,$lname);
echo $output;