<?php
session_start();
require './class/atclass.php';
if($_POST)
{
    $category_name = mysqli_real_escape_string($connection,$_POST['category_name']);
    $query = mysqli_query($connection,"insert into tbl_category(category_name) values('{$category_name}') ") or die(mysqli_error($connection));
    if($query)
    {
        echo "<script>alert('Category Inserted');</script>";
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
              <h5 class="card-title fw-semibold mb-4">ADD CATEGORY</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data" id="myform">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category Name</label>
                      <input type="text" pattern="[A-Za-z]*" class="form-control" name="category_name" placeholder="Enter Category Name" id="exampleInputEmail1" required>
                    </div>                 
                    <button type="submit" class="btn btn-success">ADD CATEGORY</button>
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