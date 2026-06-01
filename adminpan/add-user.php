<?php
session_start();
require './class/atclass.php';
if($_POST)
{ 
    $usertype_id = mysqli_real_escape_string($connection,$_POST['utype']);
    $name = mysqli_real_escape_string($connection,$_POST['uname']);
    $gender = mysqli_real_escape_string($connection,$_POST['ugender']);
    $email = mysqli_real_escape_string($connection,$_POST['uemail']);
    $pho_no = mysqli_real_escape_string($connection,$_POST['upno']);
    $password = mysqli_real_escape_string($connection,$_POST['upassword']);
    $address = mysqli_real_escape_string($connection,$_POST['uaddress']);

    $query = mysqli_query($connection,"insert into tbl_user(user_type_id,user_name,gender,email_id,phone_number,password,address) values('{$usertype_id}','{$name}','{$gender}','{$email}','{$pho_no}','{$password}','{$address}') ") or die(mysqli_error($connection));

if($query)
{
    echo "<script>alert('Record Inserted');</script>";
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
              <h5 class="card-title fw-semibold mb-4">ADD USER</h5>
              <div class="card">
                <div class="card-body">                  
                  <form method="post" enctype="multipart/form-data" id="myform">
                    <div class="mb-3">
                    <label class="form-label">User Type</label>
                    <?php 
                     $q = mysqli_query($connection,"select * from tbl_user_type");
                     echo "<select name='utype' required class='form-control'>";
                     echo "<option value=''>Select</option>";
                     while($data = mysqli_fetch_array($q))
                         {
                           echo "<option value='{$data['user_type_id']}'>{$data['user_type_name']}</option>";
                         }
                    echo "</select>";
                    ?>
                    </div>
                    <div class="mb-3">
                      <label for="uname" class="form-label">User Name</label>
                      <input type="text" required class="form-control" name="uname" placeholder="Enter Your Name" id="uname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="gender" class="form-label">Gender</label> <br>
                      <div class="form-label"></div>
                      <input type="radio" required name="ugender" value="M" id="gender">
                      <label for="gender" class="form-label">Male</label>
                      <input type="radio"  required name="ugender" value="F" id="gender">
                      <label for="gender" class="form-label">Female</label>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email ID</label>
                      <input  required type="email" class="form-control" laceholder="Enter Your Email ID" name="uemail" id="email">
                     </div>
                     <div class="mb-3">
                      <label for="pno" class="form-label">Phone Number</label>
                      <input type="number" required class="form-control" placeholder="Enter Your Phone no." name="upno" id="pno">
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">Password</label>
                      <input type="password" required class="form-control" name="upassword" id="pwd"> 
                    </div>
                    <button type="submit" class="btn btn-success">ADD USER</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                    <button type="button" onclick="window.location=''" class="btn btn-primary">VIEW</button>
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