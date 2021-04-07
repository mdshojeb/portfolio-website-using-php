<?php 
session_start();
	require 'db.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];

	// echo $name.$email.$sub.$msg;
	// die();

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (!empty($name)) {
			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
				if (!empty($msg)) {
					$insert = "INSERT INTO msg(name,email,msg) VALUES ('$name','$email','$msg')";
					$que = mysqli_query($db,$insert);
					$_SESSION['msg'] = 'Thank you for massaging us. we will reply.';
					header('location:../index.php');
				}
			}else{
				header('location:../index.php');
			}
		}
	}
 ?>