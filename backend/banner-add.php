<?php require 'db.php';
	session_start();
?>

<?php
	//$id = ;
	$title1 = $_POST['title1'];
	$title2 = $_POST['title2'];
	$description = $_POST['description'];
	$img = $_FILES['image'];
	
		if ($_SERVER['REQUEST_METHOD']='POST') {
		// checking title1
		if (!empty($title1)) {
			$title_len = strlen($title1);
			if ($title_len >15) {
				$_SESSION['title1_err'] = 'Title must be less than 50 character!';
				header('location:../banner.php');
			} else {
				//checking title2 value here
				if (!empty($title2)) {
					$title2_len = strlen($title2);
					if ($title2_len >30) {
						$_SESSION['title2_err'] = 'Title must be less than 50 character!';
						header('location:../banner.php');
					}
				//Checking description
					if ($description) {
						$desc_len = strlen($description);

						if ($desc_len >150) {
							$_SESSION['desc_err'] = 'Descripiton should be less than 150 character!';
						header('location:../banner.php');
						}
					}
					/*=========image validation started here==================*/
					/*===========================================================*/
					if ($_FILES['image']['name']==''){
						$_SESSION['empty_image'] = 'Please upload a image';
						header('location:../banner.php');
					}
					else{
						$img = explode('.', $_FILES['image']['name']);
						$ext = end($img);
						$allow_formate = ['jpg','jpeg','png','svg'];
						if (in_array($ext, $allow_formate)) {
							if ($_FILES['image']['size'] < 1000000) {
								/*========================INSERT TO DATABASE===========================*/
								/*=====================================================================*/
								$select = "SELECT * FROM banner";
							    $query = mysqli_query($db,$select);
							    $assoc = mysqli_fetch_assoc($query);
							    $id = $assoc['id'];

								$img = $_FILES['image']['name'];
								$update = "UPDATE banner SET title1 = '$title1', title2 = '$title2',description='$description',image = '$img' where id = '$id'";
								$q = mysqli_query($db,$update);

								$location = "../img/banner/".$img;
								move_uploaded_file($_FILES['image']['tmp_name'], $location);

								if ($q) {
									$_SESSION['success'] = "Your Data added Successfully!";
									header('location:../banner.php');
								}

								

								/*========================INSERTION COMPLETE===========================*/
								/*=====================================================================*/

							} else {
								$_SESSION['img_err'] = 'Your Image is too large!';
							header('location:../banner.php');
							}
							
						}
						else{
							$_SESSION['img_err'] = 'This kind of image format is not allowed';
							header('location:../banner.php');
						}
						
					}

				} else {
					$_SESSION['empty_title2'] = 'Please enter title 2';
					header('location:../banner.php');
				}
				
			}
			
		}
		else{
			$_SESSION['empty_title1'] = 'Please enter title 1';
			header('location:../banner.php');
		}
	}



 ?>