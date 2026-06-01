<?php
session_start();
include('connection.php');
$pid=$_POST['pid'];
$description=$_POST['review'];
$uid=$_SESSION['id'];
$date=date("Y-m-d");
$star=5;
// login check
if(!isset($_SESSION['id']) )
{
 header("location:login.php");
}
$q = mysqli_query($connection,"insert into tbl_feedback(product_id,feedback_description,user_id,feedback_date,feedback_rating) values( '{$pid}','{$description}','{$uid}','{$date}','{$star}')");
if($q)
{
    echo "<script>alert('Thanks For Review');</script>";
    header("location:product.php");
}

?>