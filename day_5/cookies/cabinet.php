<?php if( isset($_COOKIE['fName']) && isset($_COOKIE['lName']) ):?>
    <h1>Личный кабинет</h1>
    <h2>Привет, <?=$_COOKIE['fName']?> <?=$_COOKIE['lName']?></h2>
    <a href="index.php">На главную</a>
    <a href="exit.php">Выйти</a>
<?php else:?>
<!--    <h2>Для отображения этой страницы авторизуйтесь</h2>-->
    <?php header("Location: index.php");?>
<?php endif;?>