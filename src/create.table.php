<?php
//Подключится к базе данных
require_once "connect.pg.inc.php";
//Если такая таблица есть, удалить ее
$sql = "DROP TABLE IF EXISTS cars CASCADE";
$pdo->query($sql);

//Создание таблицы
$sql = "
CREATE TABLE cars (
    id SERIAL PRIMARY KEY,
    model TEXT NOT NULL,
    color TEXT NOT NULL,
    horsepower float NOT NULL,
    speed float NOT NULL
)";

$pdo->query($sql);
//Занесение данных
$sql = "
INSERT INTO cars VALUES (1, 'Porsche 911', 'Рубиновый', 480, 330), (2, 'NISSAN GT-R', 'Белый', 419, 315),
(3, 'Audi R8', 'Графитовый', 540, 320), (4, 'ВАЗ 2107', 'Изумрудный', 74, 150), (5, 'Lancer Evo X', 'Охра золотистая', 295, 242)
";
$pdo->query($sql);
//Закрыть подключение к базе данных
$pdo = null;
?>