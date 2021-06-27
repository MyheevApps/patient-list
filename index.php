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
        <title>Страница 1</title>
    </head>

    <body>

        <div ><h1>Список пациентов</h1></div>

        <table>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Пол</th>
                <th>Дата рождения</th>
                <th>Дата смерти</th>
            </tr>

            <?php
                $hospital = mysqli_query($connect, query:"SELECT * FROM `patients`");
                $hospital = mysqli_fetch_all($hospital);
                foreach ($hospital as $hosp) {
                    ?>
                    
                    <tr>
                        <td><?= $hosp[1]?></td>
                        <td><?= $hosp[2]?></td>
                        <td><?= $hosp[3]?></td>
                        <td><?= $hosp[4]?></td>
                        <td><?= $hosp[5]?></td>
                        <td><?= $hosp[6]?></td>
                    </tr>

                    <?php
                }
            ?>
        </table>

    </body>

</html>