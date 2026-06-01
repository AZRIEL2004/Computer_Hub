<?php
session_start();
if(!isset($_SESSION['id']))
{
  header("location:authentication-login.php");
}
require './class/atclass.php';
#if(!isset($_SESSION['user'])){
#  header('location:authentication-login.php');
#}
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
    <?php
    include("sidebar.php")
    ?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php
      include("header.php")
      ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
       
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Recent Order</h5>
                </div>
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0" text-align='center'>Order Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">User Name</h6>
                        </th>
                       
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Order Amount</h6>
                        </th>
                        </tr>
                    </thead>
<?php 
 $oq = mysqli_query($connection,"SELECT * FROM tbl_order ORDER BY  order_id DESC  limit 0,5 " );
 while($data=mysqli_fetch_array($oq) ){
  $uid=$data["user_id"];
  
  $u1nq = mysqli_query($connection,"SELECT * FROM tbl_user where user_id = $uid ");
  $u1n = mysqli_fetch_array($u1nq);
?>
 <tbody>
                      <tr>
                        <td class="border-bottom-0"><?php echo $data["order_id"]; ?></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo  $u1n["user_name"]; ?> </h6>
                                                   
                        </td>
                       
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <?php echo $data["order_amount"]; ?></span>
                          </div>
                        </td>
                      </tr> 
                     
                       <?php } ?> 
                    </tbody>
                  </table>
              </div>
            </div>
          </div>





          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">


                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0" text-align='center'>Payment Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Amount</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        
                      </tr>
                    </thead>
                    <?php
 $q = mysqli_query($connection,"SELECT * FROM tbl_payment ORDER BY payment_id DESC  limit 0,5 " );
 while($row=mysqli_fetch_array($q) ){
  $orid = $row["order_id"];

  $uq = mysqli_query($connection,"SELECT * FROM tbl_order where order_id = $orid ");
  $uid = mysqli_fetch_array($uq);
  $uqid = $uid["user_id"];

  
  
  $unq = mysqli_query($connection,"SELECT * FROM tbl_user where user_id = $uqid ");
  $un = mysqli_fetch_array($unq);

?>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><?php echo $row["payment_id"];?></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $un["user_name"]; ?> </h6>
                                                   
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row["amount"];?></p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <?php echo $row["payment_status"];?></span>
                          </div>
                        </td>
                      </tr> 
                     
                      <?php } ?>      
                    </tbody>
                  </table>




                  
                </div>

                
              </div>
            </div>
            
          </div>
        </div>
     
<div>
        <!-- Yearly Breakup -->

        <?php 

$pq  = mysqli_query($connection,"select sum(order_amount) from tbl_order");
$data = mysqli_fetch_array($pq);

?>
        <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">&#8377;<?php echo $data[0]; ?></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                         <!-- #region -->
                        </div>
                       
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
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
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>