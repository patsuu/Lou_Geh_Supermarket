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
    <div class="header text-white fw-bolder font-monospace f">Lou Geh Supermarket</div>

    <div class="sidebar bg-light" style="font-size: 3rem;">
        <a class="nav-link  text-dark" href="#">Dashboard</a>
        <a class="nav-link  active text-dark" href="products.php">Products</a>
        <a class="nav-link text-dark" href="suppliers.php">Suppliers</a>
        <a class="nav-link text-dark" href="order.php">Product Sold</a>
        <a class="nav-link text-dark " href="customer.php">Customer</a>
    </div>

  <div class="body">
    <nav class="navbar bg-white">
        <div class="container-fluid">
          <a class="navbar-brand text-dark fw-bold">Suppliers</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div> 
      </nav>
    <div class="row p-2">
      <div class="col-xs-12">
        <a href="suppliers_modal.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat m-2 fs-5"><i class="fa fa-plus"></i> New</a>
        <div class="box">
          <div class="box-header with-border">
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <th class="bg-dark text-white"> Company</th>
                  <th>Contact No</th>
                <th class="bg-dark text-white">Address</th>
                <th>Barangay</th>
                <th class="bg-dark text-white">City</th>
                <th >Zip Code</th>
                <th class="bg-dark text-white">Province</th>
                <th >Country</th>
                <th class="bg-dark text-white">Action</th>
              <tbody>
             <?php
                    $sql = "SELECT * FROM suppliers_tbl ";

                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                        <td>".$row['company']."</td>
                          <td>".$row['contact_no']."</td>
                           <td>".$row['block_lot']."</td>
                          <td>".$row['brgy']."</td>
                          <td>".$row['city']."</td>
                           <td>".$row['zip_code']."</td>
                            <td>".$row['province']."</td>
                             <td>".$row['country']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['code']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['code']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
              </tbody>
              </thead>
               
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
  </div>

    <div class="footer">Footer</div>
</body>
</html>