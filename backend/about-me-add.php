<?php require 'db.php';
	session_start();
?>

<?php
	//$id = ;
	$title = $_POST['title'];
	$description = $_POST['desc'];
	$img = $_FILES['image'];
	
		if ($_SERVER['REQUEST_METHOD']='POST') {
			
		// checking title1
		if (!empty($title)) {
			$title_len = strlen($title);
			if ($title_len >50) {
				$_SESSION['title_err'] = 'Title must be less than 50 character!';
				header('location:../about-me.php');
			} else {
				//checking description value here
				if (!empty($description)) {
					$desc_len = strlen($description);
					if ($desc_len >1000) {
						$_SESSION['desc_err'] = 'Title must be less than 1000 character!';
						header('location:../about-me.php');
					}
					/*=========image validation started here==================*/
					/*===========================================================*/
					if ($_FILES['image']['name']==''){
						$_SESSION['empty_image'] = 'Please upload a image';
						header('location:../about-me.php');
					}
					else{
						$img = explode('.', $_FILES['image']['name']);
						$ext = end($img);
						$allow_formate = ['jpg','jpeg','png','svg'];
						if (in_array($ext, $allow_formate)) {
							if ($_FILES['image']['size'] < 1000000) {
								/*========================INSERT TO DATABASE===========================*/
								/*=====================================================================*/
								$select = "SELECT * FROM about_me";
							    $query = mysqli_query($db,$select);
							    $assoc = mysqli_fetch_assoc($query);
							    $id = $assoc['id'];

								$img = $_FILES['image']['name'];
								$update = "UPDATE about_me SET title = '$title',description='$description',image = '$img' where id = '$id'";
								$q = mysqli_query($db,$update);

								$location = "../img/banner/".$img;
								move_uploaded_file($_FILES['image']['tmp_name'], $location);
								if ($q) {
									$_SESSION['update'] = "Your Data Successfully Updated!";
									header('location:../about-me.php');

								}

								

								/*========================INSERTION COMPLETE===========================*/
								/*=====================================================================*/

							} else {
								$_SESSION['img_err'] = 'Your Image is too large!';
							header('location:../about-me.php');
							}
							
						}
						else{
							$_SESSION['img_err'] = 'This kind of image format is not allowed';
							header('location:../about-me.php');
						}
						
					}

				} else {
					$_SESSION['desc_err'] = 'Please tell about yourself';
					header('location:../about-me.php');
				}
				
			}
			
		}
		else{
			$_SESSION['empty_title'] = 'Please enter a title';
			header('location:../about-me.php');
		}
	}



 ?>