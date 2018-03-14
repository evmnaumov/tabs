<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Messenger</title>
</head>
<body>
<div id="content">
<form action='do.php' method='post'>
<?php
//$xml = simplexml_load_file("db.xml");

// Соединяемся, выбираем базу данных
$link = mysqli_connect('localhost', 'tabs', 'rebOOt365');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$tabs_db = mysqli_select_db($link,'tabs');
$result = mysqli_query($link,'SELECT * FROM `test`');

$i=0;
foreach ($result as $item) {
    global $i;
    $a="";
    if($i<1){
        $a="showing";
    };
        ?><input type='text' name='txt[<?php echo $i;?>][image]' value='<?php echo $item["image"];?>'>
          <input type='text' name='txt[<?php echo $i;?>][title]' value='<?php echo $item["title"];?>'>
          <input type='text' name='txt[<?php echo $i;?>][price]' value='<?php echo $item["price"];?>'>
          <input type='text' name='txt[<?php echo $i;?>][description]' value='<?php echo $item["description"];?>'>
		  <br>
    <?php
    $i=$i+1;
};
mysqli_close($link);
?>
		  <input type='submit' value='Отправить'>
</form>
</div>
</body>
</html>