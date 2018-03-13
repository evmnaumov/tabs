<?php
$link = mysql_connect('localhost', 'tabs', 'rebOOt365');
//if (mysql_connect_errno()) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
//    exit();
//}
$tabs_db = mysql_select_db('tabs');
// get the result object.
$data=array();
$result = mysql_query('SELECT * FROM `test`');
while($row = mysql_fetch_array($result)){
// fetch the result row.
//;
$data[] = $row;
foreach($data as $value){
    echo "$value <br>";
}       //["image"] .", " . $data["title"] .", " . $data["price"] . ", " . $data["description"] . "<br>";
mysql_free_result($result);
}
mysql_close($link);
?>
