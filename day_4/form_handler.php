<?php
//print_r($_GET);
//print_r($_POST);

$fName = trim($_POST['fname']);
$fName = htmlspecialchars($fName);
//$fName = htmlspecialchars(trim($_POST['fname']));

$lName = htmlspecialchars(trim($_POST['lname']));
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
    <a href="news.php?fname=<?=$fName?>">Новости</a>
    <h2>Привет, <?php echo $fName?></h2>
    <p>Имя: <?php echo $fName?></p>
    <p>Фамилия: <?php echo $lName?></p>
</body>
</html>
