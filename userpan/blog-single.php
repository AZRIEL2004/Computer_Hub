<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/11-06-2021/electronics-mart-liberty-demo_Free/1081434887/web/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jan 2024 07:37:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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

<body id="top">
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
		?>
    <!-- //top-header -->

    <!-- header-bottom-->

    <!-- shop locator (popup) -->
    
    <!-- //header-bottom -->
    <!-- navigation -->

    <!-- //navigation -->

    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l inner-contact-page">
        <div class="container py-5">
            <h3 class="title-style text-white pt-5"><span>Blog Single</span> Page</h3>
            <ul class="w3_short pt-3 pb-5">
                <li>
                    <a href="index.php" class="text-white">Home</a>
                    <i class="fa fa-angle-right mx-2 text-white" aria-hidden="true"></i>
                </li>
                <li class="text-light">Blog Single</li>
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
    <!-- blog page -->
    <section class="w3l-text-11 py-5 topscroll">
        <div class="text11 py-md-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 text11-content">
                        <img src="images/blog-single.jpg" class="img-fluid" alt="">
                        <h4 class="">But indeed we both accuse them and with just hatred who</h4>
                        <h6>Feb 12, 2021</h6>
                        <a href="#admin" class="admin">- by Maureen Bio</a>
                        <p class="mt-4 mb-3">The clinical stage before life is just an element. Unfortunately, that's it
                            throat
                            bow
                            the very element, just mourning. and pure always. It is made just before life
                            but also
                            element Until then
                            the element of the arc of the throat, just mourning. and pure always. Just before the end of life
                            is made
                            element Until the very mouth of the bow...</p>
                        <p class="mb-4">Brown throat before life just becomes an element. Until the very throat
                            element of arc, just mourning. and pure always. It is made just before life
                            element Until the very throat. Until the element of the bow itself.</p>

                        <p class="mb-3">Brown throat before life just becomes an element. Until the very throat
                            element of arc, just mourning. and pure always. It is made just before life
                            element Until the very throat. Until the element of the bow itself.</p>

                        <p class="mb-3">Lorre throat becomes brown just before life becomes an element. Until the very throat
                            element of arc, just mourning. and pure always. It is made just before life
                            element Until the very throat. Until the element of the bow itself.</p>
                        <div class="item mt-5">
                            <h3 class="aside-title">Maybe You are Interested in </h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="list-view list-view1">
                                        <div class="grids5-info">
                                            <a href="blog-single.html" class="d-block zoom"><img
                                                    src="images/blog-s1.jpg" alt=""
                                                    class="img-fluid radius-image news-image"></a>
                                            <div class="blog-info align-self">
                                                <a href="blog-single.html" class="blog-desc1">
                                                So that pleasures are to be repudiated in great measure
                                                </a>
                                                <div class="author align-items-center mb-1">
                                                    <a href="#">Maureen Bio</a> in <a href="#url">Ideas</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-lg-0 mt-5">
                                    <div class="list-view list-view1">
                                        <div class="grids5-info">
                                            <a href="blog-single.html" class="d-block zoom"><img
                                                    src="images/blog-s3.jpg" alt=""
                                                    class="img-fluid radius-image news-image"></a>
                                            <div class="blog-info align-self">
                                                <a href="blog-single.html" class="blog-desc1">Maiores alias consequatur
                                                    aut</a>
                                                <div class="author align-items-center mb-1">
                                                    <a href="#">Maureen Bio</a> in <a href="#url">Design</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <p class="mb-3 mt-5">Brown throat before life just becomes an element. Until then
                                throat
                                element of arc, just mourning. and pure always. It is made just before life
                                element Until the very throat. Until the element of the bow itself.</p>

                            <p class="mb-3">Brown throat before life just becomes an element. Until then
                                throat
                                element of arc, just mourning. and pure always. It is made just before life
                                element Until the very throat. Until the element of the bow itself.</p>
                        </div>


                        <div class="social-share-blog mt-5">
                            <ul class="column3 social m-0 p-0">
                                <li>
                                    <p class="m-0 mr-4">Share this post :</p>
                                </li>
                                <li><a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                        <nav class="post-navigation row mt-5 py-4">
                            <div class="post-prev col-6 pr-sm-5">
                                <span class="nav-title">
                                    <span class="fa fa-long-arrow-left mr-2"></span> Prev Post </span>

                            </div>
                            <div class="post-next col-6 pl-sm-5 text-right">
                                <span class="nav-title">
                                    Next Post <span class="fa fa-long-arrow-right ml-2"> </span><span
                                        class="next-post pull-right"></span> </span>
                            </div>
                        </nav>
                        <div class="comments">
                            <h3 class="aside-title ">Recent comments(2)</h3>
                            <div class="comments-grids">
                                <div class="media-grid">
                                    <div class="media">
                                        <a class="comment-img" href="#url"><img src="images/testi1.jpg"
                                                class="img-fluid" width="100px" alt="placeholder image"></a>
                                        <div class="media-body comments-grid-right">
                                            <h5>Jack Harry</h5>
                                            <ul class="p-0 comment">
                                                <li class="">Sep 17th, 2021 at 11:00 am</li>
                                                <li>
                                                    <a href="#comment" class="replay"><span
                                                            class="fa fa-share-square-o mr-1" aria-hidden="true"></span>
                                                        Reply</a>
                                                </li>
                                            </ul>
                                            <p>Mattis as hendrerit not, it needs to be easy. But the ultricia is not pure
                                                who
                                                time The boat itself must be drunk, nor is it pure who is suffering for a long time.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="media-grid">
                                    <div class="media">
                                        <a class="comment-img" href="#url"><img src="images/testi2.jpg"
                                                class="img-fluid" width="100px" alt="placeholder image"></a>
                                        <div class="media-body comments-grid-right">
                                            <h5>Charlie</h5>
                                            <ul class="p-0 comment">
                                                <li class="">Sep 17th, 2021 at 05:45 pm </li>
                                                <li>
                                                    <a href="#comment" class="replay"><span
                                                            class="fa fa-share-square-o mr-1" aria-hidden="true"></span>
                                                        Reply</a>
                                                </li>
                                            </ul>
                                            <p>Mattis as hendrerit not, it needs to be easy. But the ultricia is not pure
                                                who
                                                time The football is not pure any time.
                                            </p>
                                            <div class="media mb-0 border-0 px-0 media-2 mt-5">
                                                <a class="comment-img" href="#url"><img src="images/testi3.jpg"
                                                        class="img-fluid" width="100px" alt="placeholder image"></a>
                                                <div class="media-body comments-grid-right">
                                                    <h5>Jack Harry</h5>
                                                    <ul class="p-0 comment">
                                                        <li class="">Sep 17th, 2021 at 11:00 am</li>
                                                        <li>
                                                            <a href="#comment" class="replay"><span
                                                                    class="fa fa-share-square-o mr-1"
                                                                    aria-hidden="true"></span> Reply</a>
                                                        </li>
                                                    </ul>
                                                    <p>Mattis as hendrerit not, it needs to be easy. But not the next time either
                                                        pure who
                                                        time pain set</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment-form" id="comment">
                            <h3 class="aside-title">Leave a Comment</h3>
                            <form action="#" method="post">
                                <div class="input-grids">
                                    <div class="row">
                                        <div class="form-group col-lg-4">
                                            <input type="text" name="Name" class="form-control" placeholder="Name"
                                                required="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <input type="email" name="Email" class="form-control" placeholder="Email"
                                                required="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <input type="text" name="Website" class="form-control" placeholder="Website"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="Comment" class="form-control" placeholder="Your Comment"
                                            required=""></textarea>
                                    </div>

                                </div>
                                <div class="submit text-right">
                                    <button class="btn btn-style btn-primary">Post Comment
                                    </button></div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-side col-xl-3 col-lg-4 mt-lg-0 mt-5">
                        <aside class="sidebar">
                            <!--Blog Category Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="sidebar-title">
                                    <h4>Categories</h4>
                                </div>
                                <ul class="blog-cat">
                                    <li><a href="#link"> Electronics
                                            <label>4</label></a></li>
                                    <li><a href="#link"> Accessories
                                            <label>8</label></a></li>
                                    <li><a href="#link"> Headphones
                                            <label>8</label></a></li>
                                    <li><a href="#link"> Home Audio
                                            <label>3</label></a></li>
                                </ul>
                            </div>
                            <!-- Popular Post Widget-->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h4>Recent Posts</h4>
                                </div>
                                <article class="post">
                                    <figure class="post-thumb"><img src="images/blog-s1.jpg" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">But I give such time as </a>
                                    </div>
                                    <div class="post-info">Feb 11, 2021</div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="images/blog-s4.jpg" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">And with some great pain
                                        </a></div>
                                    <div class="post-info">Feb 22, 2021</div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="images/blog-s3.jpg" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Amkmm As for at least</a>
                                    </div>
                                    <div class="post-info">Feb 13, 2021</div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><img src="images/blog-s2.jpg" alt=""></figure>
                                    <div class="text"><a href="blog-single.html">Amkmm As for at least</a>
                                    </div>
                                    <div class="post-info">Feb 14, 2021</div>
                                </article>
                            </div>

                            <!-- sidebar sticky -->
                            <div class="sidebar-sticky">
                                <div class="sidebar-sticky-fix">
                                    <!--Gallery Widget-->
                                    <div class="sidebar-widget instagram-widget">
                                        <div class="sidebar-title">
                                            <h4>Gallery</h4>
                                        </div>
                                        <div class="images-outer clearfix">
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g1.jpg" alt=" " class="img-fluid" />
                                            </a>
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g2.jpg" alt=" " class="img-fluid" />
                                            </a>
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g3.jpg" alt=" " class="img-fluid" />
                                            </a>
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g6.jpg" alt=" " class="img-fluid" />
                                            </a>
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g5.jpg" alt=" " class="img-fluid" />
                                            </a>
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g4.jpg" alt=" " class="img-fluid" />
                                            </a>
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g7.jpg" alt=" " class="img-fluid" />
                                            </a>
                                            <!--Image Box-->
                                            <a href="blog-single.html">
                                                <img src="images/g8.jpg" alt=" " class="img-fluid" />
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Tags Widget-->
                                    <div class="sidebar-widget popular-tags">
                                        <div class="sidebar-title">
                                            <h4>Tags</h4>
                                        </div>
                                        <a href="#url">electronics</a>
                                        <a href="#url">iphone</a>
                                        <a href="#url">tech</a>
                                        <a href="#url">smart</a>
                                        <a href="#url">refrigerator</a>
                                        <a href="#url">ac</a>
                                        <a href="#url">technic</a>
                                    </div>
                                    <!-- Subscribe Widget-->

                                </div>
                            </div>
                            <!-- //sidebar sticky -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog page -->
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
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */

            $().UItoTop({
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
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- nav smooth scroll -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //nav smooth scroll -->

    <!-- popup modal (for location)-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
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
                alert(
                    'The minimum order quantity is 3. Please add more to your shopping cart before checking out'
                );
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
            var thhis = $(elementClass);
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

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->

<script>(function(){var js = "window['__CF$cv$params']={r:'8443ba59be860337',t:'MTcwNTA0NDk4MS4zNjEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/c8377512/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/11-06-2021/electronics-mart-liberty-demo_Free/1081434887/web/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jan 2024 07:37:34 GMT -->
</html>