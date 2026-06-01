<?php
session_start();
require './class/atclass.php';
if($_POST)
{
    $user_id = mysqli_real_escape_string($connection,$_POST['un']);
    $complaint_details = mysqli_real_escape_string($connection,$_POST['cdetails']);
    $complaint_date = mysqli_real_escape_string($connection,$_POST['cdate']);
    $status = mysqli_real_escape_string($connection,$_POST['sts']);

    $query = mysqli_query($connection,"insert into tbl_complaint(user_id,complaint_details,complaint_date_time,complaint_status) values('{$user_id}','{$complaint_details}','{$complaint_date}','{$status}')") or die(mysqli_error($connection));
    

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
              <h5 class="card-title fw-semibold mb-4">COMPLAINT FORM</h5>
              <div class="card">
                <div class="card-body">

                  
                  <form method="post" enctype="multipart/form-data" id="myform">
                  <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <?php 
                     $q = mysqli_query($connection,"select * from tbl_user");
                     echo "<select required name='un' class='form-control'>";
                     echo "<option value=''>Select</option>";
                     while($data = mysqli_fetch_array($q))
                         {
                           echo "<option value='{$data['user_id']}'>{$data['user_name']}</option>";
                         }
                    echo "</select>";
                    ?>
                    </div>
                    <div class="mb-3">
                      <label for="cd" class="form-label">Complaint Details</label>
                      <input type="text" required class="form-control" name="cdetails" placeholder="Enter Complaint" id="cd" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="cd" class="form-label">Complaint Date</label>
                      <input type="date" required class="form-control" name="cdate" id="cd" aria-describedby="emailHelp">
                    </div>
                     <div class="mb-3">
                      <label for="sts" class="form-label">Status</label> <br>
                      <div class="form-label"></div>
                      <input type="radio" required name="sts" value="pending" id="sts">
                      <label for="sts" class="form-label">Pending</label>
                      <input type="radio" required name="sts" value="solved" id="sts">
                      <label for="sts" class="form-label">Solved</label>
                    </div>
                    <button type="submit" class="btn btn-success">ADD COMPLAINT</button>
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