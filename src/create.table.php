<?php
//Подключится к базе данных
require_once "connect.pg.inc.php";
//Если такая таблица есть, удалить ее
$sql = "DROP TABLE IF EXISTS catalog CASCADE";
$pdo->query($sql);

//Создание таблицы
$sql = "
CREATE TABLE catalog (
    id SERIAL PRIMARY KEY,
    author TEXT NOT NULL,
    title TEXT NOT NULL,
    pubyear INT NOT NULL,
    price float
)";

$pdo->query($sql);
//Занесение данных
$sql = "
INSERT INTO catalog VALUES (1,'Jon', 'PHP',2020,500)";
$pdo->query($sql);
//Закрыть подключение к базе данных
$pdo = null;
?>