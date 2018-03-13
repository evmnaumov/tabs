<?php
$link = mysqli_connect('localhost', 'tabs', 'rebOOt365');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$tabs_db = mysqli_select_db($link,'tabs');
// get the result object.
//$data=array();
$result = mysqli_query($link,'SELECT * FROM `test`');
//while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
// fetch the result row.
//;
//$data[] = $row;
foreach($result as $key=>$value){
    foreach($value as $key=>$val){
    echo "$val<br>";}
}       //["image"] .", " . $data["title"] .", " . $data["price"] . ", " . $data["description"] . "<br>";
mysqli_free_result($result);
//}
mysqli_close($link);
?>