<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Messenger</title>
</head>
<body>
<div id="content">
<form action='do.php' method='post'>
<?php
$xml = simplexml_load_file("db.xml");
$i=0;
foreach ($xml->item as $item) {
    global $i;
    $a="";
    if($i<1){
        $a="showing";
    };
        ?><input type='text' name='txt[<?php echo $i;?>][0]' value='img/<?php echo $item->image;?>'>
          <input type='text' name='txt[<?php echo $i;?>][1]' value='<?php echo $item->title;?>'>
          <input type='text' name='txt[<?php echo $i;?>][2]' value='<?php echo $item->price;?>'>
          <input type='text' name='txt[<?php echo $i;?>][3]' value='<?php echo $item->description;?>'>
		  <br>
    <?php
    $i=$i+1;
};?>
		  <input type='submit' value='Отправить'>
</form>
</div>
</body>
</html>