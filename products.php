<?php include 'conn.php'; ?>
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
    <!-- header-->
    <div class="header text-white fw-bolder font-monospace f">Lou Geh Supermarket</div>
<!-- sidebar-->
    <div class="sidebar bg-light" style="font-size: 3rem;">
        <a class="nav-link  text-dark" href="#">Dashboard</a>
        <a class="nav-link active text-dark" href="products.php">Products</a>
        <a class="nav-link text-dark" href="suppliers.php">Suppliers</a>
        <a class="nav-link text-dark" href="order.php">Product Sold</a>
        <a class="nav-link text-dark " href="customer.php">Customer</a>
    </div>
    <!-- body-->
    <div class="body">
        <nav class="navbar bg-white">
            <div class="container-fluid">
              <a class="navbar-brand text-dark fw-bold">Products</a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div> 
          </nav>
      
          <div class="row p-2">
            <div class="col-xs-12">
              <div class="box">
                 <a href="products_modal.php"  class="btn btn-primary btn-sm btn-flat m-2 fs-5"><i class="fa fa-plus"></i> New</a>
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                  <table id="example1" class="table table-bordered">
                    <thead>
                   
                      <th>Barcode</th>
                      <th class="bg-dark text-white">Product Description</th>
                      <th>Quantity</th>
                      <th class="bg-dark text-white">Cost</th>
                      <th>Action</th>
                    <tbody>
                      <?php
                    $sql = "SELECT * FROM products_tbl ";

                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['p_barcode']."</td>
                          <td>".$row['p_desc']."</td>
                          <td>".$row['p_quantity']."</td>
                          <td>".$row['p_cost']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' name= 'edit' data-id='".$row['p_no']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' name='delete'data-id='".$row['p_no']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
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
<!-- end body-->

<!-- foooter-->
    <div class="footer">Footer</div>

    
</body>
</html>

