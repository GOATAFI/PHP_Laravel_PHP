<?php

function doSomething(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}

function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doExtra();
doExtra();
doSomething();
doSomething();
doSomething();
doSomething();