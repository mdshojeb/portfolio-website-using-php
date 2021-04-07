<?php 
	//require 'db.php';
	session_start();

		if (!isset($_SESSION['logged_email']) && !isset($_SESSION['logged_email']) ) {
			
			header('location:frontend/page-login.php');
		}
	
	
 ?>