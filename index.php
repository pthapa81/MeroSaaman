<?php
session_start(); 
//require_once 'autoload.php';
//use Facebook\FacebookRequest;
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <title>Login with Facebook</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-social-gh-pages/bootstrap-social.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
</head>
<body>
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
        <div class="container-fluid">
            <div class="row title_bar">
                <div class="col-md-3">
                    <h1 style="font-family: arial,sans-serif; text-align:right">Mero Saman</h1>
                </div>
                <div class="col-md-6">
                    <div align="center">
                    </div>
                </div>
                <div class="col-md-3" align="center">
                    <div align="right">
                    </br>
                        <a class="btn btn-block btn-social btn-facebook" href="fbconfig.php">
                        <i class="fa fa-facebook"></i> Login or Signup
                        </a>
                    </div>
                </div>
            </div>
            
           <div class="row" style="position:relative;">
                <div align="center" style="position:absolute; z-index:1; top:8em;">
                        <div style="padding:4em;width:7em; height:5em;">
                            <p class="ino" style="font-size:9em; color: rgb(255,255,255)">
                                Innovating International Shipping
                            </p>
                        </div>
                </div>
                <div align="center">
                    <img src="images/logistics-travel-consulting.jpg" width=100% height=80%>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12" id="bg-black" >
                    <h3><p align="center">How it Works</p></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                    <div align="center">
                        <h3>Request</h3>
                        <p> Send us the specifics about your item and how much you'd like to pay in commission (Here's the form)</p>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                    <div align="center">
                        <h3>Connect</h3>
                        <p>We'll connect you with Saman carrier headed your way who can deliver it</p>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                    <div align="center">
                        <h3>Confirm</h3>
                        <p>You and your Envoy will confirm the details and meeting point for delivery.</p>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div align="center">
                        <pre><h3><b>Get It</b></h3>
Rest assured, we'll hold the payment in escrow until you've received your item.
                    </pre>
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="col-md-12" >
                    <div align="center">
                        <pre style="background-color:rgb(255,255,255);">
            <h2>Mero Saman</h2>

Mero Saaman is all about you. Mero saaman exists because you exist. It is an 

sole effort to connect people for a good reason. We explore. We reach.We connect.
</pre>
                    </div>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-md-12">
                    <div align="center">
                        <pre>
<h2>Mero Saman</h2>

We believe in people, places, and possibilities. In pursuing endeavours that excite you, regardless of borders.

This is for the world explorers, lifestyle architects, convention hackers. Get what you need, keep living your way.
</pre>
                    </div>
                </div>
            </div>
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
          <li><a href="#">About us</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Recommended Shops</a></li>
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
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>  
    </div>
  </div>
  <hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"> ©2015 MeroSaaman.</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </div>
</div>
        <script>    
        </script>       
    </body>
            
    
<?php endif ?>
</body>
</html>
