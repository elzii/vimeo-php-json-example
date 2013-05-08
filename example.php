<?php

require_once 'vimeo.php';

$app = new Vimeo();
$items = $app->getJSON('65205680');

$jsonObj = $items;
$jsonArr = json_encode($items, true);


//echo $jsonArr;

$data = array(
		'id' 				=> 	$jsonObj[0]->id,
		'url' 				=> 	$jsonObj[0]->url,
		'thumbnail_large' 	=> 	$jsonObj[0]->thumbnail_large,
		'user_name' 		=> 	$jsonObj[0]->user_name,
		'width' 			=> 	$jsonObj[0]->width,
		'height' 			=> 	$jsonObj[0]->height,
		'duration' 			=> 	$jsonObj[0]->duration,
		'url' 				=> 	$jsonObj[0]->url,
	);
?>

<html>
<head>
	<title>Vimeo API Example</title>
</head>
<body>
	
	<div class="video vimeo">
		
		<iframe frameborder="0" width="<?php echo $data['width']; ?>" height="<?php echo $data['height']; ?>" src="http://player.vimeo.com/video/<?php echo $data['id'] ?>?badge=0&amp;autoplay=1"></iframe>

	</div>

</body>
</html>