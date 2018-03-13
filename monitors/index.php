<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Messenger</title>
<link rel="stylesheet" href="test.css">
<meta http-equiv="refresh" content="300">
</head>
<body>
<div id="content">
<ul id="slides">
<?php
$xml = simplexml_load_file("db.xml");
$i=0;
foreach ($xml->item as $item) {
    global $i;
    $a="";
    if($i<1){
        $a="showing";
    };
        ?><li class="slide <?php echo $a;?>" style="background-image: url(img/<?php echo $item->image;?>);">
            <p class="title"><?php echo $item->title;?></p>
            <p class="price"><?php echo $item->price;?></p>
            <p class="description"><?php echo $item->description;?></p>
        </li>
    <?php
    $i=$i+1;
};?>
</ul>
<script  src="test.js"></script>
</div>
</body>
</html>