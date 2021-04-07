<?php
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products- Coffee Hour</title>
    <link rel="stylesheet" href="admin.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
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
                <a href="inventory.html" ><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
            </li>
            <li>
                <a href="addProduct.html" class="active"><span class="las la-shopping-bag"></span>
                    <span>Products</span></a>
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
            Products
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
                <div class="card-header " >
                    <h3></h3>
                    

                    </span></button>

                </div>

                <div class="card-body">   
                    <form action="add.php" method="POST" enctype="multipart/form-data">
                    <h2>Add New Product</h2>
                    <div class="product">
                        <h4>Add Product Name: <input type="text" required placeholder="Product Name"></input></h4>
                    </div>
                    <div class="product-category">
                        <h4>Category: <label for="Category">
                            <select name="select-cat" id="category" required>
                                <option>Select Category</option>
                                <option value="1">Basic</option>
                                <option value="2">Coffee Blended Frappe</option>
                                <option value="3">Non-Coffee Blended Frappe</option>
                                <option value="4">Extras</option>
                                <option value="5">All-Day Breakfast</option>
                                <option value="6">Breads & Pastries</option>
                                <option value="7">Iced and Hot Beverages</option>
                                <option value="8">Handcrafted Beverages</option>
                                <option value="9">Classic Milkshakes</option>
                            </select>
                        </label></h4>
                    </div>
                    <div class="product-price">
                        <h4>Price: <input type="number" required></input></h4>
                    </div>
                    <div class="add-quantity">
                        <h4>Quantity: <input type="number" required></input></h4>
                    </div>
                    <div class="upload-image">
                        <img id="blah" alt="your image"/>
                        <br>
                            <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="product-add">
                        <button class="add" id="add-product">Add Product</button>
                    </div>
            </div>
        </div>
</main>
</body>
</html>

