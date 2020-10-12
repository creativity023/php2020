<?php
/* Задание 1
Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
*/

$a = 7;
$b = 3;
if ($a >=0 && $b >= 0) {
    echo 'Разность чисел равна: ' .($a - $b);
} elseif ($a < 0 && $b < 0) {
    echo 'Произведение чисел равно: '.($a * $b);
} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    echo 'Сумма чисел равна: '.($a + $b);
}

/* Задание 3
Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return
*/

function multiply($argument1, $argument2) {
    return $argument1 * $argument2;
}

function division($argument1, $argument2) {
    return $argument1 / $argument2;
}

function sum($argument1, $argument2) {
    return $argument1 + $argument2;
}

function subtraction($argument1, $argument2) {
    return $argument1 - $argument2;
}

// Задание 4
/*
В зависимости от переданного значения операции выполнить одну из арифметических операций
 и вернуть полученное значение
*/

function mathOperation($argument1, $argument2, $operation) {
    switch ($operation) {
        case "multiply":
            return $argument1 * $argument2;
        case "division":
            return $argument1 / $argument2;
        case "sum":
            return $argument1 + $argument2;
        case "subtraction":
            return $argument1 - $argument2;
    }
}
echo mathOperation(7, 3, sum);

// Задание 5
/*
 * Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон,
 *  вывести текущий год в подвале при помощи встроенных функций PHP
 */

<?php

$title = 'Title';
$content = "Content";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
</head>
<body>
    <p><?php echo $content?></p>
</body>
<futer>
    <? echo date('Y'); ?>
</futer>
</html>
