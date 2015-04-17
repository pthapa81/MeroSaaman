<?php
session_start(); 
//require_once 'autoload.php';
//use Facebook\FacebookRequest;
?>
<!Doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mero Saaman - Order from anywhere</title>


<!-- self put external files-->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-social-gh-pages/bootstrap-social.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

<!--bootstrapped externals-->
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-social-gh-pages/bootstrap-social.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
-->
  
</head>
<body id="page-top" class="index">
<?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
    <div class="container">
        <div class="hero-unit">
            <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
            <p>Welcome to "facebook login" tutorial</p>
        </div>
        <div class="span4">
            <ul class="nav nav-list">
                <li class="nav-header">Image</li>
                <li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
                <li class="nav-header">Facebook ID</li>
                <li><?php echo  $_SESSION['FBID']; ?></li>
                <li class="nav-header">Facebook fullname</li>
                <li><?php echo $_SESSION['FULLNAME']; ?></li>
                <li class="nav-header">Facebook Email</li>
                <li><?php echo $_SESSION['EMAIL']; ?></li>
                <div><a href="logout.php">Logout</a></div>
                
    </ul></div></div>

<?php else: ?>     <!-- Before login --> 
        
<!--
        <?php 
            require 'php/User.php';
            require 'php/Address.php';


            $buyer = new User;
            $buyer->setfirstName("Prashant");

            $carrier = new User;
            $carrier->setfirstName("Nischal");

            $carrier->address = new Address;

            $carrier->address->line1NumberBuilding = "111 Rhode Island Ave";
            $carrier->address->city = "Washington";


            echo $buyer->getfirstName();
            echo "<br/>";
            echo $carrier->getfirstName();
            echo "<br/>";
            $carrier->address->printValues();
            echo "<br/>";


         ?>

     -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Mero Saaman</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#recommended">Recommended Sites</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                    <li>
                        <a class="btn btn-block btn-social btn-facebook" href="fbconfig.php">
                        <i class="fa fa-facebook"><?php echo " ";?></i> Login or Sign Up
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<!-- hidden div-->
<div class="container-fluid" id="hide" style="display:none;">
    <div  class="row" align="center" style="position:absolute; top:6em; width:100%;">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" id="login_show" style="opacity:1.0; position:relative; z-index: 4; background-color:black; text-align=center; border:4em; padding:5em;">
            <br><br>
            <h1 style="color:white">You need to Sign-in to put this in your cart</h1>
            <br>
            <a class="btn btn-block btn-social btn-facebook" href="fbconfig.php">
                <i class="fa fa-facebook"><?php echo " ";?></i> Login or Sign Up
            </a>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>



<!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <form>
                    <input id="order" name="order" type="text" class="field text fn" placeholder="I want..." size="100" tabindex="1" style="height:2.9em; color:black;">
                    <button id="cart" type="submit" name="submit" style="height:3em;"><img src="http://www.macx.com/Images/AddtoCart.png"></button>
                </form>
                <div class="intro-lead-in" style="position:relative; top:3em;">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl" style="position:relative; top:7em;">Tell Me More</a>
            </div>
        </div>
    </header>
            
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">We get you your product in the cheapest way we can.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Buy Online</h4>
                    <p class="text-muted">Got anything that you would like to buy, any latest products, maybe a new iphone, a new laptop, a bag or a perfume. Look it up in any online shopping website and buy just like any US resident would. MeroSaaman can get that product you see online, just post the link to the product you want and get it delivered in the cheapest rate there is.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Send Home Love and Gifts</h4>
                    <p class="text-muted">Your forgot to bring your highschool certificate from your home country to states, or vice versa, and all of a sudden you need it. Or maybe it's Diwali and you cannot go back home but would love to send your mom a picture of you. MeroSaaman can get your stuff from one place to another. Just request for the item you want delivered, and we can get it for done for you.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Safe Money Exchange</h4>
                    <p class="text-muted">Exchange currency through a legitimate method without losing some amount during the exchange without any risk of fishing or trouble.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">How our service works.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 1:</h4>
                                    <h4 class="subheading">Tell us what do you want</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">If you want to get something that available online but not in your country and would love to get it, post the url of the item and make a request. If it's an item that you already have but just want it delivered, make a request, giving us details about what the item is.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 2:</h4>
                                    <h4 class="subheading">Make a deposit</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Pay upfront for the item that you want to buy online, or pay the service cost if it's just transporting your item. This is to ensure that we can trust that you won't say you don't need the product after we have purchased the product for you, or after the carrier has brought your requested item for you.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 3:</h4>
                                    <h4 class="subheading">Buyers - enjoy the moment; Carriers - Time for you to shine.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Buyers can then wait for their product to reach their country. Carriers will be matched with a product that they are comfortable with. Carriers will buy the product for the buyers.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 4:</h4>
                                    <h4 class="subheading">Fly and earn</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Bring along the product for the buyers as you travel to your destination. Deliver it to the nearest MeroSaaman headquarter. Get paid!!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


        <!-- Portfolio Grid Section -->
    <section id="recommended" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Recommended Sites</h2>
                    <h3 class="section-subheading text-muted">Get better deals with them.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://2zeobl3ojpj43evvq11p5yodq7e.wpengine.netdna-cdn.com/wp-content/uploads/amazon.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Amazon</h4>
                        <p class="text-muted">www.amazon.com</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://vector.me/files/images/8/1/81740/ebags.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ebags</h4>
                        <p class="text-muted">www.ebags.com</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="http://pulsarwallpapers.com/data/media/22/Think_Different_Apple_Logo.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Apple</h4>
                        <p class="text-muted">www.apple.com</p>
                    </div>
                </div>
            </div>
            <div align="right">
                <br>
                <a href="#">More recommended sites</a>
            </div>
        </div>
    </section>


<!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Any question?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div align="center" id="pra">
            <p><h2>Curious? Stay Posted with your email</h2></p>
                <form>
                    <input type="text">
                    <input type="submit" value="GO">
                </form>
        </div>
    </div>
        </div>
    </div>
    <div class="container text-center">
    <hr />
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#about">About us</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#recommended">Recommended Shops</a></li>
          <li><a href="#">The Team</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Forum</a></li>
          <li><a href="#">Presentations</a></li>          
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">FAQ</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>  
    </div>
  </div>
  <hr>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; 2015 MeroSaaman</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/sammanthp007"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/merosaaman"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/pub/prashant-thapa/58/208/977"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>   
    </body>

    <script>
        $(document).ready(function(){
        $("#cart").click(function(){
            console.log("hi");
            $("#hide").show();
        });
        $( document ).on( 'keydown', function ( e ) {
            if ( e.keyCode === 27 ) { // ESC
                $("#hide").hide();
            }
        });
    });
    </script>
            
    
<?php endif ?>
</body>
</html>
