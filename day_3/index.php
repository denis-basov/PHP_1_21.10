<?php
/*
$numbers = [1,5,2,4,7];

echo count($numbers);*/

/*
// 1. объявление функции
function greetUser(){
    echo "<p>Hello World!</p>";
}

// 2. вызов
greetUser();
greetUser();*/

/*
$greet = 'Привет'; // глобальная переменная

function sayHello(){
    global $greet;// подключаем глобадбную переменную
    echo $greet;

    $localVar = 'Пока';
    echo $localVar;
}

sayHello();

echo $localVar;*/

/*
function greetUser($userName){
    echo "<p>Привет, $userName</p>";
}

greetUser('Петр');*/

/*
function greetUser($userName){
    echo "<p>Привет, $userName</p>";
}

greetUser();*/

/*
function greetUser(){
    echo "<p>Привет, пользователь</p>";
}

greetUser('Иван');*/

/*
function greetUser($userName = 'неопознанный пользователь'){
    echo "<p>Привет, $userName</p>";
}

greetUser();
greetUser("Петр");*/

/*
$num1 = 5;
$num2 = 10;
function getSum($num1, $num2){
    echo $num1 + $num2 . '<br>';
    $num1++;
    $num2++;
}

getSum(8, 4);
getSum(223, 544);
getSum($num1, $num2);

echo $num1 . '<br>';
echo $num2 . '<br>';*/

/*
$num = 10;
function increment(&$num){
    $num++;
}

increment($num);

echo $num;// 11*/


/*
function getSum($num1, $num2){
    $result = $num1 + $num2;
    return $result;
    //return $num1 + $num2;
}

$res = getSum(7, 8);

echo $res;*/

/*
function doMath($num1, $num2){
    $sum = $num1 + $num2;
    $add = $num1 * $num2;

    //return [$sum, $add];
    return ['sum' => $sum, 'add' => $add];
}

$result = doMath(5, 5);

var_dump($result);*/

/*
function getSum($num1 = 0, $num2 = 0){
    $result = $num1 + $num2;
    return $result;
}
echo getSum(5, 10);*/

/*
function getSum(...$numbers){
    foreach($numbers as $number){
        echo "<p>$number</p>";
    }
}
echo getSum(5, 10, 6, 8);*/

/*
$animals = ['Слон', 'Тигр', 'Черепаха', 'Лев'];
$users = ['Иванов', 'Петров', 'Сидоров'];

// функция для печати массива
function printArr($arr, $tag, $ulClass = 'container', $liClass = 'item'){
    echo "<$tag class='$ulClass'>";
    foreach ($arr as $value) {
        echo "<li class='$liClass'>$value</li>";
    }
    echo "</$tag>";
}

printArr($animals, 'ol', 'animals', 'animal');
printArr($users, 'ul');*/


/**
 * встроенные функции
 */
/*
$fName = 'Ян';
var_dump(mb_strlen($fName));

if(mb_strlen($fName) >= 2){
    echo 'Добро пожаловать';
}else{
    echo 'Имя короткое';
}
*/