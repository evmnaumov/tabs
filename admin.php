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
        ?><input type='text' name='txt[<?php echo $i;?>][image]' value='img/<?php echo $item->image;?>'>
          <input type='text' name='txt[<?php echo $i;?>][title]' value='<?php echo $item->title;?>'>
          <input type='text' name='txt[<?php echo $i;?>][price]' value='<?php echo $item->price;?>'>
          <input type='text' name='txt[<?php echo $i;?>][description]' value='<?php echo $item->description;?>'>
		  <br>
    <?php
    $i=$i+1;
};?>
		  <input type='submit' value='Отправить'>
</form>
</div>
</body>
</html>