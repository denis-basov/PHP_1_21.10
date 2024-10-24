<?php
//echo 'Метод запроса страницы: ' . $_SERVER['REQUEST_METHOD'];
?>

<?php if ('POST' === $_SERVER['REQUEST_METHOD']):?>

    <?php
        $fName = htmlspecialchars(trim($_POST['fname']));
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
            <h2>Привет, <?php echo $fName?></h2>
            <p>Имя: <?php echo $fName?></p>
            <p>Фамилия: <?php echo $lName?></p>
        </body>
    </html>
<?php else:?>
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
        <form method="POST">
            <label>Имя:</label>
            <input type="text" name="fname"><br>

            <label>Фамилия:</label>
            <input type="text" name="lname"><br>

            <input type="submit" value="Отправить">
        </form>
    </body>
    </html>
<?php endif; ?>