<?php 
	include 'conn.php';

	session_start();

	if (isset($_POST['submit'])){
		$barcode =  $_POST['barcode'];
		$description =  $_POST['description'];
		$quantity =  $_POST['quantity'];
		$price =  $_POST['price'];
		//
		$set = '123456789';
		$generate = substr(str_shuffle($set), 0, 12);

		$sql = "INSERT INTO products_tbl (p_barcode,p_desc,p_quantity,p_cost) values ('$generate','$description', '$quantity','$price')";
		$_SESSION['message'] = "Product added"; 

		$run = mysqli_query ($conn,$sql) or die (mysqli_error());

		
		


	} header('location: products_modal.php');

	if (isset($_POST['edit'])) {
		$barcode =  $_POST['barcode'];
		$description =  $_POST['description'];
		$quantity =  $_POST['quantity'];
		$price =  $_POST['price'];
	}