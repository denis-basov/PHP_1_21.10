<?php if( isset($_COOKIE['fName']) && isset($_COOKIE['lName']) ):?>
    <h2>Привет, <?=$_COOKIE['fName']?> <?=$_COOKIE['lName']?></h2>
    <a href="cabinet.php">Личный кабинет</a>
<?php else:?>
    <?php if("POST" === $_SERVER['REQUEST_METHOD']):?>
        <?php
        // очищаем данные
        $fName = htmlspecialchars(trim($_POST['fname']));
        $lName = htmlspecialchars(trim($_POST['lname']));

        // сохраняем данные в куки
        setcookie("fName", $fName, time() + 60);
        setcookie("lName", $lName, time() + 60);

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








