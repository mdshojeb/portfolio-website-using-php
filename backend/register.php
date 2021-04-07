<?php 
	require 'db.php';
	session_start();

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['pass'];
	$check = $_POST['radiobtn'];

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		// name validation
		if (!empty($name)) {
			$name_len = strlen($name);
			if ($name_len<3) {
				$_SESSION['less_name'] = 'Your name should be more than 3 character!';
				header('location:../frontend/page-register.php');
			} elseif ($name_len >18) {
				$_SESSION['more_name'] = 'Your name should be less than 18 character!';
				header('location:../frontend/page-register.php');
			} 
			else{
				if (preg_match("/^[a-zA-Z. ]*$/", $name)) {
					//email validation started here
					if (!empty($email)) {
						if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
							$search = "SELECT COUNT(*) 	as totalemail FROM users WHERE email='$email'";
								$query_email = mysqli_query($db,$search);
								$assoc_email = mysqli_fetch_assoc($query_email);
								
								if (!$assoc_email['totalemail'] > 0){
									//phone validation started here
							if (!empty($phone)) {
								if (preg_match("/^[0-9+]*$/", $phone)) {
									//password validation starter here

									if (!empty($password)) {
										$pass_len = strlen($password);
										if ($pass_len<8) {
											$_SESSION['invalid_pass'] = 'Your password should be more than 8 character!';
			        					header('location:../frontend/page-register.php');
										} else {
											if (isset($check)) {
												//===================================================//
												//===========Insert data to database=================//
												//===================================================//
												$pass = password_hash($password, PASSWORD_BCRYPT);
												$insert = "INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$pass')";
												$query = mysqli_query($db,$insert);
												if (!$query) {
													echo "not done";
												}
												header('location:../frontend/page-login.php');
												//===================================================//
												//===========Insert data End here=================//
												//===================================================//

											} else {
												$_SESSION['empty_check'] = 'You must accept our terms and policy!';
			        							header('location:../frontend/page-register.php');
											}
											
										}
										
									} else {
										$_SESSION['empty_pass'] = 'Please enter a strong password!';
			        					header('location:../frontend/page-register.php');
									}
									
								} else {
									$_SESSION['invalid_phone'] = 'Please enter a valid phone number!';
			        		header('location:../frontend/page-register.php');
								}
								
							} else {
								$_SESSION['empty_phone'] = 'Phone is required!';
			        		header('location:../frontend/page-register.php');
							}
								}
								else{
									$_SESSION['exist_email'] = 'You have already used this email!';
			        				header('location:../frontend/page-register.php');
								}

						} else {
							$_SESSION['invalid_email'] = 'Please enter a valid email!';
			        		header('location:../frontend/page-register.php');
						}
						
					} else {
						$_SESSION['empty_email'] = 'Please enter your email!';
			        	header('location:../frontend/page-register.php');
					}
					


				} else {
					$_SESSION['invalid_name'] = 'Please enter a valid name!';
			        header('location:../frontend/page-register.php');
				}
				
			}
			
		} else {
			$_SESSION['empty_name'] = 'Please enter your name';
			header('location:../frontend/page-register.php');
		}
		
	}

 ?>