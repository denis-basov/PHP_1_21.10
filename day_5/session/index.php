<?php session_start();
// var_dump($_SESSION);
?>
<?php if( isset($_SESSION['fName']) && isset($_SESSION['lName']) ):?>
    <h2>Привет, <?=$_SESSION['fName']?> <?=$_SESSION['lName']?></h2>
    <a href="cabinet.php">Личный кабинет</a>
<?php else:?>
    <?php if("POST" === $_SERVER['REQUEST_METHOD']):?>
        <?php
        // очищаем данные
        $fName = htmlspecialchars(trim($_POST['fname']));
        $lName = htmlspecialchars(trim($_POST['lname']));

        // записываем данные клиента в сессию
        $_SESSION['fName'] = $fName;
        $_SESSION['lName'] = $lName;

        // перезагружаем страницу
        header("Location: index.php");
        ?>
    <?php else:?>
        <form action="" method="POST">
            <label>Имя:</label>
            <input type="text" name="fname"><br>

            <label>Фамилия:</label>
            <input type="text" name="lname"><br>

            <input type="submit" value="Отправить">
        </form>
    <?php endif;?>
<?php endif;?>