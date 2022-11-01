<?php
echo "\n" . "10 task". "\n";
function printStr(string $str , int $size){
    for ($i=0;$i<$size;$i++){
        echo str_repeat($str, $i+1)."\n";
    }
    echo "\n";
}

printStr("-myr-",20);

echo "\n" . "11 task". "\n";
$array = array(3,4,5,6,7,4,5,5,293,344,4,5,6,7);
$medium = array_sum($array)/count($array);
echo $medium. "\n";
$sum = array_sum(range(1,100));
$func = function(int $value): float {
    return sqrt($value )   ;
};
$sq = array_map($func,$array);
echo  print_r($sq). "\n";
$array_en = range("a","z");
$array_el = range(1,26);
$array_en_el = array_combine($array_en,$array_el);
echo  print_r($array_en_el);
$str = '1234567890';
$result = array_sum(str_split($str ,2 ));

