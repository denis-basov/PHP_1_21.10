<?php

/*
$rating = 1; // от 0 до 5

if($rating > 3){
    echo '<h3>Хороший рейтинг</h3>';
}else{
    echo '<h3>Плохой рейтинг</h3>';
}*/

/*
$login = 'user';
$password = '123456';

if($login === 'user'){
    if($password === '1111111'){
        echo "<h3>Добро пожаловать, $login</h3>";
    }else{
        echo "<h3>Пароль указан неверно</h3>";
    }
}else{
    echo "<h3>Логин указан неверно</h3>";
}*/

/*
$phone = null;
$email = null;

if($phone || $email){
    echo "<h3>Добро пожаловать!</h3>";
}else{
    echo "<h3>Укажите телефон или емейл</h3>";
}*/

/*
$password = '汉字';
echo strlen($password);*/


/*
//echo true;

$is_admin = true;
echo $is_admin ? "Да" : "Нет";*/

/*
//$admin = 'Иван';
echo "Привет, " . ($admin ?? 'студент');*/


/**
 * циклы
 */
/*
$num = 50;

while($num <= 100){
    echo "<p>Счетчик: $num</p>";
    $num += 10;
}*/

/*
// вывести только четные числа
$num = 0;
while($num <= 100){
    if($num % 2 === 0){
        echo "<p>Счетчик: $num</p>";
    }
    $num++;
}*/

/*
for($i = 50; $i < 100; $i += 10){
    echo "<p>Счетик: $i</p>";
}
*/

/*
// вложенные циклы
for($i = 1; $i <= 5; $i++){
    echo "<div>";
    echo "<h2>Внешний цикл. итерация: $i</h2>";
        for($j = 1; $j <= 10; $j++){
            echo "<p>Внутренний цикл. Итерация: $j</p>";
        }
    echo "</div>";
}

var_dump($i);
var_dump($j);
*/

/*
// получить сумму чисел от 0 до 10
$sum = 0;
for ($i = 0; $i <= 10; $i++) {
    //$sum = $sum + $i;
    $sum += $i;
}
echo $sum;*/


// $students = ['Иванов', 'Петров', 'Сидоров', 'Иванова', 'Сидорова'];
//var_dump($students);

//echo $students[0];
//echo $students[1];
//echo $students[2];
//echo $students[3];
//echo count($students);
/*
for($i = 0; $i < count($students); $i++) {
    echo '<h2>' . $students[$i] . '</h2>';
}*/

/*
// выяснить, есть ли у нас студент с фамилией Сидоров
$student = 'Сидоров';

for($i = 0; $i < count($students); $i++) {
    if($student === $students[$i]) {
        echo '<h3>Сидоров найден!</h3>';
        break;
    }
    echo "<p>Студент: $students[$i]</p>";
}*/

/*
$students = ['Иванов', 'Петров', 'Сидоров', 'Иванова', 'Сидорова'];

// если студент по фамилии Сидоров или Сидорова, пропустить.
for($i = 0; $i < count($students); $i++) {
    if($students[$i] === 'Сидоров' || $students[$i] === 'Сидорова'){
        continue;
    }
    echo "<p>Студент: $students[$i]</p>";
}*/

/*
$students = ['Иванов', 'Петров', 'Сидоров', 'Иванова', 'Сидорова'];
for($i = 0; $i < count($students); $i += 2) {
    echo '<h2>' . $students[$i] . '</h2>';
}*/

/**
 * foreach
 */
//$students = ['Иванов', 'Петров', 'Сидоров', 'Иванова', 'Сидорова'];
/*
foreach ($students as $student) {
    echo "<h2>$student</h2>";
}*/

/*
foreach ($students as $key => $student) {
    echo "Ключ: $key. Знаение: $student<br>";
}*/
/*
foreach ($students as $key => $student) {
    echo "<p>" . $key+1 . ". $student</p>";
}*/

//echo "Количество студентов: " . count($students) . " чел.";