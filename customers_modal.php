<?php include 'conn.php' ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header text-white fw-bolder font-monospace f">Lou Geh Supermarket</div>

    <div class="sidebar bg-light" style="font-size: 3rem;">
        <a class="nav-link  text-dark" href="#">Dashboard</a>
        <a class="nav-link  active text-dark" href="products.php">Products</a>
        <a class="nav-link text-dark" href="suppliers.php">Suppliers</a>
        <a class="nav-link text-dark" href="order.php">Product Sold</a>
        <a class="nav-link text-dark " href="customer.php">Customer</a>
    </div>

    <div class="body">
            <form action="customer_crud.php" method="POST" class="p-3">

                            <div class="mb-3 ">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="mb-3 ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Contact Number</label>
                                <input type="text" name="contact_no" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-primary">Save Student</button>
                            </div>
    </div>
    <div class="footer">Footer</div>
</body>
</html>