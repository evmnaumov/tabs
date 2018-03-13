<?php
$link = mysqli_connect('localhost', 'tabs', 'rebOOt365');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$tabs_db = mysqli_select_db($link,'tabs');

// get the result object.
$result = mysqli_query('SELECT * FROM `test`');
// fetch the result row.
$data = $result->fetch_assoc();

return $data;
?>
