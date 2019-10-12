<?php
	header('Access-Control-Allow-Origin: https://neelbhanushali.github.io');
	echo $_SERVER['HTTP_REFERER'];
	print_r($_POST);
	print_r($_GET);
?>