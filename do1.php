<?php
	// Соединяемся, выбираем базу данных
$link = mysql_connect('localhost', 'root', 'rebOOt365');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
echo 'Успешно соединились';
mysql_close($link);
?>