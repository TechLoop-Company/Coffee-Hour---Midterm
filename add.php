<?php

include('db.php');

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$stock = $_POST['stock'];
	$price = $_POST['price'];

	//image

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "INSERT INTO user (id,name,price,stock,image) VALUES ('$id','$name','$price','$stock','$image')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:inventory.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>