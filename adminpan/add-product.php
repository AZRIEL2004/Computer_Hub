<?php
session_start();
require './class/atclass.php';
if(isset($_POST['btn1']))
{
    $category_id = mysqli_real_escape_string($connection,$_POST['cname']);
    $brand_id = mysqli_real_escape_string($connection,$_POST['bname']);
    $pname = mysqli_real_escape_string($connection,$_POST['pname']);
    $pprice = mysqli_real_escape_string($connection,$_POST['pprice']);
    $pdetails = mysqli_real_escape_string($connection,$_POST['pdetails']);
    $filename = $_FILES['pimg']['name'];
    $filepath = $_FILES['pimg']['tmp_name'];


    $fq = move_uploaded_file($filepath, "upload/".$filename);

    $query = mysqli_query($connection,"insert into tbl_product(category_id,brand_id,product_name,price,product_details,image_path) values('{$category_id}','{$brand_id}','{$pname}','{$pprice}','{$pdetails}','{$filename}') ") or die(mysqli_error($connection));

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
              <h5 class="card-title fw-semibold mb-4">PRODUCT FORM</h5>
              <div class="card">
                <div class="card-body">

                  
                  <form method="post" enctype="multipart/form-data" id="myform">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                    <?php 
                     $q = mysqli_query($connection,"select * from tbl_category");
                     echo "<select required name='cname' class='form-control'>";
                     echo "<option value=''>Select</option>";
                     while($data = mysqli_fetch_array($q))
                         {
                           echo "<option value='{$data['category_id']}'>{$data['category_name']}</option>";
                         }
                    echo "</select>";
                    ?>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                    <?php 
                     $q = mysqli_query($connection,"select * from tbl_brand");
                     echo "<select required name='bname' class='form-control'>";
                     echo "<option value=''>Select</option>";
                     while($data = mysqli_fetch_array($q))
                         {
                           echo "<option value='{$data['brand_id']}'>{$data['brand_name']}</option>";
                         }
                    echo "</select>";
                    ?>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Name</label>
                      <input type="text" required class="form-control" name="pname" placeholder="Enter Product Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Product Price</label>
                      <input type="number" required class="form-control" name="pprice" placeholder="Enter Product Price" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Product Details</label>
                      <textarea required type="textarea" class="form-control" placeholder="Enter Product Details" name="pdetails" id="exampleInputPassword1"></textarea>
                     </div>
                     <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Product Image</label>
                      <input type="file" required class="form-control" name="pimg" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="btn1" class="btn btn-success">ADD PRODUCT</button>
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
</style>
</html>