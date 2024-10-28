<?php

$host = 'localhost';
$db_name = 'ashion';
$user = 'root';
$pass = '';

// подключение к БД
$pdo = new PDO("mysql:host=$host;port=3306;dbname=$db_name;charset=utf8", $user, $pass,
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]
);
//var_dump($pdo);

$query = "SELECT id, first_name, last_name, short_info, avatar FROM `authors`";

// выполняем запрос к БД
$response = $pdo->query($query);
// var_dump($response); // объект класса PDOStatement

/*
// Извлекаем первую строку
$author = $response->fetch();

echo '<pre>';
print_r($author);
echo '</pre>';

// получаем всех авторов
$authors = $response->fetchAll();

echo '<pre>';
print_r($authors);
echo '</pre>';*/

/*
while ($row = $response->fetch()) {
    echo "<p>id: $row[id]. Имя: $row[first_name]</p>";
}*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторы</title>
    <style>
        .authors{
            max-width: 1200px;
            padding: 30px;
            margin: 20px auto;
            background-color: aliceblue;

            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .authors .author{
            padding: 15px;
            background-color: #dbeff8;
        }

        .authors .author img{
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Авторы</h1>
    <div class="authors">
        <?php while ($author = $response->fetch()): ?>
            <div class="author">
                <img src="<?=$author['avatar']?>" alt="<?=$author['first_name']?> <?=$author['last_name']?>">
                <h2><?=$author['first_name']?> <?=$author['last_name']?></h2>
                <p><?=$author['short_info']?></p>
                <a href="author_detail.php?author_id=<?=$author['id']?>">Читать биографию</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
