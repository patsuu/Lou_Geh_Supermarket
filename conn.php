<?php
 $dbserver = "localhost";
 $user     = "root";
 $pass     = "";
 $dbname   = "project";

 $conn = mysqli_connect($dbserver,$user,$pass,$dbname);

 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>
