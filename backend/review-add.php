<?php
	session_start(); 
	require 'db.php';
	$name = $_SESSION['name'];
	$status = $_SESSION['status'];	
	$img = $_SESSION['img'];	
	$text = $_POST['review'];
	$rating = $_POST['rating'];

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (!empty($text)) {
			$text_len = strlen($text);
			if ($text_len > 200) {
				$_SESSION['err'] = "Maximum text length is 200!";
			header('location:../review.php');			
				}
				else{
					if (!empty($rating)) {
						// inserting data to database//
						$insert = "INSERT INTO review (name,review,rating,user_status,img) VALUES ('$name','$text','$rating','$status','$img')";
						$query = mysqli_query($db,$insert);

						if ($query) {
							$_SESSION['insert'] = "Thank You So Much For Staying With Us!";
						header('location:../review.php');
						}else{
							echo "error";
						}
					}
					else{
						$_SESSION['rate'] = "Please give ratings this website!";
						header('location:../review.php');
					}
				}			
		}else{
			$_SESSION['err'] = "Please say something about this website!";
			header('location:../review.php');
		}
	}
 ?>