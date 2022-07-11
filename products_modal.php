<?php include 'scripts.php' ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/sweetalert.min.js"></script>

</head>
<body>

    <div class="header text-white fw-bolder font-monospace f">Lou Geh Supermarket</div>

    <div class="sidebar bg-light" style="font-size: 3rem;">
        <a class="nav-link  text-dark" href="#">Dashboard</a>
        <a class="nav-link  active text-dark" href="products.php">Products</a>
        <a class="nav-link text-dark" href="suppliers.php">Suppliers</a>
        <a class="nav-link text-dark" href="#">Product Sold</a>
        <a class="nav-link text-dark " href="customer.php">Customer</a>
    </div>

    <div class="body">
      
    
     <form class="m-3" method="POST" action="products_add.php">
                    <div class="row row-mb-3">
                        <div class="col-sm-2  ">
                           <label class="form-label  col-form-label-lg"> Barcode</label>
                          </div>
                          <div class="col  ">
                            <input type="text" class="form-control" placeholder="AUTO GENERATED" aria-label=""   name="barcode" id="barcode" readonly>
                          </div>
                         
                    </div>
                     <div class="row row-mb-3">
                        <div class="col col-sm-2 ">
                           <label class="form-label  col-form-label-lg">  Description</label>
                          </div>
                          <div class="col ">
                            <input type="text" class="form-control" placeholder="" aria-label=""   name="description" id="description"onkeyup="lettersOnly(this)" autocomplete="off" maxlength="30" required>
                          </div>
                    </div>
                    <div class="row row-mb-3">
                        <div class="col col-sm-2 ">
                           <label class="form-label  col-form-label-lg"> Quantity</label>
                          </div>
                                <div class="col ">
                            <input type="text" class="form-control" placeholder="" aria-label=""   name="quantity" id="quantity" onkeyup="numbersOnly(this)" autocomplete="off" maxlength="30">
                          </div>
                          <div class="col col-sm-1">
                           <label class="form-label  col-form-label-lg"> Price</label>
                          </div>
                          <div class="col ">
                            <input type="text" class="form-control" placeholder="" aria-label="" name="price" id="
                            price " onkeyup="charnumbersOnly(this)" autocomplete="off" maxlength="20">

                          </div>
                    </div>

               
                    <div class="row p-1">

      <button type="submit"    name="submit" class="btn btn-primary btn-m mb-1">Add</button>
      <a href="suppliers.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat fs-5"><i class="fa fa-plus"></i> Close</a>
  </div>
            </form>
    </div>

    <div class="footer">Footer</div>
</body>
</html>

