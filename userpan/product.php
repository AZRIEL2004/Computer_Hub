<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/11-06-2021/electronics-mart-liberty-demo_Free/1081434887/web/product.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jan 2024 07:37:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/php;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Computer hub</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="http://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<!-- //web fonts -->
</head>

<body>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-98H8KRKT85');
</script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}
#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}
#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}
#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}
#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}
#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */
#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}
/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */
.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;
  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;
  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
	<!-- top-header -->
	<?php
			include('./thempart/header.php');
		
			if (isset($_GET['pageno'])) {
				$pageno = $_GET['pageno'];
			} else {
				$pageno = 1;
			}
			if(isset($_GET['category_id']))
			{
				if($_GET['category_id']!="")
				{
					
				$search_category="and category_id='{$_GET['category_id']}'";
				$category_id=$_GET['category_id'];
					}
					else{
						$search_category="";
						$category_id="";		
					}
				
			}
			else{
				$search_category="";
				$category_id="";
			}
			
			if(isset($_GET['brand_id']))
			{
				if($_GET['brand_id']!="")
				{
					
				$search_brand="and brand_id='{$_GET['brand_id']}'";
				$brand_id=$_GET['brand_id'];
					}
					else{
						$search_brand="";
						$brand_id="";		
					}
				
			}
			else{
				$search_brand="";
				$brand_id="";
			}
			
			if(isset($_GET['sprice']))
			{
				if($_GET['sprice']!="")
				{
					$sprice=$_GET['sprice'];
					$eprice=$_GET['eprice'];	
				$search_price="and price between '{$sprice}' and '{$eprice}'";
				
					}
					else{
						$search_price="";
						$sprice="";
						$eprice="";		
					}
				
			}
			else{
				$search_price="";
				$sprice="";
				$eprice="";
			}
			
			if(isset($_GET['q']))
			{
				if($_GET['q']!="")
				{
					$q=$_GET['q'];	
				$search_name="and product_name like '%{$q}%'";
				
					}
					else{
						$search_name="";
						$q="";		
					}
				
			}
			else{
				$search_name="";
				$q="";
			}
			
			$where ="where is_display='1' ".$search_category." ".$search_brand." ".$search_price."".$search_name;
		
		?>
	<!-- //top-header -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">
		<div class="container py-5">
			<h3 class="title-style pt-5">The Best <span>Deals</span> on Electronics </h3>
			<ul class="w3_short pt-3 pb-5">
				<li>
					<a href="index.php">Home</a>
					<i class="fa fa-angle-right mx-2" aria-hidden="true"></i>
				</li>
				<li>Electronics</li>
			</ul>
		</div>
	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
		</div>
	</div>
	<!-- //page -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span class="font-weight-normal">Our</span> New Products</h3>
			<!-- //tittle heading -->


			<div class="row">
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0 order-lg-first order-last">
					<div class="side-bar p-sm-4 p-3">
						
						<!--  Brand -->
						<div class="left-side py-2">
													<h3 class="agileits-sear-head mb-3">Brand</h3>

						<?php
						$selectbar = mysqli_query($connection,"SELECT * FROM tbl_brand") or die(mysqli_error($connection));
						?>
													<ul>
														<li>
						<?php
						while($seleccatrow= mysqli_fetch_array($selectbar))
						{ 
							echo "<a href='product.php?brand_id={$seleccatrow['brand_id']}'> {$seleccatrow['brand_name']} </br> </a>"; 
						}
						?>
														</li>
													</ul>
												</div>

						<!-- //Brand -->
						<!-- category -->
						<div class="left-side py-2">
							<h3 class="agileits-sear-head mb-3">Categorys</h3>

<?php
$selectcat = mysqli_query($connection,"SELECT * FROM tbl_category") or die(mysqli_error($connection));
?>
							<ul>
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
						<!-- //category -->
						<!-- price -->
						<div class="range py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
								<ul>
									<li class="my-1">
										<a href="product.php?sprice=1&eprice=999">Under &#8377;1,000</a>
									</li>
									<li class="my-1">
										<a href="product.php?sprice=1000&eprice=5000">&#8377;1,000 - &#8377;5,000</a>
									</li>
									<li class="my-1">
										<a href="product.php?sprice=5000&eprice=10000">&#8377;5,000 - &#8377;10,000</a>
									</li>
									<li class="my-1">
										<a href="product.php?sprice=10000&eprice=20000">&#8377;10,000 - &#8377;20,000</a>
									</li>
									<li class="my-1">
										<a href="product.php?sprice=20000&eprice=30000">&#8377;20,000 &#8377;30,000</a>
									</li>
									<li class="my-1">
										<a href="product.php?sprice=30000&eprice=100000">Over &#8377;30,000</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- reviews -->
						<!---<div class="customer-rev left-side py-2">
							<h3 class="agileits-sear-head mb-3">Customer Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>2.5</span>
									</a>
								</li>
							</ul>
						</div>-->
						<!-- //reviews -->
						
						<!-- discounts -->
						<!--<div class="left-side py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% or More</span>
								</li>
							</ul>
						</div>
-->
						<!-- //discounts -->
						<!-- arrivals -->
						<div class="left-side py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div>
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Best Seller</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/k1.png" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="#">Samsung Galaxy F62 (Laser Grey, 128 GB) (6 GB RAM)</a>
											<a href="#" class="price-mar mt-2">&#8377;12,990.00</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/k3.png" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="#">boAt Rockerz 450 Bluetooth Headset (Luscious Black, On the
												Ear)</a>
											<a href="#" class="price-mar mt-2">&#8377;1,199.00 </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product left -->
				</div>
				<!-- product right -->
				<div class="agileinfo-ads-display col-lg-9 order-lg-last order-first">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-lg-4">
							<div class="row">
							
							<!-- Start -->
<?php


///
///
///
///
//
///

///
///
///
///


///
///
///
///
$no_of_records_per_page = 12;
$offset = ($pageno - 1) * $no_of_records_per_page;

$query_1 = mysqli_query($connection, "SELECT COUNT(*) as total FROM tbl_product $where");
$result = mysqli_fetch_array($query_1);
$total_rows = $result["total"];
$total_pages = ceil($total_rows / $no_of_records_per_page);

	

	$q = mysqli_query($connection,"SELECT * FROM tbl_product $where LIMIT $offset, $no_of_records_per_page");
	$count=mysqli_num_rows($q);
	if($count>0){

		///
		///
		///

										while($row=mysqli_fetch_array($q))
										{
										?>
<div class='col-md-4 product-men'>
	<div class='men-pro-item simpleCart_shelfItem'>
		<div class='men-thumb-item text-center'>
			<img src="./upload/<?php  echo $row["image_path"];?>" alt='' class='img-fluid' height="350px" width="350px">
			<div class='men-cart-pro'>
				<div class='inner-men-cart-pro'>
					<a href='single.php?product_id=<?php echo $row["product_id"]; ?>' class='link-product-add-cart'>Quick View</a>
				</div>
			</div>
		</div>
		<div class="item-info-product text-center mt-2">
											<h4 class="pt-1">
												<a href="single.php">
													<?php echo $row["product_name"];?>
												</a>
											</h4>
											<div class="info-product-price">
												<span class="item_price">
													&#8377;<?php echo $row["price"];?>
												</span>
												<del>&#8377;<?php echo $row["price"] + 500;?></del>
											</div>
											<button class="btn btn-style btn-style-secondary mt-3">ADD TO CART</button>
		</div>
	</div>
</div>
<?php
}
?>
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<div class="col-md-12 mt-5"> 
<nav aria-label="Page navigation example">
<ul class="pagination">
            <li><a class="page-link" href="?pageno=1&category_id=<?php echo $category_id;?>&brand_id=<?php echo $brand_id;?>&sprice=<?php echo $sprice;?>&eprice=<?php echo $eprice;?>">First</a></li>
            <li class="page-item <?php if ($pageno <= 1) {
                            echo 'disabled';
                        } ?>">
                <a class="page-link" href="<?php if ($pageno <= 1) {
                                echo '#';
                            } else {
                                echo "?pageno=" . ($pageno - 1)."&category_id=".$category_id."&brand_id=".$brand_id."&sprice=".$sprice."&eprice=".$eprice;
                            } ?>">Prev</a>
            </li>
            <li class="page-item <?php if ($pageno >= $total_pages) {
                            echo 'disabled';
                        } ?>">
                <a class="page-link" href="<?php if ($pageno >= $total_pages) {
                                echo '#';
                            } else {
                                echo "?pageno=" . ($pageno + 1)."&category_id=".$category_id."&brand_id=".$brand_id."&sprice=".$sprice."&eprice=".$eprice;
                            } ?>">Next</a>
            </li>
            <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>&category_id=<?php echo $category_id;?>&brand_id=<?php echo $brand_id;?>&sprice=<?php echo $sprice;?>&eprice=<?php echo $eprice;?>">Last</a></li>
        </ul>
						</nav>

						
						</div>	
						
						<?php }  else{
							echo "<h3>No Record Found</h3>";
						} ?>
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->	
						
								
								<!-- -->

								
							</div>
						</div>
						<!-- //first section -->
					 
						<!-- //3rd section -->
						<!-- fourth section -->
					 
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product right -->
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	
	

	
	<!-- middle section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
	<!-- footer -->
	<?php
		include('./thempart/footer.php')
	?>
	<!-- //footer -->
		<!-- js-files -->
	<!-- common jquery plugin -->
	<script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
	<!-- //common jquery plugin -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		&#8377;(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			&#8377;().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function (&#8377;) {
			&#8377;(".scroll").click(function (event) {
				event.preventDefault();
				&#8377;('php,body').animate({
					scrollTop: &#8377;(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- nav smooth scroll -->
	<script>
		&#8377;(document).ready(function () {
			&#8377;(".dropdown").hover(
				function () {
					&#8377;('.dropdown-menu', this).stop(true, true).slideDown("fast");
					&#8377;(this).toggleClass('open');
				},
				function () {
					&#8377;('.dropdown-menu', this).stop(true, true).slideUp("fast");
					&#8377;(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		&#8377;(document).ready(function () {
			&#8377;('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts
			.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- theme switch js (light and dark)-->
	<script src="js/theme-change.js"></script>
	<script>
		function autoType(elementClass, typingSpeed) {
			var thhis = &#8377;(elementClass);
			thhis.css({
				"position": "relative",
				"display": "inline-block"
			});
			thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
			thhis = thhis.find(".text-js");
			var text = thhis.text().trim().split('');
			var amntOfChars = text.length;
			var newString = "";
			thhis.text("|");
			setTimeout(function () {
				thhis.css("opacity", 1);
				thhis.prev().removeAttr("style");
				thhis.text("");
				for (var i = 0; i < amntOfChars; i++) {
					(function (i, char) {
						setTimeout(function () {
							newString += char;
							thhis.text(newString);
						}, i * typingSpeed);
					})(i + 1, text[i]);
				}
			}, 1500);
		}
		&#8377;(document).ready(function () {
			// Now to start autoTyping just call the autoType function with the 
			// class of outer div
			// The second paramter is the speed between each letter is typed.   
			autoType(".type-js", 200);
		});
	</script>
	<!-- //theme switch js (light and dark)-->

	<!-- disable body scroll which navbar is in active -->
	<script>
		&#8377;(function () {
			&#8377;('.navbar-toggler').click(function () {
				&#8377;('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- //disable body scroll which navbar is in active -->

	<!--bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<!-- //bootstrap-->
	<!-- //Js scripts -->

<script>(function(){var js = "window['__CF&#8377;cv&#8377;params']={r:'8443ba4a0cd80337',t:'MTcwNTA0NDk3OC44NDcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/c8377512/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerphp = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/11-06-2021/electronics-mart-liberty-demo_Free/1081434887/web/product.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jan 2024 07:37:12 GMT -->
</php>