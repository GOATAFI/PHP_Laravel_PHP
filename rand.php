<?php
$numbers = range(40,80);
$random = mt_rand(0,40);

$toss = $numbers[$random];
if($toss %2 == 0){
    echo "Head";
}
else {
    echo "Tail";
}