<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Messenger</title>
<link rel="stylesheet" href="test.css">
</head>
<body>
<div id="content">
<ul id="slides">
<?php
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
        ?><li class="slide <?php echo $a;?>" style="background-image: url(img/<?php echo $result["image"];?>);">
            <p class="title"><?php echo $result["title"];?></p>
            <p class="price"><?php echo $result["price"];?></p>
            <p class="description"><?php echo $result["description"];?></p>
        </li>
    <?php
    $i=$i+1;
};?>
</ul>
<script  src="test.js"></script>
</div>
</body>
</html>