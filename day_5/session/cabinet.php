<?php session_start();
// var_dump($_SESSION);
?>
<?php if( isset($_SESSION['fName']) && isset($_SESSION['lName']) ):?>
    <h1>Личный кабинет</h1>
    <h2>Привет, <?=$_SESSION['fName']?> <?=$_SESSION['lName']?></h2>
    <a href="index.php">На главную</a>
    <a href="exit.php">Выйти</a>
<?php else:?>
    <!--    <h2>Для отображения этой страницы авторизуйтесь</h2>-->
    <?php header("Location: index.php");?>
<?php endif;?>
