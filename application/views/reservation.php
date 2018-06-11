
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Artica - Restaurant HTML Template | Reservation</title>
<!-- Stylesheets -->
<link href="<?= base_url() ?>css/bootstrap.css" rel="stylesheet">
<link href="<?= base_url() ?>css/revolution-slider.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="<?= base_url() ?>css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?= base_url() ?>css/responsive.css" rel="stylesheet">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / header-style-two-->
    <header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<!--social-icon-->
                        <div class="social-icon">
                        	<a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa fa-skyatlas"></span></a>
                            <a href="#"><span class="fa fa fa-tumblr"></span></a>
                            
                        </div>
                        
                    	<ul class="clearfix">
                        	<li>Call for reservation: +011 29 345 678</li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                    
                    	<ul>
                        	<li>Opening Hours : 9:00am - 10:00pm</li>
                            <li class="eng-dropdown dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon"></span> Eng <span class="arow-icon fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Bengali</a></li>
                                    <li><a href="#">Hindi</a></li>
                                </ul>
                            </li>
                            <!--Cart Btn-->
                            <li class="cart-btn"><a href="shopping-cart.html"><span class="icon flaticon-bag"></span><span class="count">2</span></a></li>
                        </ul>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="<?= base_url() ?>images/logo.png" alt="Artica"></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="#">Home</a>
                                    	<ul>
                                            <li><a href="index.html">Homepage One</a></li>
                                            <li><a href="index-2.html">Homepage Two</a></li>
                                            <li><a href="index-3.html">Homepage Three</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="current"><a href="reservation.html">Reservation</a></li>
                                    <li class="dropdown"><a href="#">Menu</a>
                                    	<ul>
                                            <li><a href="menu-style-one.html">Menu Style One</a></li>
                                            <li><a href="menu-style-two.html">Menu Style Two</a></li>
                                            <li><a href="menu-style-three.html">Menu Style Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                    	<ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-single.html">Shop Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                    	<ul>
                                            <li><a href="shop.html">Shop Fullwidth</a></li>
                                            <li><a href="shop-sidebar.html">Shop with Sidebar</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Reserv Box Btn-->
                        <div class="btn-outer"><a href="Home/reservation" class=" reserv-box-btn">Reservation</a></div>
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    	<button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="images/logo-2.png" alt="Artica"></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            	<!-- .navigation -->
                <ul class="navigation clearfix">
                    <li class="dropdown"><a href="#">Home</a>
                        <ul>
                            <li><a href="index.html">Homepage One</a></li>
                            <li><a href="index-2.html">Homepage Two</a></li>
                            <li><a href="index-3.html">Homepage Three</a></li>
                            <li class="dropdown"><a href="#">Header Styles</a>
                                <ul>
                                    <li><a href="index.html">Header Style One</a></li>
                                    <li><a href="index-2.html">Header Style Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="current"><a href="Home/reservation">Reservation</a></li>
                    <li class="dropdown"><a href="#">Menu</a>
                        <ul>
                            <li><a href="menu-style-one.html">Menu Style One</a></li>
                            <li><a href="menu-style-two.html">Menu Style Two</a></li>
                            <li><a href="menu-style-three.html">Menu Style Three</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-single.html">Shop Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Shop Fullwidth</a></li>
                            <li><a href="shop-sidebar.html">Shop with Sidebar</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                 </ul>
            </div><!-- /.Side-menu -->
        
            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Reservartin Section-->
    <section class="reservation-section">
    	<div class="auto-container">
        	<!--Content Box-->
        	<div class="content-box">
            	<h2>Booking a table online is easy</h2>
            	<h3>Make A Reservation</h3>
            	<div class="text">
                	<p>Booking a table has never been so easy with free & instant online restaurant reservations, booking now!!</p>
                    <p>Monday to Friday <span>9:00 am - 23:00 pm</span>  Saturday to Sunday <span>10:00 am - 22:00 pm</span> Note: Arctica Restaurant is closed on holidays.</p>
                </div>
                <h4>0844.335.1211</h4>
            </div>
            <!--End Content Box-->
            
            <!--form-box-->
            <div class="form-box default-form wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            	<h3>Book Your Table Online</h3>
            	<form method="post" action="datban">
                	<div class="clearfix">
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <input id="field-one" type="text" name="tenkh" value="" placeholder="Your Name *" required>
                            </div>
                        </div>
                    
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <input id="field-two" type="email" name="email" value="" placeholder="Your Email *" required>
                            </div>
                        </div>
                    
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <label class="icon-label" for="field-three"><span class="fa fa-mobile"></span></label>
                                <input id="field-three" type="text" name="sdt" value="" placeholder="Mobile Number *" required>
                            </div>
                        </div>
                        
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <label class="icon-label" for="field-four"><span class="fa fa-calendar"></span></label>
                                <input id="field-four" class="datepicker" type="date" name="ngaydatban" value="" placeholder="Date *" required>
                            </div>
                        </div>
                        
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <label class="icon-label" for="field-five"><span class="fa fa-clock-o"></span></label>
                                <input id="field-five" type="time" name="giodatban" value="" placeholder="Time *" required>
                            </div>
                        </div>

                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <label class="icon-label" for="field-six"><span class="fa fa-user"></span></label>
                                <input id="field-six" type="number" name="songuoi" value="" placeholder="No. of Persons *" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-xs-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="theme-btn btn-style-one">Book now</button>
                        </div>
                        
                    </div>
                </form>
            </div>
            
        </div>
    </section>
    <!--Reservartin Section-->
    
    <!--Parallax Image Section-->
    <section class="parallax-image-section" style="background-image:url(images/background/8.jpg);">
    	<div class="auto-container">
        	<h2>Enjoy Pleasant Pastime With Friends and Partners</h2>
            <h4>Relaxing Atmosphere</h4>
        </div>
    </section>
    <!--End Parallax Image Section-->
    
    <!--Meeting Section-->
    <section class="meeting-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Content Column-->
            	<div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                        	<h2>Gorgeous Halls</h2>
                            <h3>Find Perfect Place For Any Meeting </h3>
                        </div>
                        <div class="content">
                            <div class="text">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                            
                            <!--Meeting Info-->
                            <div class="meeting-info">
                                <h4>Seat Up 155 Company Meatings</h4>
                                <div class="text">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
                            </div>
                            
                            <!--Meeting Info-->
                            <div class="meeting-info">
                                <h4>Traditional Home hall</h4>
                                <div class="text">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </div>
                            </div>
                            
                            <a href="#" class="read-more theme-btn btn-style-one">Book Now</a>
                        </div>
                        
                    </div>
                </div>
                
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                	<div class="row clearfix">
                    	<div class="column col-md-6 col-sm-6 col-xs-6">
                        	<figure class="image-box">
                            	<img src="images/resource/meeting-1.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="column col-md-6 col-sm-6 col-xs-6">
                        	<figure class="image-box">
                            	<img src="images/resource/meeting-2.jpg" alt="" />
                            </figure>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Meeting Section-->
   
    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	<!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-7 col-sm-6 col-xs-12">
                            	<div class="footer-widget about-widget">
                                	<div class="footer-logo"><figure><a href="index.html"><img src="images/footer-logo.png" alt=""></a></figure></div>
                                    <div class="widget-content">
                                    	<div class="text">Marsh mallow muffin soufflé jelly-o tart cake Marshmallow macaroon jelly jubes dont tiramisu croissant cake.</div>
                                        <!--Contact Info-->
                                        <ul class="contact-info">
                                            <li><span class="icon flaticon-arrows-6"></span>Address : 44 New Design Street,<br>Melbourne 005</li>
                                            <li><span class="icon flaticon-technology"></span>Phone : (01) 800 433 633</li>
                                        	<li><span class="icon flaticon-empty-email"></span>Email : info@Example.com</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            	<div class="footer-widget links-widget">
                                	<h2>usefull links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">About Company</a></li>
                                            <li><a href="#">Reservation</a></li>
                                            <li><a href="#">Help Center</a></li>
                                            <li><a href="#">Our Blog</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget posts-widget">
                                	<h2>Latest Blog Post</h2>
                                    <div class="widget-content">
                                    	<div class="posts">
                                            <div class="post">
                                                <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Peaceful Hostel</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                            <div class="post">
                                                <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Chicken Caesar</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                            <div class="post">
                                                <figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="blog-single.html" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                                <div class="desc-text"><a href="blog-single.html">Portobello Pizza</a></div>
                                                <div class="time">25th June 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget opening-widget">
                                	<h2>Opening Hours</h2>
                                    <div class="widget-content">
                                    	
                                    	<ul>
                                        	<li class="clearfix"><div class="day pull-left">Mon — Fri</div><span class="dots">................</span><div class="time pull-right">9:00 am - 23:00 pm</div></li>
                                            <li class="clearfix"><div class="day pull-left">Saturday</div><span class="dots">................</span><div class="time pull-right">10:00 am - 22:00 pm</div></li>
                                            <li class="clearfix"><div class="day pull-left">Sunday</div><span class="dots">................</span><div class="time pull-right">10:00 am - 21:00 pm</div></li>
                                            <li class="note">Note: Arctica Restaurant is closed on holidays.</li>
                                        </ul>
                                    
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                 </div>
             </div>
        
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">
         	<div class="auto-container">
            	<div class="copyright-text">Copyright &copy; 2016. All Rights Reserved </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<script src="<?= base_url() ?>js/jquery.js"></script> 
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/revolution.min.js"></script>
<script src="<?= base_url() ?>js/jquery.fancybox.pack.js"></script>
<script src="<?= base_url() ?>js/jquery.fancybox-media.js"></script>
<script src="<?= base_url() ?>js/owl.js"></script>
<script src="<?= base_url() ?>js/wow.js"></script>
<script src="<?= base_url() ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?= base_url() ?>js/script.js"></script>
</body>
</html>