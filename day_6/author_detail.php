<?php // страница для просмотра втора детально

// author_detail.php?author_id=3
//var_dump($_GET);

// получаем id автора
$author_id = (int)$_GET['author_id'];
//var_dump($author_id);

$host = 'localhost';
$db_name = 'ashion';
$user = 'root';
$pass = '';

// подключение к БД
$pdo = new PDO("mysql:host=$host;port=3306;dbname=$db_name;charset=utf8", $user, $pass,
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]
);

// запрос на выбор данных по 1 автору
$query = "SELECT * FROM `authors` WHERE `id` = $author_id";

// выполняем запрос к БД
$response = $pdo->query($query);

//echo '<pre>';
//print_r($response->fetch());
//echo '</pre>';

$author = $response->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$author['first_name'] . ' ' . $author['last_name']?></title>
</head>
<body>
    <h1><?=$author['first_name'] . ' ' . $author['last_name']?></h1>
    <img src="<?=$author['avatar']?>" alt="<?=$author['first_name']?> <?=$author['last_name']?>">
    <p><?=$author['biography']?></p>
    <a href="index.php">К списку авторов</a>
</body>
</html>
