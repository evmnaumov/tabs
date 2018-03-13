<?php
    // Соединяемся, выбираем базу данных
/*
$link = mysqli_connect('localhost', 'tabs', 'rebOOt365');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$tabs_db = mysqli_select_db($link,'tabs');
$query = 'INSERT INTO test (image, title, price, description) VALUES ("2.jpg","HAN2","85","Best HAN2")';
//$query = 'SELECT * FROM `test`';



$result = mysqli_query($link, $query);
echo "$query";
mysqli_free_result($result);

*/
$arr=$_POST['txt'];
    foreach($arr as $value){
        //list($image, $title, $price, $desc) = $value;
        //echo "$image, $title, $price, $desc<br>";
        
        echo "$value[0]<br>";
        echo "$value[1]<br>";
        echo "$value[2]<br>";
        echo "$value[3]<br>";
        echo "<br>";
    }



//mysqli_close($link);
?>