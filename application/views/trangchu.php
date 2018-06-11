<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Artica - Restaurant HTML Template | Homepage One</title>
<!-- Stylesheets -->
<link href="<?= base_url() ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?= base_url() ?>/css/revolution-slider.css" rel="stylesheet">
<link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href="<?= base_url() ?>/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
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
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Artica"></a></div>
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
                                    <li class="current dropdown"><a href="#">Home</a>
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
                                    <li><a href="Home/reservation">Reservation</a></li>
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
                                            <li><a href="<?= base_url() ?>Home/blog">Blog</a></li>
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
                    <li class="current dropdown"><a href="#">Home</a>
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
                    <li><a href="reservation.html">Reservation</a></li>
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
    
    <!--Main Slider-->
    <section class="main-slider" data-start-height="900" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	<?php $mangdl = json_decode($mangdl,true);?>
                    <?php foreach ($mangdl as $value): ?>
              
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="<?= $value['slide_image'] ?>" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2><?= $value['title'] ?></h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"  
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text"> <?= $value['description'] ?></div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="<?= $value['button_link'] ?>" class="theme-btn btn-style-one"><?= $value['button_text'] ?></a></div>
                    
                    </li>
                    <?php endforeach ?>
                    <!-- 
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/icon-1.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>The Delicous Food Tasts</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.Sed<br>ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Buy Now</a></div>
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="left" data-hoffset="30"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/icon-2.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="30"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>The Fresh And Tasty Burgers</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="30"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-left">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque <br>aperiam.Sed ut perspiciatis unde omnis iste natus error sit </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="30"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Buy Now</a></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="right" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/content-image.png" alt=""></figure></div>
                    
                    </li> -->
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--Restaurant Section-->
    <section class="restaurant">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                        	<h2>Great New Dishes </h2>
                            <h3>Discover Our Restaurant</h3>
                        </div>
                        <!--Content-->
                        <div class="content">
                            <div class="text">
                                <p>A cappuccino is an Italian coffee drink which is traditionally prepared with espresso, hot milk and steamed milk foam. Coffee makes up a very important part of the Italian gastronomic culture. Cream may be used instead of milk and is often topped with cinnamon.</p>
                                <p>It is typically smaller in volume than a caffe latte, with a thicker layer of micro foam. in this context referring to the color of the beverage when milk</p>
                            </div>
                            <a href="#" class="read-more theme-btn btn-style-one">Read More</a>
                        </div>
                        
                    </div>
                </div>
                
                <!--Corousel Column-->
                <div class="corousel-column col-md-6 col-sm-6 col-xs-12">
                	<div class="carousel-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<!--Single Item Carousel-->
                    	<div class="single-item-carousel">
                        	<div class="slide">
                            	<img src="images/resource/slide-1.jpg" alt="" />
                            </div>
                            <div class="slide">
                            	<img src="images/resource/slide-1.jpg" alt="" />
                            </div>
                            <div class="slide">
                            	<img src="images/resource/slide-1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Restaurant Section-->
    
    <!--Parallax Image Section-->
    <section class="parallax-image-section" style="background-image:url(images/background/1.jpg);">
    	<div class="auto-container">
        	<h2>Healthy Fresh And Hot Dishes.</h2>
            <h4>Best offers from the house chef.</h4>
        </div>
    </section>
    <!--End Parallax Image Section-->
    
    <!--Services Section-->
    <section class="services-section">
    	
        <div class="auto-container">
        	<!--sec title one-->
            <div class="sec-title-one">
                <h2>Our Services</h2>
                <h4>We Create Delicous Memory</h4>
            </div>
        	
        	<div class="row clearfix">
            	<!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                        	<img src="images/resource/services-1.png" alt="" />
                        </div>
                        <h3><a href="blog-single.html">Pan Pizza</a></h3>
                        <div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                        	<img src="images/resource/services-2.png" alt="" />
                        </div>
                        <h3><a href="blog-single.html">Burger</a></h3>
                        <div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                        	<img src="images/resource/services-3.png" alt="" />
                        </div>
                        <h3><a href="blog-single.html">Fish</a></h3>
                        <div class="text">Vivamus sed fermentum tellus. Donec quis elit sapien. Aliquam commodo tortor nisi, nec varius mi finibus at.  ut ullamcorper volutpat lectusu</div>
                        <a class="read-more" href="blog-single.html">Read More</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Services Section-->
    
    <!--Delicous Menu Section-->
    <section class="delicous-section" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<!--Delicous Inner-->
        	<div class="delicous-inner">
            	<div class="row clearfix">
                
                	<!--Food Carousel Column-->
                	<div class="food-carousel-column col-md-5 col-sm-12 col-xs-12">
                    	<div class="inner-box">
                        	<h2>Our <br><span>Delicous</span> Menu</h2>
                            <div class="text">Best offers from the house chef</div>
                        
                            <!--Single Item Carousel-->
                            <div class="single-item-carousel">
                                <div class="slide"><img src="images/resource/chicken.png" alt="" /></div>
                                <div class="slide"><img src="images/resource/chicken.png" alt="" /></div>
                                <div class="slide"><img src="images/resource/chicken.png" alt="" /></div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Food Column-->
                    <div class="food-column col-md-7 col-sm-12 col-xs-12">
                    	<div class="inner">
                        	<h3>Our Best Chicken Recipes</h3>
                            
                            <!--Food Item-->
                            <div class="food-item">
                        		<div class="inner-box">
                                    <!--Image Box-->
                                    <div class="image-box">
                                    	<div class="new">New</div>
                                        <a href="menu-style-one.html"><img src="images/resource/dining-item-1.jpg" alt=""></a>
                                    </div>
                                    <ul>
                                        <li class="clearfix"><span class="title-box"><a href="menu-style-one.html">Gosh Egg-White Omelet</a></span> <span class="dots">...................................</span> <span class="price">$35.40</span></li>
                                        <li class="text">Mussel with tomato sauce, wine</li>
                                    </ul>
                                </div>
                        	</div>
                            
                            <!--Food Item-->
                            <div class="food-item">
                        		<div class="inner-box">
                                    <!--Image Box-->
                                    <div class="image-box">
                                        <a href="menu-style-one.html"><img src="images/resource/dining-item-2.jpg" alt=""></a>
                                    </div>
                                    <ul>
                                        <li class="clearfix"><span class="title-box"><a href="menu-style-one.html">Powered Turkey Meatballs</a></span> <span class="dots">...................................</span> <span class="price">$50.00</span></li>
                                        <li class="text">Shrimp, fresh garlic, olive oil</li>
                                    </ul>
                                </div>
                        	</div>
                            
                            <!--Food Item-->
                            <div class="food-item">
                        		<div class="inner-box">
                                    <!--Image Box-->
                                    <div class="image-box">
                                        <a href="menu-style-one.html"><img src="images/resource/dining-item-3.jpg" alt=""></a>
                                    </div>
                                    <ul>
                                        <li class="clearfix"><span class="title-box"><a href="menu-style-one.html">Creamy Feta Salad Dressing</a></span> <span class="dots">...................................</span> <span class="price">$85.20</span></li>
                                        <li class="text">Mussel with tomato sauce, wine</li>
                                    </ul>
                                </div>
                        	</div>
                            
                            <!--Food Item-->
                            <div class="food-item">
                        		<div class="inner-box">
                                    <!--Image Box-->
                                    <div class="image-box">
                                        <a href="menu-style-one.html"><img src="images/resource/dining-item-4.jpg" alt=""></a>
                                    </div>
                                    <ul>
                                        <li class="clearfix"><span class="title-box"><a href="menu-style-one.html">Roasted Red Pepper Hummus</a></span> <span class="dots">...................................</span> <span class="price">$50.20</span></li>
                                        <li class="text">Black beans, pork tenderloin</li>
                                    </ul>
                                </div>
                        	</div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Delicous Menu Section-->
    
    <!--Special Dishes Section-->
    <section class="special-section">
    	<div class="auto-container">
        	<!--sec title one-->
            <div class="sec-title-one">
                <h2>Our Special Dishes.</h2>
                <h4>We Create Delicous Memory</h4>
            </div>
        
        	<div class="row clearfix">
            	<!--Opening Column-->
            	<div class="opening-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="title-box">Opening Hours</div>
                        <ul>
                        	<li>Monday — Friday<br>9:00 am - 23:00 pm</li>
                            <li>Saturday<br>10:00 am - 22:00 pm</li>
                            <li>Sunday<br>10:00 am - 21:00 pm</li>
                            <li>Note: Arctica Restaurant is closed on holidays.</li>
                            <li class="number">0844.335.1211</li>
                        </ul>
                    </div>
                </div>
                
                <!--Dishes Column-->
                <div class="dishes-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    
                    	<!--Special Dish-->
                    	<div class="special-dish">
                        	<div class="inner-content">
                                <div class="row clearfix">
                                
                                    <!--Image Column-->
                                    <div class="image-column col-md-4 col-sm-4 col-xs-12 pull-right">
                                        <div class="inner">
                                            <figure class="image-box">
                                                <img src="images/resource/special-1.jpg" alt="" />
                                                <!--Overlay Box-->
                                                <div class="overlay-box">
                                                    <div class="price">$50.35</div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                
                                    <!--Content Column-->
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12 pull-left">
                                        <h3>Honey Strawberry</h3>
                                        <div class="text">Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor nequeu tellus rhoncus ut eleifend nibh porttitor ut in nulla enim hasellus mirolestie magna non lorem ipsum dolor site amet.</div>
                                        <a class="read-more theme-btn" href="blog-single.html">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--Special Dish-->
                    	<div class="special-dish">
                        	<div class="inner-content">
                                <div class="row clearfix">
                                
                                    <!--Image Column-->
                                    <div class="image-column col-md-4 col-sm-4 col-xs-12 pull-left">
                                        <div class="inner">
                                            <figure class="image-box">
                                                <img src="images/resource/special-2.jpg" alt="" />
                                                <!--Overlay Box-->
                                                <div class="overlay-box">
                                                    <div class="price">$50.35</div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                
                                    <!--Content Column-->
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12 pull-right">
                                        <h3>Scrambled Eggs in Puff Pastry</h3>
                                        <div class="text">Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor nequeu tellus rhoncus ut eleifend nibh porttitor ut in nulla enim hasellus mirolestie magna non lorem ipsum dolor site amet.</div>
                                        <a class="read-more theme-btn" href="blog-single.html">Read More</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Special Dishes Section-->
    
    <!--Gallery Carousel-->
    <section class="gallery-carousel">
    	<div class="three-item-corousel">
        	<!--Gallery Item-->
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="blog-single.html">
                        <div class="image-box">
                            <img src="images/gallery/1.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="blog-single.html">
                        <div class="image-box">
                            <img src="images/gallery/2.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="blog-single.html">
                        <div class="image-box">
                            <img src="images/gallery/3.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="blog-single.html">
                        <div class="image-box">
                            <img src="images/gallery/1.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="blog-single.html">
                        <div class="image-box">
                            <img src="images/gallery/2.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="blog-single.html">
                        <div class="image-box">
                            <img src="images/gallery/3.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Gallery Carousel-->
    
    <!--chefs Team-->
    <section class="chefs-section">
        <div class="auto-container">
        	<div class="sec-title-one">
            	<h2>Our Delicious</h2>
                <h4>Meet Our Passionate Chefs</h4>
            </div>
            <div class="row clearfix">
            	<div class="three-item-corousel">
                    <!--Chef Member-->
                    <div class="chef-member">
                        <div class="inner-box">
                            <!--Image Box-->
                            <div class="image-box">
                                <!--Image-->
                                <figure class="image">
                                    <img src="images/resource/chef-1.jpg" alt="" />
                                </figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="inner">
                                        <!--Social Icon One-->
                                        <ul class="social-icon-one">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-vimeo-square" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Lower Content-->
                            <div class="lower-content">
                                <h3>Rick Grimes</h3>
                                <div class="designation">Cheef Cook</div>
                            </div>
                        </div>
                    </div>
                
                	<!--Chef Member-->
                    <div class="chef-member">
                        <div class="inner-box">
                            <!--Image Box-->
                            <div class="image-box">
                                <!--Image-->
                                <figure class="image">
                                    <img src="images/resource/chef-2.jpg" alt="" />
                                </figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="inner">
                                        <!--Social Icon One-->
                                        <ul class="social-icon-one">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-vimeo-square" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Lower Content-->
                            <div class="lower-content">
                                <h3>ELena Gilbert</h3>
                                <div class="designation">Master Chef & Founder</div>
                            </div>
                        </div>
                    </div>
                
                	<!--Chef Member-->
                    <div class="chef-member">
                        <div class="inner-box">
                            <!--Image Box-->
                            <div class="image-box">
                                <!--Image-->
                                <figure class="image">
                                    <img src="images/resource/chef-3.jpg" alt="" />
                                </figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="inner">
                                        <!--Social Icon One-->
                                        <ul class="social-icon-one">
                                            <li><a class="fa fa-facebook" href="#"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-instagram" href="#"></a></li>
                                            <li><a class="fa fa-vimeo-square" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Lower Content-->
                            <div class="lower-content">
                                <h3>Rick Grimes</h3>
                                <div class="designation">Cheef Cook</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End chefs Team-->
    
    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url(images/background/3.jpg);">
    	<div class="auto-container">
        	<div class="single-item-carousel">
            
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><span class="flaticon-left-quote"></span></div>
                        <div class="text">“ We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”</div>
                        <h3><span>-</span> Stevan Smith,</h3>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><span class="flaticon-left-quote"></span></div>
                        <div class="text">“ We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”</div>
                        <h3><span>-</span> Stevan Smith,</h3>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><span class="flaticon-left-quote"></span></div>
                        <div class="text">“ We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”</div>
                        <h3><span>-</span> Stevan Smith,</h3>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->
    
    <!--News Blog Section-->
    <section class="news-section">
    	<div class="auto-container">
        	<div class="sec-title-one">
            	<h2>Our Blog</h2>
                <h4>Latest New Updates</h4>
            </div>
            
            <div class="row clearfix">
            	<!--News Block-->
            	<div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<figure class="image-box">
                        	<a href="blog-single.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Ingredients For Cooking Pasta</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                            	<div class="read-more pull-left"><a href="blog-single.html">Read More</a></div>
                                <div class="likes pull-right"><a href="blog-single.html"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                    	<figure class="image-box">
                        	<a href="blog-single.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">The Best Tips For Tasty Food</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                            	<div class="read-more pull-left"><a href="blog-single.html">Read More</a></div>
                                <div class="likes pull-right"><a href="blog-single.html"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                    	<figure class="image-box">
                        	<a href="blog-single.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                        </figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Your Weeknight Dinner Plan</a></h3>
                            <div class="meta">10 June 2016  by <span>Peter Parker</span></div>
                            <div class="text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </div>
                            <div class="lower-box clearfix">
                            	<div class="read-more pull-left"><a href="blog-single.html">Read More</a></div>
                                <div class="likes pull-right"><a href="blog-single.html"><span>10</span> Likes</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End News Blog Section-->
    
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
                        	<div class="footer-column col-md-7 col-sm-7 col-xs-12">
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
                        	<div class="footer-column col-md-5 col-sm-5 col-xs-12">
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

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>