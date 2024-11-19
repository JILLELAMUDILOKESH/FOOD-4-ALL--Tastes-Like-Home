<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Go Vegan</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
   

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
					<?php $username = $_GET['data']; echo '<a class="navbar-brand" href="index.php?data='.$username.'"><img src="../images/logos.png" class="logo" alt=""></a>'; ?>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <?php $username = $_GET['data']; echo '<li class="nav-item"><a class="nav-link" href="index.php?data='.$username.'">Home</a></li>'; ?>
						<?php $username = $_GET['data']; echo '<li class="nav-item"><a class="nav-link" href="about.php?data='.$username.'">About Us</a></li>'; ?>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
							<?php
								$username = $_GET['data'];
								echo '<li><a href="shop.php?data='.$username.'">Shop</a></li>';
								echo '<li><a href="checkout.php?data='.$username.'">Checkout</a></li>';
								echo '<li><a href="my-account.php?data='.$username.'">My Account</a></li>'; 
                            ?> 
                            </ul>
                        </li>
						<?php $username = $_GET['data']; echo '<li class="nav-item"><a class="nav-link" href="gallery.php?data='.$username.'">Gallery</a></li>'; ?>
						<?php $username = $_GET['data']; echo '<li class="nav-item"><a class="nav-link" href="contact-us.php?data='.$username.'">Contact Us</a></li>'; ?>
						<?php $username = $_GET['data']; echo '<li class="nav-item"><a class="nav-link" href="my-account.php?data='.$username.'">My Account</a></li>'; ?>
						<?php $username = $_GET['data']; include('connection.php');
						$sql = "select * from cart where userid='".$username."'";
						$result = mysqli_query($con, $sql);
						echo '<li class="nav-item"><a class="nav-link" href="cart.php?data='.$username.'"><p>My Cart </p><i class="fa fa-shopping-bag"></i><span class="badge">'.mysqli_num_rows($result).'</span></a></li>'; ?>
						<li class="nav-item"><a class="nav-link" href="../index.html">Log Out</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="../images/farmer.jpg" height="420" width="420" class="logo"  />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h0 class="noo-sh-title-top">We are <span>Go Vegan</span></h0>
                    <h1><b><p>"Govegan, founded by Gosevaks, aims to save cows & bring back vedic way of farm cultivation
                        practices. We saved 125+ cows so far and our main aim is to create permanent solution for this
                        problem. The only way to achieve this is to bring back our vedic way of farming where cows used
                        to be centric. We support only those farmers who purely do cow based farming. All farm lands are
                        under our direct supervision. We make sure no use of harmful inorganic pesticides/chemicals. We
                        support farmers by all means and make sure they right price for their profuce. GoVegan working
                        towards bringing all Natural Farmers under one roof for all their needs."</p></b></h1>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h1><b>We are Trusted</b></h1>
                        <p><b>At our vegan company,trust is the cornerstone of our mission.we've buikt a repuation for unwavering integrity and transparency.our customers and partners rely on us to provide authentic vegan products that allign with their values.with a commitment to quality and ethics,we've earned the trust of a growing community that knows they can count on us.</b></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h1><b>We are Professional</b></h1>
                        <p><b>Professionalism is at the heart of evrything we do.from our ddicatec team to our efficient operations,we take pride in delivering a top-tier experience.our professional approach ensures smooth transcations,timely responses,and a seamless collaboration with our valued stakeholder.when you choose our vegan company,you're choosing professionalism at its best.</b></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h1><b>We are Expert</b></h1>
                        <p><b>Our team of experts is passionate about all things vegan.we've invested years of research,development,and innovation to become leaders in the industry.whether it's creating delectable plant-based recipes or staying at the forefront of sustinable practices,our expertise shines through in everything we offer.when you partner with us,you're benefiting from  the knowledge and dedication of true vegan experts.</b></p>
					</div>
                </div>

            </div>
           
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

    
    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
			<?php
				include('connection.php');
				$sql = "select * from items";
				$result = mysqli_query($con, $sql);  
				if(mysqli_num_rows($result)>0)
				{  
					while($row = mysqli_fetch_assoc($result))
					{
						echo '<div class="item">';
							echo '<div class="ins-inner-box">';
								echo '<img src="../'.$row["item_location"].'" alt="" />';
								echo '<div class="hov-in">';
									echo '<a href="#"><i class="fab fa-instagram"></i></a>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				}
            ?>
        </div>
    </div>
    <!-- End Instagram Feed  -->



    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>EveryDay: 08.00am to 10.00pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Newsletter</h3>
                            <form class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="Email" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Connect with Us</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Go Vegan</h4>
                            <p>Govegan, founded by Gosevaks, aims to save cows & bring back vedic way of farm
                                cultivation practices. We saved 125+ cows so far and our main aim is to create permanent
                                solution for this problem. The only way to achieve this is to bring back our vedic way
                                of farming where cows used to be centric. We support only those farmers who purely do
                                cow based farming. All farm lands are under our direct supervision. We make sure no use
                                of harmful inorganic pesticides/chemicals. We support farmers by all means and make sure
                                they right price for their profuce. GoVegan working towards bringing all Natural Farmers
                                under one roof for all their needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ol>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i><a href="https://www.google.co.in/maps/place/SR+Gold/@17.5235665,78.3922604,16z/data=!4m10!1m2!2m1!1sFlat+no.+203,+sr+gold,+mithila+nagar,+pragathi+nagar,+hyderabad!3m6!1s0x3bcb8ffea108244d:0x8e4f72d70368ff07!8m2!3d17.5248011!4d78.401999!15sCj9GbGF0IG5vLiAyMDMsIHNyIGdvbGQsIG1pdGhpbGEgbmFnYXIsIHByYWdhdGhpIG5hZ2FyLCBoeWRlcmFiYWSSARJhcGFydG1lbnRfYnVpbGRpbmfgAQA!16s%2Fg%2F11scmkyh28?entry=ttu">Address: Flat no. 203,<br>sr gold, mithila
                                        nagar,<br> pragathi nagar, hyderabad 500090 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a
                                            href="tel:+91-6309138999">+91-6309138999</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a
                                            href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">Go Vegan</a> Design By :
            <a href="https://aiml-services.com/">AIML Services Pvt Ltd</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>