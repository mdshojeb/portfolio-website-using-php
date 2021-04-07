<?php 
	require 'db.php';
	session_start();
	error_reporting(0);

	$heading = $_POST['heading'];
	$desc = $_POST['description'];
	$service_icon = $_POST['icon'];


	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (!empty($heading)) {
			$head_len = strlen($heading);
			if ($head_len > 25 || $head_len <10) {
				$_SESSION['name_err'] = "Your title should be more than 10 and less than 25 character!";
				header('location:../services.php');
			} else {
				//description validation start here
				if (empty($desc)) {
					$_SESSION['desc_err'] = "Please write about your services.";
					header('location:../services.php');
				} else {
					$desc_len = strlen($desc);
					if ($desc_len > 200 || $desc_len <50) {
						$_SESSION['desc_err'] = "Your title should be more than 50 and less than 200 character!";
						header('location:../services.php');
				}
				else{
						if (!empty($service_icon)) {
							$insert = "INSERT INTO services (heading,description,img) VALUES('$heading','$desc','$service_icon')";
							$query = mysqli_query($db,$insert);
							if ($query) {
								$_SESSION['success'] = "Your Services added successfully!";
								header('location:../services.php');
							}
						}else{
							$_SESSION['icon_err'] = "Please enter icon name";
							header('location:../services.php');
						}
					}
					
				}
				
			}
		}
	
		else{
			$_SESSION['name_err'] = "Please enter service heading";
			header('location:../services.php');
		}
}
 ?>