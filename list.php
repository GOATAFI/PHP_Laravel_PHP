<?php
$color = [255,133,24];
$red = $color[0];
$blue = $color[1];
$green = $color[2];

echo $red;
echo PHP_EOL;

//kintu evabe variable assign korte onek time lagbe ,rather we will use list to assign variable at a time

list($red1,$blue1,$green1) = $color;

echo $green1;