<?php
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Coffee Hour</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>
<body>
    <input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h1>
            <span class="kaichoi"><img src="images/logo.png" width="50%"></span>
        </h1>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="admin.html" ><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
            </li>

            <li>
                <a href="customer.html"><span class="las la-users"></span>
                    <span>Customers</span></a>
            </li>

            <li>
                <a href="order.html"><span class="las la-clipboard-list"></span>
                    <span>Orders</span></a>
            </li>
            <li>
                <a href="inventory.php" class="active"><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
            </li>
            <li>
                <a href=""><span class="las la-user-circle"></span>
                    <span>Accounts</span></a>
            </li>
        </ul>
    </div>

</div>

<div class="main-content">
<header>

    <h1>
        <div class="header-title">
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>

            Inventory
        </h1>

    <div class="user-wrapper">
        <img src="images/dre.jpg" width="30px" height="30px">
        <div>
            <h4>Adrian Agcaoili</h4>
            <small>Administrator</small>
        </div>
    </div>

</header>

<main>
    <div class="inventory">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Stocks</h3>
                <span>
		   	     <a href="#"><h4 data-toggle="modal" data-target="#myModal">Add New Product</h4></a>
		        </span>
                </div>

                <div class="card-body">
                    <table width="100%">

                        <thead>
                            <tr align="left">
                                <td style="color: #dba307; font-size: medium; font-size: large;">Item ID</td>
                                <td style="color: #dba307; font-size: medium; font-size: large;">Items</td>
                                <td style="color: #dba307; font-size: medium; font-size: large;">Product Name</td>
                                <td style="color: #dba307; font-size: medium; font-size: large;">Available Stocks</td>
                                <td align="left" style="color: #dba307; font-size: medium; font-size: large;">Price</td>
                                <td></td>            
                            </tr>
                            <?php

        	$get_data = "SELECT * FROM user";
        	$run_data = mysqli_query($con,$get_data);

        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
                $image = $row['image'];
        		$name = $row['name'];
        		$stock = $row['stock'];
        		$price = $row['price'];

        		echo "

        		<tr>
				<td class='text-center'>$id</td>
                <td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
				<td class='text-center'>$name</td>
				<td class='text-center'>$stock</td>
				<td class='text-center'>$price</td>
				
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-edit' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
						<a href='#'>
						     <i class='fa fa-trash-alt' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>

        		";
        	}

        	?>


	<!---Add in modal---->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Product Details</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">


        	<div class="form-group">
        		<label>ID</label>
        		<input type="text" name="id" class="form-control" placeholder="Product ID">
        	</div>

        	<div class="form-group">
        		<label>Name</label>
        		<input type="text" name="name" class="form-control" placeholder="Product Name">
        	</div>

        	<div class="form-group">
        		<label>Price</label>
        		<input type="text" name="price" class="form-control" placeholder="Price">
        	</div>

        	<div class="form-group">
        		<label>Quantity</label>
        		<input type="number" name="stock" class="form-control" placeholder="Quantity">
        	</div>

        	<div class="form-group">
        		<label>Image</label>
        		<input type="file" name="image" class="form-control" >
        	</div>

        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        		
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

            <!----Edit Products--->
<?php

$get_data = "SELECT * FROM user";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
    $image = $row['image'];
	$name = $row['name'];
	$stock = $row['stock'];
	$price = $row['price'];
	echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit Product Details</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

             
        	<div class='form-group'>
        		<label>Name</label>
        		<input type='text' name='name' class='form-control' value='$name'>
        	</div>

        	<div class='form-group'>
        		<label>Quantity</label>
        		<input type='number' name='stock' class='form-control' value='$stock'>
        	</div>

        	<div class='form-group'>
        		<label>Price</label>
        		<input type='number' name='price' class='form-control' value='$price'>
        	</div>

        	<div class='form-group'>
        		<label>Image</label>
        		<input type='file' name='image' class='form-control' required>
        		<img src = 'images/$image' style='width:50px; height:50px'>
        	</div>

        	
        	 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>

        </form>
      </div>

    </div>

  </div>
</div>


	";
}

?>

<!------DELETE modal---->
<?php

$get_data = "SELECT * FROM user";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Do you want to proceed?</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>

	";
}


?>
</body>
</html>

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";


    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }

    }
</script>
