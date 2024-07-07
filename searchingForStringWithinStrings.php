<?php
$string ="A quick brown Fox jumps over the fox lazy  dog";
echo strpos($string,"fox"); //case sensetive
echo stripos($string,"fox"); //case insesitive
echo PHP_EOL;
$offset = strpos($string,"A");
if($offset !== false){
    echo "Word has been found";
}
else {
    echo "Word has not been found";
}
echo PHP_EOL;
echo strrpos($string,"fox");