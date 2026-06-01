<?php
session_start();
require './class/atclass.php';
 if(count($_POST)>0){
    $s=mysqli_query($connection, "UPDATE tbl_order SET order_status='".$_POST['os']."' WHERE order_id='".$_GET['order_id']."'");
    //header("location: view-order.php");
    if($s)
    {
      echo "<script>alert('Record Updated');window.location='view-order.php';</script>";
    }    
}
    $result=$connection->query("SELECT * FROM tbl_order WHERE order_id='".$_GET["order_id"]."'");
    $row=$result->fetch_assoc();
   
    ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php
    include("sidebar.php")
    ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php
      include("header.php")
      ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Order FORM</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data" id="myform">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">User name</label>
                      <input type="text" required class="form-control" name="pname" value="<?php echo $row["user_id"]?>" placeholder="Enter Product Name" id="exampleInputEmail1" readonly aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Order Date</label>
                      <input type="text" required class="form-control" name="pprice" value="<?php echo $row["order_date"]?>" placeholder="Enter Product Price" readonly id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Order Status</label>
                      <select name='os' required class='form-control'>
                    <option value='confrim'>Confirm</option>
                    <option value='pending'>Pending</option>
                    </select>


                     </div>
                     <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Order Amount</label>
                      <input type="text" required class="form-control" name="pimg" readonly  value="<?php echo $row["order_amount"]?>" id="exampleInputPassword1">
                    </div>                  
                    <button type="submit" class="btn btn-success">UPDATE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>
<script src="assets/jquery/jquery-3.7.1.js"></script>
<script src="assets/jquery/jquery.validate.js"></script>
<script>
$(document).ready(function(){
$("#myform").validate();
});
</script>
<style>
.error{
color:red;
}
</html>