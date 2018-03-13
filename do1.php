<?php
    // Соединяемся, выбираем базу данных

$link = mysqli_connect('localhost', 'tabs', 'rebOOt365');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
echo 'Успешно соединились';
mysql_close($link);
?>