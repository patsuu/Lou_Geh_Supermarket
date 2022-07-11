<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
        <script type="" src="jquery.js"></script>
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

    <div class="navbar">
        <a class="navbar-brand text-dark fw-bold p-2">Order</a>
    </div>

    <div class="body p-2 ">
      <form class="row g-3 p-3" method="POST" action="suppliers_add.php">
        
  <div class="col-md-5">
    <label for="state" class="form-label">Product Name</label>
     <input type="text" class="form-control" name="province"id="province">
  </div>
   <div class="col-md-3">
    <label for="state" class="form-label">Price</label>
     <input type="text" class="form-control" name="city"id="city">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Quantity</label>
    <input type="text" class="form-control" name="zip"id="zip">
  </div>
 <div class="col-md-2 mt-5">
        <button type="submit" class="btn btn-success btn-m"  >Add More</button>
  </div>
 <div class="col-md-2 mt-5">
        <input type="submit" name="" value="add" class="btn btn-primary w-35 " id="add_btn">
  </div>
    </form>

    <script type="">
                $(document).ready(function(){
                    $(".add_item_btn").click(function(e){
                        e.preventDefault();
                        $("#body").prepent('')
                    })
                })
    
    </script>s
</div>
    <div class="footer">Footer</div>
</body>
</html>