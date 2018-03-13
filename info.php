<?php
$link = mysqli_connect('localhost', 'tabs', 'rebOOt365');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$tabs_db = mysqli_select_db($link,'tabs');

// get the result object.
while($result = mysqli_query($link,'SELECT * FROM `test`')){
// fetch the result row.
$data = mysqli_fetch_array($result, MYSQLI_NUM);

echo "$data[1], $data[2], $data[3], $data[4]<br>";
mysqli_free_result($result);
}
mysqli_close($link);
?>
