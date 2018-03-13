<?php
    // Соединяемся, выбираем базу данных
$host="localhost";
$user="root";
$pass="rebOOt365";

$link = mysql_connect('$host', '$user', '$pass');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
echo 'Успешно соединились';
mysql_close($link);
?>