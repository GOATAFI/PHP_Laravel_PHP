<?php
$string = "Quick brown Brown fog dog nigga";
$replacedString = str_replace('brown','red',$string);
echo $replacedString;
$replacedWithCaseInsesitive = str_ireplace('brown','red',$string);
echo PHP_EOL;
echo $replacedWithCaseInsesitive;
$replacedMany = str_ireplace(['quick','brown'],['fast','blue'],$string);
echo PHP_EOL;
echo $replacedMany;