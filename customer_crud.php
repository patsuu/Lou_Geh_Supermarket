<?php  ?>
<?php
session_start();
include 'conn.php';

if(isset($_POST['delete_customer']))
{
    $customer_id = mysqli_real_escape_string($conn, $_POST['delete_customer']);

    $query = "DELETE FROM customers_tbl WHERE customer_id='$customer_id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: customer.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);

    $fullname = mysqli_real_escape_string($conn, $_POST['full_name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact_no']);

    $query = "UPDATE customers_tbl SET fullname='$fullname', address='$address', contact_no='$contact' WHERE customer_id='$customer_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Update Failed!";
        header("Location: customer.php");
        exit(0);
    }

}


if(isset($_POST['save_customer']))
{
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact_no']);
   

    $query = "INSERT INTO customers_tbl (full_name,address,contact_no) VALUES ('$fullname','$address','$contact')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: customers_modal.php");
        exit(0);
    }
}

?>