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

echo "8^2 = ", 8 ** 2 . "\n";

//------
echo "\nTask №5 (assignment operators)\n";

$my_num = $num_1;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo $answer . "\n";

//------
echo "\nTask №6 (math functions)\n";
//--
echo "Work with %:\n";

$a = 10;
$b = 3;
echo $a % $b;

echo "\n";
if ($a % $b == 0) {
    echo "Делиться без остатка: ", $a / $b . "\n";
} else {
    echo "Делится с остатком = ", $a % $b . "\n";
}
//--
echo "\nWork with sqrt and pow:";

$st = pow(2, 10);
echo "\n$st";

$sqrt = sqrt(245);
echo "\n$sqrt";

$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $value) {
    $sum += $value ** 2;
}
echo "\nКорень из суммы квадратов элементов массива: ", sqrt($sum) . "\n";
//--
echo "\nWorking with rounding functions:\n";

$round1 = round(sqrt(379), 1);
$round2 = round(sqrt(379), 2);
echo $round1 . "\n";
echo $round2 . "\n";

$round3 = array(
    'floor' => floor(sqrt(587)),
    'ceil' => ceil(sqrt(587))
);
print_r($round3);
//--
echo "\nWorking with min and max:";

$arrayMinMax = [4, -2, 5, 19, -130, 0, 10];
echo "\nmin in array: " . min($arrayMinMax) . "\n";
echo "max in array: " . max($arrayMinMax) . "\n";
//--
echo "\nWorking with random:\n";

echo "Random number from 1 to 100: " . rand(1, 100) . "\n";
$arrayRandNum = array();
for ($i = 0; $i < 10; $i++) {
    $arrayRandNum[] = rand(1, 100);
}
print_r($arrayRandNum);
//--
echo "\nWorking with abs:";

$a = $num_1;
$b = $num_2;
echo "\n" . abs($a - $b) . "\n";

$arrayABS = [1, 2, -1, -2, 3, -3];
foreach ($arrayABS as $key => $number) {
    $arrayABS[$key] = abs($number);
}
print_r($arrayABS);
//--
echo "\nOther:\n";

$any_num = rand(1, 100);
echo "Current number: ", $any_num . "\n";
$array_of_dividers = [];
for ($i = 1; $i <= $any_num; $i++) {
    if ($any_num % $i == 0) {
        $array_of_dividers[] = $i;
    }
}
print_r($array_of_dividers);

$array_1_10 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$counter = 0;
foreach ($array_1_10 as $element) {
    $sum += $element;
    $counter++;
    if ($sum > 10) {
        break;
    }
}
echo "\nКол-во элементов, сумма которых > 10: " . $counter . "\n";
//------

echo "\nTask №7 (functions)\n";

function printStringReturnNumber(): int
{
    echo "Число: ";
    return 21;
}

$my_num = printStringReturnNumber();
echo $my_num . "\n";
//------

echo "\nTask №8 (another functions)";

function increaseEnthusiasm(string $string): string
{
    return $string . "!";
}

echo "\n", increaseEnthusiasm("I'm tired");

function repeatThreeTimes(string $string): string
{
    return $string . $string . $string;
}

echo "\n", repeatThreeTimes(":( ");
echo "\n", increaseEnthusiasm(repeatThreeTimes("A"));

function cut(string $string, int $l = 10): string
{
    return substr($string, 0, $l);
}

$cut = cut("I want to relax...");
echo "\n", $cut;
//--
function printArray($array, $i = 0): void
{
    if ($i < sizeof($array)) {
        echo $array[$i] . "\n";
        printArray($array, $i + 1);
    }
}

echo "\n";
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
printArray($array);
//--
function sumDigits($number): int
{
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    if ($sum > 9) {
        return sumDigits($sum);
    }
    return $sum;
}

$number = 123456789;
echo "Однозначное число: ", sumDigits($number) . "\n";
//------

echo "\nTask №9 (arrays)\n";
function createXarray(int $l)
{
    for ($i = 1; $i <= $l; $i++) {
        $array[$i] = str_repeat("x", $i);
    }
    return $array;
}

print_r(createXarray(4));

function arrayFill($element, int $l)
{
    for ($i = 0; $i <= $l; $i++) {
        $array[$i] = $element;
    }
    return $array;
}

print_r(arrayFill("y", 6));

function sumTwoDimensionalArray($array)
{
    $sum = 0;
    foreach ($array as $innerArray) {
        foreach ($innerArray as $value) {
            $sum += $value;
        }
    }
    return $sum;
}

$array = [[1, 2, 3], [4, 5], [6]];
echo "Сумма элементов: ", sumTwoDimensionalArray($array);

$number = 1;
for ($i = 0; $i < 3; $i++) {
    $innerArray = array();

    for ($j = 0; $j < 3; $j++) {
        $innerArray[] = $number;
        $number++;
    }

    $twoDimensionalArray[] = $innerArray;
}

$numbers = array(2, 5, 3, 9);
$result = $numbers[0] * $numbers[1] + $numbers[2] * $numbers[3];
echo "\n", $result;

$user = array('name' => "Nikolay", 'surname' => "Timoshchenko", 'patronymic' => "Stepanovich");
echo "\nФИО: ", $user['name'], " ", $user['surname'], " ", $user['patronymic'];

$date = array('year' => 2024, 'month' => "03", 'day' => 8);
echo "\nДата: ", $date['year'], "-", $date['month'], "-", $date['day'];

$arr = array('a', 'b', 'c', 'd', 'e');
echo "\n", sizeof($arr);

$len = count($arr);
echo "\n" . $arr[$len - 1] . " " . $arr[$len - 2] . "\n";
//------

echo "\nTask №9 (if else)";

function sumGreaterTen(int $a, int $b): int
{
    if (($a + $b) > 10) {
        return True;
    } else {
        return False;
    }
}

echo "\n" . sumGreaterTen(4, 5);

function equality(int $a, int $b): int
{
    if ($a == $b) {
        return True;
    } else {
        return False;
    }
}

echo "\n" . equality(55, 55);

$test = 0;
echo "\n", ($test == 0) ? 'верно' : '';

echo "\n";
$age = rand(0, 110);

if ($age < 10 || $age > 99) {
    echo "$age вне [10, 99].\n";
} else {
    $sum = array_sum(str_split($age));

    if ($sum <= 9) {
        echo "Сумма цифр однозначна: $sum\n";
    } else {
        echo "Сумма цифр двузначна: $sum\n";
    }
}

$arr = array(12, 9, 71);
if (sizeof($arr) == 3) {
    $sum = array_sum($arr);
    echo "В массиве 3 элемента, их сумма = " . $sum;
} else {
    echo "В массиве " . sizeof($arr) . " элемента";
}
//------
