
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
        <form class="row g-3 p-3" method="POST" action="suppliers_add.php">
              
            <div class="col-12">
                <label for="inputAddress" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company" name="company"placeholder="">
              </div>
              <div class="col-12">
    <label for="inputAddress" class="form-label">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="">
  </div>
             
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Address</label>
    <input type="text" class="form-control" name="block"id="block">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Barangay</label>
    <input type="text" class="form-control" name="brgy"id="brgy">
  </div>
  <div class="col-md-5">
    <label for="state" class="form-label">Province/Municipality</label>
     <input type="text" class="form-control" name="province"id="province">
  </div>
   <div class="col-md-5">
    <label for="state" class="form-label">City</label>
     <input type="text" class="form-control" name="city"id="city">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip"id="zip">
  </div>
 
  <div class="col-12">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control"name="country" id="country" placeholder="">
  </div>
   <div class="col-md-2">
      <button type="submit" name="submit" class="btn btn-primary btn-m">Add</button>
      <a href="suppliers.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat m-2 fs-5"><i class="fa fa-plus"></i> Close</a>
  </div>
    </form>
  </div>

   

     
    </div>

    <div class="footer">Footer</div>
</body>
</html>