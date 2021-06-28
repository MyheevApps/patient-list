<?php

require_once 'connect.php';

?>

<!DOCTYPE html>

<html lang="ru">

<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Страница 2</title>
    </head>

    <body>

        <div class="top-menu">

            <ul>
            <li><a href="index.php">Список пациентов</a></li>
            <li><a href="pagetwo.php">Инциденты</a></li>
            </ul>

        </div>

        <table>
            <tr>
                <th><a>UID</a></th>
                <th>Пациент</th>
                <th>Диагноз</th>
                <th>Дата открытия</th>
                <th>Дата закрытия</th>
                <th></th>
            </tr>

            <?php
                $hospital = mysqli_query($connect, query:"SELECT * FROM `incidents`");
                $hospital = mysqli_fetch_all($hospital);
                foreach ($hospital as $part) {
                    ?>
                    
                    <tr>
                        <td><a href="pagethree.php"><?= $part[0]?></a></td>
                        <td><?= $part[1]?></td>
                        <td><?= $part[2]?></td>
                        <td><?= $part[3]?></td>
                        <td><?= $part[4]?></td>
                        <td><a href="pagethree.php">Просмотр</a></td>
                    </tr>

                    <?php
                }
            ?>
        </table>

    </body>

</html>