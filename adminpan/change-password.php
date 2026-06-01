<?php
session_start();
require './class/atclass.php';
//Check Login
if (!isset($_SESSION['id'])) {
header("location:authentication-login.php");
}
//Submit
if ($_POST) {
$opass = $_POST['opass'];
$npass = $_POST['npass'];
$cpass = $_POST['cpass'];
$id = $_SESSION['id'];
//Fetch Old Password from DB
$opq = mysqli_query($connection,"select * from tbl_user where user_id = '{$id}'");
$opdata = mysqli_fetch_array($opq);
//Check Old Password
if ($opass == $opdata['password']) {
//Compare New and Confirm
if ($npass == $cpass){
//Update Password
$uq = mysqli_query($connection, "update tbl_user set password='{$npass}' where user_id='{$id}' ");
if ($uq) {
echo "<script>alert('Password Changed'); </script>";
header('location:index.php');
}
} else {
echo "<script>alert('New and Confirm Password Not Match'); </script>";
}
} else {
echo "<script>alert('Old Password Not Match'); </script>";
}
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Computer Hub</title>
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
              <h5 class="card-title fw-semibold mb-4">CHANGE PASSWORD</h5>
              <div class="card">
                <div class="card-body">
                 <form method="POST" enctype="multipart/form-data" id="myform">
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label" >Old Password</label>
                    <input type="password" required class="form-control" name="opass" id="exampleInputPassword1" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword2" class="form-label" >New Password</label>
                    <input type="password" required class="form-control" name="npass" id="exampleInputPassword2" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword3" class="form-label" >Confirm Password</label>
                    <input type="password" required class="form-control" name="cpass" id="exampleInputPassword3" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Submit</button>
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
