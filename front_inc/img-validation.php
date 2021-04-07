if ($service_img == $_FILES['image']) {
							$img = explode('.', $service_img['name']);
							$ext = end($img);
							$allow = ['jpg','png','jpeg','svg','gif','JPG','PNG','JPEG'];

							if (in_array($ext, $allow)) {
								if ($service_img['size'] >1000000) {
									$_SESSION['img_err'] = "Your Image is too large. Image size should be less than 1 mb.";
								header('location:../services.php');
								} else {
									//========Insert to Database==================//
									$img = $service_img['name'];
									$insert = "INSERT INTO services (heading,description,img) VALUES('$heading','$desc','$img')";
									$query = mysqli_query($db,$insert);
									if ($query) {
										$_SESSION['success'] = "Your Services added successfully!";
										header('location:../services.php');
									}
									$new_location = "../img/services/".$img;
									move_uploaded_file($_FILES['image']['tmp_name'], $new_location);

								}
								