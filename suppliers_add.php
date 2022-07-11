<?php 
	include 'conn.php';



	if (isset($_POST['submit'])){
		$contact_no =  $_POST['contact_no'];
		$company =  $_POST['company'];
		$block =  $_POST['block'];
		$brgy =  $_POST['brgy'];
		$city =  $_POST['city'];
		$zip =  $_POST['zip'];
		$country =  $_POST['country'];
		$province = $_POST['province'];
		

		$sql = "INSERT INTO suppliers_tbl (contact_no,company,block_lot,brgy,city,zip_code,province,country) values ('$contact_no','$company','$block', '$brgy','$city','$zip', '$province','$country')";

		$run = mysqli_query ($conn,$sql)	or die (mysqli_error());

		
		


	} header('location: suppliers_modal.php');