<?php
session_start(); 
//require_once 'autoload.php';
//use Facebook\FacebookRequest;
function __autoload($class_name) {
    include $class_name . '.php';
}
?>

<!doctype html>
<html>

<head>

  <title>MeroSaaman</title>

  <meta name="viewport" 
  content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="bower_components/webcomponentsjs/webcomponents.js">
  </script>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script type="text/javascript" src="app.js"></script>
  <link rel="import" href="elements.html"> 

</head>


<body>
  
<core-drawer-panel id="drawerPanel">
  
  <core-header-panel drawer>

  <core-toolbar class="tall" style="background:url(https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture);">
  
  <font id="name">+<?php echo  $_SESSION['FULLNAME']; ?></font>
  </core-toolbar>

 <core-menu>
      <paper-item id="myprofile" label="My Profile">My Profile</paper-item>
      <paper-item id="request" label="Requested Item">Requested Items</paper-item>
      <paper-item id="delivery" label="Delivery Info">Delivery Info</paper-item>
      <paper-item id="myprofile" label="Log Out"><a href="/logout.php">Log Out</a></paper-item>

  </core-menu>
  </core-header-panel>

  <core-header-panel main>

  

    <core-toolbar>
      <core-icon-button id="navicon" icon="menu">
      </core-icon-button>
      <div>Mero Saman</div>
    </core-toolbar>

    <div id="addform">

    
<div id="submitbuttons">

  <div id="newform">
    <core-tooltip label="Create a new request!" position="left">
    <core-tooltip tipAttribute="htmltooltip" position="right">
    <paper-fab icon="send" style="background-color:#BA0612;"></paper-fab>
    </core-tooltip>
  </div>

  <div id="newdelivery">
    <core-tooltip label="Create a new delivery info!" position="left">
    <core-tooltip tipAttribute="htmltooltip" position="right">
    <paper-fab icon="wallet-travel" style="background-color:green;"></paper-fab>
    </core-tooltip>
  </div>

  </div>
</div>
</core-tooltip>

  </div>

</div>

    <div id="content">

      Item Request 


<form is="ajax-form" action="../php/updateProductRequestInfo.php" method="post">

      <paper-input-decorator floatingLabel label="Enter product link*" type="url" required >
      <input id="input1" name="productLink" is="core-input" required pattern="https?://.+">
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Enter date (dd/mm/yyyy)*" type="text" >
      <input id="input1" name="requestDate" is="core-input" required pattern="\d{1,2}/\d{1,2}/\d{4}">
      </paper-input-decorator>
      <br></br></br>
      <pre> 

        These are your priority Level for each of the metrics.

      </pre>
      Preferred Speed Score:    <input type="range" name="desiredSpeedScore" min="1" max="5" label="quality">[1-5]<br><br>

      Preferred Quality Score:<input type="range" name="desiredQualityScore" min="1" max="5" label="quality">[1-5]<br><br>
      Preferred Trust Score:<input type="range" name="desiredTrustScore" min="1" max="5" label="quality">[1-5]

       
         <br><br>


        <paper-button raised recenteringTouch type="submit" ><button id="formsubmission">Submit</button></paper-button>

</form>
     




  </div>

  <div id="content2">
    requested items
  </div>

  <div id="content3">
    delivery info
  </div>
  <div id="content4">
    <div id="editprofile">
      Edit my profile
    <core-icon icon="create" style="color:#073763;"></core-icon>
    </div>  
    My Profile

    <form is="ajax-form" action="../php/updateUserInfo.php" method="post">
          
      <paper-input-decorator floatingLabel label="Enter your first name*" type="text" >
      <input id="input1" name="firstName" is="core-input" required>
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Enter your last name*" type="text" >
      <input id="input2" name="lastName" is="core-input" required>
      </paper-input-decorator>

        <paper-input-decorator floatingLabel label="Enter your address*" type="text">
        <input id="input3" name="address" is="core-input" required>
      </paper-input-decorator>


      <paper-input-decorator floatingLabel label="Enter your email address*" type="text">
        <input id="input4" name="email" is="core-input" required>
      </paper-input-decorator>


        <paper-input-decorator floatingLabel label="Enter your primary phone*" type="text" >
        <input id="input5" name="cellPhone" is="core-input" pattern="^[0-9]+$" required>
        </paper-input-decorator>

        <paper-input-decorator floatingLabel label="Enter your cellphone*" type="text">
        <input id="input6" name="homePhone" is="core-input" pattern="^[0-9]+$" required>
        </paper-input-decorator>



        <br><br>


        <paper-button raised recenteringTouch type="submit" ><button id="formsubmission">Submit</button></paper-button>

        
      

        </form>

  </div>

  <div id="content5">
   
    Travel Information as a Carrier

<form is="ajax-form" action="../php/updateCarrier.php" method="post">

      <paper-input-decorator floatingLabel label="Enter Departure Date(dd/mm/yyyy)*" type="text">
      <input id="input1" name="departureDate" is="core-input" required pattern="\d{1,2}/\d{1,2}/\d{4}">
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Enter Arrival Date (dd/mm/yyyy)*" type="text" >
      <input id="input2" name="arrivalDate" is="core-input" required pattern="\d{1,2}/\d{1,2}/\d{4}">
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Enter Arrival City *" type="text" >
      <input id="input3" name="arrivalCity" is="core-input" required >
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Enter Departure City *" type="text" >
      <input id="input4" name="departureCity" is="core-input" required >
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Flight No *" type="text" >
      <input id="input5" name="flightNo" is="core-input" > <!---required pattern = "/^([a-z][a-z]|[a-z][0-9]|[0-9][a-z])[a-z]?[0-9]{1,4}[a-z]?$/i" -->
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Stay Duration *" type="text" >
      <input id="input6" name="stayDuration" is="core-input" required pattern = "^[0-9]+$">
      </paper-input-decorator>


      <br>



        <paper-button raised recenteringTouch type="submit" ><button id="formsubmission">Submit</button></paper-button>

</form>
     
  </div>



  </core-header-panel>
  
</core-drawer-panel>



  
</body>

</html> 