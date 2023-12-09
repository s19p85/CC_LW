<html>

<head>
    <title>Каталог товаров</title>
</head>

<body>
    <h2>Каталог товаров</h2>
    <table border="0" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <th>Автор</th>
            <th>Название</th>
            <th>Год издания</th>
            <th>Цена, руб.</th>
        </tr>
        <?php
            require_once "connect.pg.inc.php";
            $sql = "SELECT * FROM catalog";
            $sta = $pdo->query($sql);
            while ($row = $sta->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row["author"] ?></td>
            <td><?php echo $row["title"] ?></td>
            <td align="center"><?php echo $row["pubyear"]?></td>
            <td align="center"><?php echo $row["price"]?></td>
        </tr>
        <?php
            }
            $pdo = null;
        ?>
    </table>
</body>

</html>