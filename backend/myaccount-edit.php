<?php
	session_start(); 
	require 'db.php';
	$id = $_SESSION['id'];
	$status = $_POST['status'];
	$img = $_FILES['image'];

	if ($_SERVER['REQUEST_METHOD']='POST') {
		if (!empty($status)) {
			if ($_FILES['image']['name']==''){
						$_SESSION['empty_image'] = 'Please upload a image';
						header('location:../myaccount.php');
					}
					else{
						$img = explode('.', $_FILES['image']['name']);
						$ext = end($img);
						$allow_formate = ['jpg','jpeg','png','svg'];
						if (in_array($ext, $allow_formate)) {
							if ($_FILES['image']['size'] < 1000000) {
								/*========================INSERT TO DATABASE===========================*/
								/*=====================================================================*/

								$img = $_FILES['image']['name'];
								$update = "UPDATE users SET status='$status',img = '$img' where id = '$id'";
								$q = mysqli_query($db,$update);

								$location = "../img/user/".$img;
								move_uploaded_file($_FILES['image']['tmp_name'], $location);

								if ($q) {
									$_SESSION['success'] = "Your Data added Successfully!";
									header('location:../myaccount.php');
								}else{
									echo 'error';
								}
				}
		}
	}

}
}
?>