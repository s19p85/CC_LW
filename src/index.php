<html>

<head>
    <title>Каталог машин</title>
</head>

<body>
    <h2>Каталог машин</h2>
    <table border="1" cellpadding="5" cellspacing="1" width="100%">
        <tr>
            <th>Модель</th> 
            <th>Цвет</th>
            <th>Кол-во лошадиных сил</th>
            <th>Макс скорость, км/ч</th>
        </tr>
        <?php
            require_once "connect.pg.inc.php";
            $sql = "SELECT * FROM cars";
            $sta = $pdo->query($sql);
            while ($row = $sta->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row["model"] ?></td>
            <td><?php echo $row["color"] ?></td>
            <td align="center"><?php echo $row["horsepower"]?></td>
            <td align="center"><?php echo $row["speed"]?></td>
        </tr>
        <?php
            }
            $pdo = null;
        ?>
    </table>
</body>

</html>