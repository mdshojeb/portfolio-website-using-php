<?php 
	require 'db.php';
	session_start();
	error_reporting(0);
	$id = $_POST['id'];
	$heading = $_POST['heading'];
	$desc = $_POST['description'];
	$service_icon = $_POST['icon'];


	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (!empty($heading)) {
			$head_len = strlen($heading);
			if ($head_len > 25 || $head_len <10) {
				$_SESSION['name_err'] = "Your title should be more than 10 and less than 25 character!";
				header('location:../edit-services.php');
			} else {
				//description validation start here
				if (empty($desc)) {
					$_SESSION['desc_err'] = "Please write about your services.";
					header('location:../edit-services.php');
				} else {
					$desc_len = strlen($desc);
					if ($desc_len > 200 || $desc_len <50) {
						$_SESSION['desc_err'] = "Your title should be more than 50 and less than 200 character!";
						header('location:../edit-services.php');
				}
				else{
					if (!empty($service_icon)) {
						$update = "UPDATE services SET heading='$heading',description='$desc',img='$service_icon' where id='$id'";
							$query = mysqli_query($db,$update);
							if ($query) {
								$_SESSION['success'] = "Your Services Updated successfully!";
								header('location:../edit-services.php');
							}
						}else{
							$_SESSION['icon_err'] = "Please enter icon name";
							header('location:../edit-services.php');
						}
					}
					
				}
				
			}
		}
	
		else{
			$_SESSION['name_err'] = "Please enter service heading";
			header('location:../edit-services.php');
		}
}
 ?>