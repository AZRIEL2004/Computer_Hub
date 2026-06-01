<?php
require './class/atclass.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_POST)
{
    $email = $_POST['email'];
    $q = mysqli_query($connection,"select * from tbl_user where email_id='{$email}'");
    $data = mysqli_fetch_array($q);
    $count = mysqli_num_rows($q);
    if($count==1)
    {
        
        require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'compuer.hub@gmail.com';                     //SMTP username
    $mail->Password   = 'qpnqmmpotabevbpl';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('compuer.hub@gmail.com', 'Computer Hub');
    $mail->addAddress($email, 'Joe User');     //Add a recipient
    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Forgot Password';
    $mail->Body    = "Password is ".$data['password'];
    $mail->AltBody = "Password is ".$data['password'];

    $mail->send();
    echo "<script>alert('Password Sent on your Email');</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


    }else{
        echo "<script>alert('User Not Found');</script>";
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
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <h2>Computer Hub</h2>
                  <!--<img src="assets/images/logos/dark-logo.svg" width="180" alt="">-->
                </a>
                <form method="POST" enctype="multipart/form-data" id="myform">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Email ID</label>
                    <input type="email" required class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                 
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Send Mail</button>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
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