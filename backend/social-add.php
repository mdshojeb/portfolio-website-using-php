<?php 
	require 'db.php';
	session_start();
 ?>
 <?php 
 	$label = $_POST['label'];
 	$link = $_POST['link'];

 	if ($_SESSION['REQUEST_METHOD']='POST') {
 		if (!empty($label)) {
 			switch ($label) {
 				case 'facebook':
 					$social_icon = 'fab fa-facebook-f'; 
 					break;
 				case 'twitter':
 					$social_icon = 'fab fa-twitter'; 
 					break;
 				case 'instagram':
 					$social_icon = 'fab fa-instagram'; 
 					break;
 				case 'pinterest':
 					$social_icon = 'fab fa-pinterest'; 
 					break;
 				case 'linkedin':
 					$social_icon = 'fab fa-linkedin-in'; 
 					break;
 				
 				default:
 					$_SESSION['label_empty'] = 'Please enter social media name in smallercase!';
 					header('location:../social.php');
 					break;
 			}
 			$label_name = $social_icon;
 			$insert = "INSERT INTO social_media(label,link) VALUES('$label_name','$link')";
 			$query = mysqli_query($db,$insert);

 			if ($query) {
 				$_SESSION['insert'] = "Your Link added to website successfully!";
 				header('location:../social.php');
 			}
 			else{
 				$_SESSION['label_empty'] = "Something wrong!";
 				header('location:../social.php');
 			}
 		} else {
 			$_SESSION['label_empty'] = 'Please enter social media name!';
 			header('location:../social.php');
 		}
 		
 	}
  ?>