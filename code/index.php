<?php
echo "1 task". "\n";
$very_bad_unclear_name  = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and 5 chicken legs";
echo $very_bad_unclear_name . "\n";

echo "\n" . "2 task". "\n";
$var1 = 5;
echo $var1 .  "\n";
$var2 = 15.5;
echo  $var2 . "\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month . "<\n";

echo "\n" . "3 task". "\n";
$num_languages = 4;
$mounths = 11;
$days = $mounths * 16;
$days_per_language = $days / $num_languages;
echo "Мэг изучала каждый язык за " . $days_per_language ." дня ". "\n";
echo 8**2 . "\n";

echo "\n" . "4 task". "\n";
$my_num = 17;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "\n";

echo "\n" . "5 task". "\n";
$a = 10;
$b = 3;
echo $a%$b . "\n";

if($a/$b == 0){
    echo "Делится " . $a/$b;
}
else{
    echo "Делится c остатком " . $a%$b;
}
echo "\n";
$st = pow(2,10);
$sq = sqrt(245);
$array = array(4, 2,5 ,19 ,13 ,0, 10);
$answer = 0;
foreach ($array as $item){
    $answer += pow($item,2);
}
echo sqrt($answer). "\n";
$sq = sqrt(587);
$as_array = array('round'=>round($sq) , 'ceil'=> ceil($sq) , 'floor'=>floor($sq));
echo "round:".round($sq) ." ceil:". ceil($sq) ." floor:". floor($sq) . "\n";

echo "\n" . "6 task". "\n";
function printStringReturnNumber(){
    echo "строка";
    return 42;
}
$my_num = printStringReturnNumber();
echo $my_num . "\n";

echo "\n" . "7 task". "\n";
function increaseEnthusiasm(string $str){
    return $str . "!";
}
echo  increaseEnthusiasm("Мир");
function repeatThreeTimes(string $str){
    return $str.$str.$str;
}
echo  repeatThreeTimes("Мур");
echo "\n";
echo   increaseEnthusiasm(repeatThreeTimes(increaseEnthusiasm("Май")));
echo "\n";














