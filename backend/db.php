<?php 
	define('host','localhost');
	define('user','root');
	define('pass','');
	define('db','creative_project');

	$db =  mysqli_connect(host,user,pass,db);

	if (!$db) {
		echo "Database not connected";
	}
	// $text = "";

	// echo strlen($text);
	


 ?>