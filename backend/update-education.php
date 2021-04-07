<?php require 'db.php'; session_start();?>

<?php 
	$id = $_POST['id'];
	$name = $_POST['cir_name'];
	$year  = $_POST['year']; 
	$result  = $_POST['result'];

	if ($_SERVER['REQUEST_METHOD']="POST") {
		if (!empty($name)) {
			$title_len = strlen($name);
			if ($title_len >100) {
				$_SESSION['name_err'] = "Your cirtification name should be less than 100 character!";
				header('location:../edit-education.php');
			}
			else{
				if (!empty($year)) {
					if (!empty($result)) {
						if ($result < 101) {
							/*============INSERT DATA TO DATABASE==============*/
							/*===================================================*/
							$res = $result.'%';
							$update = "UPDATE education SET name='$name',year='$year',result='$result' where id='$id'";
							$query = mysqli_query($db,$update);
							if ($query) {
								$_SESSION['success'] = "Your data updated successfully!";
								header('location:../edit-education.php');
							}

						}
						else{
							$_SESSION['result_empty'] = "Your result should be  less than or equal 100 percent!";
							header('location:../edit-education.php');
						}
					} else {
						$_SESSION['result_empty'] = "Please Enter Your result!";
						header('location:../edit-education.php');
					}
					
				}
				else{
					$_SESSION['year_empty'] = "Please Enter Your Cirtification Name!";
					header('location:../edit-education.php');
				}
			}
		} else {
			$_SESSION['name_err'] = "Please Enter Your Cirtification Name!";
			header('location:../edit-education.php');
		}
		
	}
 ?>