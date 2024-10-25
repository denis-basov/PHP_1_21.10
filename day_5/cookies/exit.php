<?php

// удаляем куки
setcookie("fName", '', time() - 60);
setcookie("lName", '', time() - 60);

header("location:index.php");