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
  <link rel="import" href="elements.html" 

</head>


<body>
  
<core-drawer-panel id="drawerPanel">
  
  <core-header-panel drawer>

  <core-toolbar class="tall" style="background:url(https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture);">
  
  <font id="name">+<?php echo  $_SESSION['FULLNAME']; ?></font>
  </core-toolbar>

    <core-menu >
      <core-item id="request" label="Requested Item"></core-item>
      <core-item label="Delivery Info"></core-item>
    </core-menu>
  </core-header-panel>

  <core-header-panel main>

  

    <core-toolbar>
      <core-icon-button id="navicon" icon="menu">
      </core-icon-button>
      <div>Mero Saman</div>
    </core-toolbar>

    <div id="addform">

    

  <div id="newform">
    <core-tooltip label="Create a new request!" position="top">
    
    


  <core-tooltip tipAttribute="htmltooltip" position="right">
  
  <paper-fab icon="add"></paper-fab>
    </core-tooltip>
  
  </div>
</core-tooltip>

  </div>

</div>

    <div id="content">

      <div id="form">

        Request Form
        <br>
      
        <form is="ajax-form" action="/php/updateUserInfo.php" method="post">
          
      <paper-input-decorator floatingLabel label="Enter your first name*" type="text" name="firstName">
      <input id="input1" name="firstName" is="core-input" required>
      </paper-input-decorator>

      <paper-input-decorator floatingLabel label="Enter your last name*" type="text" name="lastName">
      <input id="input2" name="lastName" is="core-input" required>
      </paper-input-decorator>

        <paper-input-decorator floatingLabel label="Enter your address*" type="text" name="homePhone">
        <input id="input3" name="homePhone" is="core-input" required>
      </paper-input-decorator>


        <paper-input-decorator floatingLabel label="Enter your primary phone*" type="text" name="cellPhone">
        <input id="input4" name="cellPhone" is="core-input" pattern="^[0-9].*" required>
      </paper-input-decorator>


        <br><br>
        <paper-button raised recenteringTouch type="submit" ><button>Submit</button></paper-button>

        
        </form>

      
      
    </div>
  </div>

  <div id="content2">
    requested items
  </div>

  </core-header-panel>
  
</core-drawer-panel>



  
</body>

</html> 