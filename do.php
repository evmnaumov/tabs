<?php
    // Соединяемся, выбираем базу данных

$link = mysqli_connect('localhost', 'tabs', 'rebOOt365');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}else{
echo 'Успешно соединились';
}
$tabs_db = mysql_select_db('tabs');
$query = 'INSERT INTO test (image, title, price, description) VALUES ("2.jpg","HAN2","85","Best HAN2")';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
mysql_free_result($result);

/*
if (!$tabs_db)
{
     die('Не удалось выбрать базу данных');
}else{
    echo 'Успешно выбрали';
}
*/
//if (isset($_POST['txt'])){
// $arr=$_POST['txt'];
//    foreach($arr as $value){
//        foreach($value as $key=>$val){
//            echo "$key, $val";
//        }
//    }

/*
    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];
     
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "user"; // Логин БД
    $db_password = "123"; // Пароль БД
    $db_table = "mytable"; // Имя Таблицы БД
     
    // Подключение к базе данных
    $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
     
    // Выборка базы
    mysql_select_db("mydb",$db);
     
    // Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'",$db);
     
    $result = mysql_query ("INSERT INTO ".$db_table." (name,text) VALUES ('$name','$text')");
     
    if ($result = 'true'){
        echo "Информация занесена в базу данных";
    }else{
        echo "Информация не занесена в базу данных";
    }
}
*/



mysql_close($link);
?>