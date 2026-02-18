<?php
/*1.	Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: 
a.	Если $a и $b положительные, вывести их разность. 
b.	Если $а и $b отрицательные, вывести их произведение. 
c.	Если $а и $b разных знаков, вывести их сумму. */


$a = 15;
$b = 12;

if ($a >=0 && $b >= 0){
    echo $a - $b;
} elseif ($a < 0 && $b < 0){
    echo $a * $b;
} elseif(($a >= 0 XOR $b >= 0) ){
    echo $a + $b;
}

echo "\n";


switch ($a){
    case(0): 
        echo $a;
}



/*3.	Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/

function sum($a, $b){
    return $a + $b;
}

function diff($a, $b){
    return $a - $b;
}

function multiplicate($a, $b){
    return $a * $b;
}

function dev($a, $b){
    return $a / $b;
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задание 1</h1>
    
    <h1>Задание 2</h1>
    <h1>Задание 3</h1>
    <p><?="Числа: " . $a . ", " . $b?></p>
    <p><?="Сумма - " . sum($a, $b)?></p>
    <p><?="Разность - " . diff($a, $b)?></p>
    <p><?="Произведение - " . multiplicate($a, $b)?></p>
    <p><?="Деление - " . dev($a, $b)?></p>
</body>
</html>