<?php
header("Content-type: text/html; Charset=UTF-8;");
//Создание объекта и загрузка в него документа
$sxml = simplexml_load_file("catalog.xml");
?>
<html>

<head>
    <title>Тарифы</title>
</head>

<body>
    <h1>Тарифы на выделенные серверы у провайдера vdsina.ru</h1>
    <table border="1" width="100%">
        <tr>
            <th>Память</th>
            <th>Хранилище</th>
            <th>Процессор</th>
            <th>Трафик</th>
            <th>Цена(день)</th>
        </tr>
        <?php

        foreach ($sxml->tariff as $tariff) {
            echo "<tr>";
            echo "<td>", $tariff->ram, "</td>";
            echo "<td>", $tariff->storage, "</td>";
            echo "<td>", $tariff->cpu, "</td>";
            echo "<td>", $tariff->trafic, "</td>";
            echo "<td>", $tariff->price, "</td>";
            echo "</tr>";
        }
?>
    </table>
</body>

</html>