<?php 

for ($i = 0; $i<100;$i++){
    echo $i;
    echo PHP_EOL;
}

for($i = 20; $i<30 ;$i++){
    if($i <27){
        continue;
    }
    echo $i;
    echo PHP_EOL; 
}

for($i = 20;$i<30;++$i){
    if($i == 25){
        break;
    }
    echo $i;
    echo PHP_EOL;
}