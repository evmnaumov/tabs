<?php
    // Соединяемся, выбираем базу данных
$host="localhost";
$user="tabs";
$pass="rebOOt365";

$link = mysql_connect('$host', '$user', '$pass');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
echo 'Успешно соединились';
mysql_close($link);
?>