<?php 

			require 'db.php';
			$id = $_GET['id'];
			$select = "SELECT * FROM review where id = '$id'";
			$query = mysqli_query($db,$select);
			$assoc = mysqli_fetch_assoc($query);
			if (isset($id)) {
				$update = "UPDATE review SET status = 2 where id = $id";
				$query_up = mysqli_query($db,$update);
				header('location:../view-review.php');
			}
		?>	