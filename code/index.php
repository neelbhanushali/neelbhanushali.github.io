<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>code</title>
<h1>list</h1>
<hr>
<?php
	$dir = scandir('.');
	if(count($dir) == 3) {
		echo '<p>Nothing here</p>';
	}
	else {
		for($i = 2; $i < count($dir); $i++) {
			if($dir[$i] != 'index.php')
				echo '<p><a href="'.$dir[$i].'">'.$dir[$i].'</a></p>';
		}
	}
?>
<hr>