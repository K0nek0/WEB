<?php
echo "Task №1 (regular_expression)\n";
echo "a)\n";
$str_a = 'ahb acb aeb aeeb adcb axeb';
$result_a = [];
$regexp_a = '/a..b/';

preg_match_all($regexp_a, $str_a, $result_a);
echo "Найденные строки:\n", var_dump($result_a), "\n";
//----
echo "b)\n";
$str_b = 'a1b2c3';
$regexp_b = '/[0-9]+/';

function cube($b)
{
    return $b[0] ** 3;
}
echo $result_b = preg_replace_callback($regexp_b, "cube", $str_b), "\n";
