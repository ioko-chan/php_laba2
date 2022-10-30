<?php
echo "1 task". "</br>";
$very_bad_unclear_name  = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and 5 chicken legs";
echo $very_bad_unclear_name . "</br>";

echo "</br>" . "2 task". "</br>";
$var1 = 5;
echo $var1 .  "</br>";
$var2 = 15.5;
echo  $var2 . "</br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month . "</br>";

echo "</br>" . "3 task". "</br>";
$num_languages = 4;
$mounths = 11;
$days = $mounths * 16;
$days_per_language = $days / $num_languages;
echo "Мэг изучала каждый язык за " . $days_per_language ." дня ". "</br>";
echo 8**2 . "</br>";

echo "</br>" . "4 task". "</br>";
$my_num = 17;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "</br>";

echo "</br>" . "5 task". "</br>";
$a = 10;
$b = 3;
echo $a%$b . "</br>";

if($a/$b == 0){
    echo "Делится " . $a/$b;
}
else{
    echo "Делится c остатком " . $a%$b;
}
echo "</br>";
$st = pow(2,10);
$sq = sqrt(245);
$array = array(4, 2,5 ,19 ,13 ,0, 10);
$answer = 0;
foreach ($array as $item){
    $answer += pow($item,2);
}
echo sqrt($answer). "</br>";
$sq = sqrt(587);
$as_array = array('round'=>round($sq) , 'ceil'=> ceil($sq) , 'floor'=>floor($sq));
echo "round:".round($sq) ." ceil:". ceil($sq) ." floor:". floor($sq) . "</br>";