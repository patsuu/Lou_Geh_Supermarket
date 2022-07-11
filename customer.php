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
          

          <div class="row p-2">
            <div class="col-xs-12">
              <div class="box">
                 <a href="customers_modal.php"  class="btn btn-primary btn-sm btn-flat m-2 fs-5"><i class="fa fa-plus"></i> New</a>
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                     <?php include('message.php'); ?>
                  <table id="example1" class="table table-bordered">
                    <thead>
                        <th class="bg-dark text-white">Customer ID</th>
                      <th>Name</th>
                      <th class="bg-dark text-white">Address</th>
                      <th>Contact No.</th>
                    <tbody>
                    <?php 
                                    $query = "SELECT * FROM customers_tbl";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $customer)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $customer['customer_id']; ?></td>
                                                <td><?= $customer['full_name']; ?></td>
                                                <td><?= $customer['address']; ?></td>
                                                <td><?= $customer['contact_no']; ?></td>
                                                <td>
                                                    <a href="customer_view.php?id=<?= $customer['customer_id']; ?>" class="btn btn-info btn-sm ">View</a>
                                                    <a href="customer_edit.php?id=<?= $customer['customer_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="customer_crud.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_customer" value="<?=$customer['customer_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                     
                    </tbody>
                    </thead>
                     
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="footer">Footer</div>
</body>
</html>