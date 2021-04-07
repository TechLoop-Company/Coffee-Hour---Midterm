<?php
include('db.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$stock = $_POST['stock'];
	$price  = $_POST['price'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE user SET name='$name', price = '$price', stock = '$stock', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:inventory.php');
	}else{
		echo "Data not update";
	}
}

?>