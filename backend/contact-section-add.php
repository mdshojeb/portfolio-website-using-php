<?php 
	require 'db.php';
 session_start();


	if ($_SERVER['REQUEST_METHOD']='POST') {
			$short_desc = $_POST['title1'];
		$address = $_POST['title2'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		$update = "UPDATE contact SET description='$short_desc',address='$address',phone='$phone',email='$email' where id = 1";
		$q = mysqli_query($db,$update);
		if ($q) {
			$_SESSION['success'] = "Your data updated successfully";
			header('location:../contact-section.php');
		}else{
			$_SESSION['err'] = "Sorry Something Wrong";
			header('location:../contact-section.php');
		}
	}
 ?>