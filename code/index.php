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
echo $answer;
