<?php
echo "\n" . "10 task". "\n";
function printStr(string $str , int $size){
    for ($i=0;$i<$size;$i++){
        echo str_repeat($str, $i+1)."\n";
    }
    echo "\n";
}

printStr("-myr-",20);

