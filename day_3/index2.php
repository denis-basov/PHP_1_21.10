<?php

$numbers = [1,5,2,4,7];

$student = [
    'fName' => 'Иван',
    'lName' => 'Петров',
    'age' => 20,
];


//echo '<pre>';
//print_r($student);
//echo '</pre>';

//foreach ($student as $key => $value) {
//    echo "<p class='$key'>$value</p>";
//}

//echo '<h3>Имя: '. $student['fName'] . '</h3>';

//echo "<h3>Имя: $student[fName]</h3>";


$cats = [
    ['name' => 'Барсик', 'color' => 'белый', 'age' => 7, 'avatar' => 'https://images.unsplash.com/photo-1472491235688-bdc81a63246e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2F0fGVufDB8fDB8fHww'],
    ['name' => 'Клепа', 'color' => 'серый', 'age' => 1, 'avatar' => 'https://images.unsplash.com/photo-1511044568932-338cba0ad803?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2F0fGVufDB8fDB8fHww'],
    ['name' => 'Мурка', 'color' => 'черный', 'age' => 4, 'avatar' => 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y2F0fGVufDB8fDB8fHww'],
];

/*
echo '<pre>';
print_r($cats);
echo '</pre>';*/

/*
echo "<div class='cats'>";
    foreach ($cats as $key => $cat) {
        echo "<div class='cat cat-". $key+1 ."'>";
            echo "<img src='{$cat['avatar']}' alt='cat'>";
            echo "<h2>Кличка: {$cat['name']}</h2>";
            echo "<p>Цвет шерсти: {$cat['color']}</p>";
            echo "<p>Возраст: {$cat['age']}</p>";
        echo "</div>";
    }
echo "</div>";
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Имя: <?= $student['fName']?></h2>
</body>
</html>





