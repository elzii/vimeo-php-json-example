<?php

require_once 'vimeo.php';

$app = new Vimeo();
$items = $app->getJSON('65205680');

$jsonObj = $items;
$jsonArr = json_encode($items, true);


//echo $jsonArr;
//echo "<br><br><br>";
echo $jsonObj[0]->id;