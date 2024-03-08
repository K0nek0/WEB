<?php
echo "\nTask №1 (access by link)";

$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and a large soda";

echo "\nYour order is: $very_bad_unclear_name.\n";

//------
echo "\nTask №2 (numbers)\n";

$num_1 = 4014;
echo $num_1;

$num_2 = 256;
echo "\n";
echo $num_2;

$num_3 = 71.21;
echo "\n";
echo $num_3;

echo "\n";
echo 10 + 2;

$last_month = 1187.23;
$this_month = 1089.98;
echo "\nРазница между расходами в прошлом и текущем месяце: ", $last_month - $this_month . "\n";

//------
echo "\nTask №3 (multiplication and division)";

$num_languages = 4;
$months = 11;
$days = 16 * $months;
$days_per_language = $days / $num_languages;
echo "\nДней в среднем на изучение каждого языка: ", $days_per_language . "\n";

//------
echo "\nTask №4 (degree)\n";

echo "8^2 = ", 8 ** 2;

//------
