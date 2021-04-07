<?php require 'db.php'; session_start(); ?>

<?php 
	$stitle = $_POST['short-title'];
	$title  = $_POST['title']; 

	if ($_SERVER['REQUEST_METHOD']="POST") {
		if (!empty($stitle)) {
			$stitle_len = strlen($stitle);
			if ($stitle_len >30) {
				$_SESSION['stitle_err'] = "Your title should be less than 30 character!";
				header('location:../services-title.php');
			}
			else{
				if (!empty($title)) {
					$title_len = strlen($title);
					if ($title_len >50) {
						$_SESSION['title_err'] = "Your Heading should be less than 50 character!";
						header('location:../services-title.php');
					
				}else{
					/*============INSERT DATA TO DATABASE==============*/
					/*===================================================*/
					$insert = "UPDATE service_section SET short_title = '$stitle',head_title='$title' where id=1";
					$query = mysqli_query($db,$insert);
					if ($query) {
						$_SESSION['success'] = "Your data updated successfully!";
						header('location:../services-title.php');
					}
				}
				
			}else{
				$_SESSION['title_err'] = "Please Enter Your short title!";
				header('location:../services-title.php');
			}
		} 
		
	}
	else {
			$_SESSION['stitle_err'] = "Please Enter Your short title!";
			header('location:../services-title.php');
		}
}
 ?>

 