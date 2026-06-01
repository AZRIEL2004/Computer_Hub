
<div class="agile-main-top">
		<div class="container">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-3 col-sm-4 header-most-top">
					<p class=" text-lg-left text-center">Welcome <?php if(isset($_SESSION['id'])) echo $_SESSION['name'];?>!</p>
				</div>
				<div class="col-lg-9 col-sm-8 header-right ml-auto text-sm-right text-center">
					<!-- header lists -->
					<ul class="top-header-lists">
					<ul class="top-header-lists">
					<li class="mx-3">
						<a href="https://whatsapp.com/channel/0029VaSSJiv4yltRWPy0l42k " class="social-icon" target="_blank">
                        <i class="fab fa-whatsapp"></i>
						</a>
                    </li>
					<li class="mx-3">
						<a href="https://www.instagram.com/computerhub6273 " class="social-icon" target="_blank">
                        <i class="fab fa-instagram"></i>
						</a>
                    </li>
					<li class="mx-3">
						<a href="https://www.facebook.com/people/Rozal-ComputerHub/pfbid0gM3RbjUrSET3b4yawWgwDYSJxGBMB6qBs6h2YteCEKGy8zLR37wvk2e9wU48c9bhl/?mibextid=qi2Omg" class="social-icon" target="_blank">
                        <i class="fab fa-facebook-f"></i>
						</a>
                    </li>
			       <li class="mx-3">
                       <a href="https://x.com/computerhub5781?t=56hiYKUQDXgsd4694XUg_g&s=08 " class="social-icon">
					   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg>
                       </a>
                   </li>
						<!--<li class="mx-3">
							<a class="play-icon popup-with-zoom-anim " href="#small-dialog1">
								<i class="fas fa-map-marker mr-1"></i>Select Location</a>
						</li>-->

<?php
if(!isset($_SESSION['id']))
{
	?>
						<li class="mx-3">
							<a href="login.php" data-toggle="" data-target="" class="">
								<i class="fas fa-sign-in-alt mr-1"></i> Log In </a>
						</li>
						<li class="mx-3">
							<a href="register.php" data-toggle="" data-target="" class="">
								<i class="fas fa-sign-out-alt mr-1"></i>Register </a>
						</li>
<?php

}
?>

					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select City</option>
					<option>Ahmedabad</option>
					<option>Gandhinagar</option>
					<option>Surat</option>
					<option>Mumbai</option>
					<option>Delhi</option>
					<option>Kolkata</option>
					<option>Chennai</option>
					<option>Bangalore</option>
					<option>Hyderabad</option>
					<option>Pune</option>
					<option>Jaipur</option>
					<option>Chandigarh</option>
					<option>Lucknow</option>
					<option>Kanpur</option>
					<option>Nagpur</option>
				</optgroup>
				<optgroup label="Gujarat">
					<option>Ahmedabad</option>
					<option>Surat</option>
					<option>Vadodara</option>
					<option>Rajkot</option>
					<option>Gandhinagar</option>
					<option>Bhavnagar</option>
					<option>Jamnagar</option>
					<option>Junagadh</option>
					<option>Anand</option>
					<option>Bharuch</option>
				</optgroup>
				<optgroup label="Maharashtra">
					<option>Mumbai</option>
					<option>Pune</option>
					<option>Nagpur</option>
					<option>Nashik</option>
					<option>Aurangabad</option>
					<option>Navi Mumbai</option>
					<option>Thane</option>
					<option>Solapur</option>
					<option>Kolhapur</option>
					<option>Amravati</option>
					<option>Satara</option>
					<option>Sangli</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->
	<!-- modals -->
	<!-- log in -->

	<!-- register -->
	
	<!-- //modal -->
    <div class="header-bot my-md-4 my-3" id="site-header">

	
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
				<!-- logo -->
				<div class="col-lg-3 col-md-4 logo_agile">
					<h1>
						<a href="product.php"><span>C</span>omputer <span>H</span>ub</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-lg-9 col-md-8 header">
					<div class="row">
						<!-- search -->
						<div class="col-lg-9 col-sm-8 agileits_search">
							<form class="form-inline" action="product.php" style="max-width:600px;">
								<input class="form-control" type="search"
									placeholder="Search for products, brands and more" aria-label="Search" name="q" required>
								<button class="btn" type="submit"><i class="fa fa-search"
										aria-hidden="true"></i></button>
							</form>

						
							
						</div>
						<!-- //search -->
						<!--/user-->
					
						<!--//user-->
						<!-- cart details -->
						<div
							class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
							<div class="cart-store">
								<!-- toggle switch for light and dark theme -->
								<div class="cont-ser-position">
									<nav class="navigation">
										<div class="theme-switch-wrapper">
											<label class="theme-switch" for="checkbox">
												<input type="checkbox" id="checkbox">
												<div class="mode-container">
													<i class="gg-sun"></i>
													<i class="gg-moon"></i>
												</div>
											</label>
										</div>
									</nav>
								</div>
								<!-- //toggle switch for light and dark theme -->
							</div>
							<div class="cart-store">
								<a href="checkout.php"><i class="far fa-heart"></i></a>
							</div>
						<!--/profile-->
						<?php
if(isset($_SESSION['id']))
{
	?>


						<li style="list-style: none" class="nav-item dropdown">
					        <a href=""><i class="far fa-solid fa-user" style="width:20px"></i></a>
							
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
							  <div class="message-body">
							  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
		
								  <p class="mb-0 fs-3">
									<?php  
									if(isset($_SESSION['name'])){
										echo $_SESSION['name']; 
										
									?>
										</p>
										</a>
										<a href="profile.php" class="d-flex align-items-center gap-2 dropdown-item">
				
										  <p class="mb-0 fs-3">
											
										  My Profile
										  </p>
										</a>
										<a href="view-order.php" class="d-flex align-items-center gap-2 dropdown-item">
				
										  <p class="mb-0 fs-3">
											
										  My Orders
										  </p>
										</a>
										<a href="my-complaint.php" class="d-flex align-items-center gap-2 dropdown-item">
				
										  <p class="mb-0 fs-3">
											
										  My Complaint
										  </p>
										</a>
										<!--<a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
										  <i class="ti ti-mail fs-6"></i>
										  <p class="mb-0 fs-3">My Account</p>
										</a>
										<a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
										  <i class="ti ti-list-check fs-6"></i>
										  <p class="mb-0 fs-3">My Task</p>
										</a>-->
										<a href="change-password.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Change Password</a>
										<a href="logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>

									<?php
									}
									else{
										?>
									 	<a href="login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Login</a>
									
									<?php
									}
									?>

								  
							  </div>
							</div>
						  </li>
<?php
}
?>		

						<!--//profile-->

							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="view-cart.php" method="post" class="last text-right">
								 <button class="btn w3view-cart p-0" type="submit" name="submit" value="">
										
									<img src="images/cart.png" alt="" class="img-fluid"> 

									<?php 
								if(isset($_SESSION['id']))
								{
									$qq = mysqli_query($connection,"select * from tbl_cart where user_id = {$_SESSION['id']}");
									$count = mysqli_num_rows($qq);
									echo $count;
								}
									?>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
    <div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				
				
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Categorys
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Mobiles, Computers</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
											<?php
$selectcat = mysqli_query($connection,"SELECT * FROM tbl_category") or die(mysqli_error($connection));
?>
												<li>
												<?php
while($selectcatrow= mysqli_fetch_array($selectcat))
{ 
	echo "<a href='product.php?category_id={$selectcatrow['category_id']}'> {$selectcatrow['category_name']} </br> </a>"; 
}
?>
												</li>
												
											</ul>
							
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						<!--<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product.php">New Arrivals</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="blog.php">Blog Posts</a>
								<a class="dropdown-item" href="blog-single.php">Blog Single</a>
								<a class="dropdown-item" href="product.php">Product 1</a>
								<a class="dropdown-item" href="single.php">Single Product 1</a>
								<a class="dropdown-item" href="checkout.php">Checkout Page</a>
								<a class="dropdown-item" href="payment.php">Payment Page</a>
								<a class="dropdown-item" href="faqs.php">FAQS</a>
								<a class="dropdown-item" href="help.php">Help</a>
								<a class="dropdown-item" href="privacy.php">Privacy Policy</a>
								<a class="dropdown-item" href="terms.php">Terms of use</a>
							</div>
						</li>-->
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>