<?php
session_start(); 
//require_once 'autoload.php';
//use Facebook\FacebookRequest;
?>

<!doctype html>
<html>

<head>

  <title>unquote</title>

  <meta name="viewport" 
  content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

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
      <core-item id="nav" label="Requested Item"></core-item>
      <core-item label="Delivery Info"></core-item>
    </core-menu>
  </core-header-panel>

  <core-header-panel main>

  

    <core-toolbar>
      <core-icon-button id="navicon" icon="menu">
      </core-icon-button>
      <div>Mero Saman</div>
    </core-toolbar>

    <core-tooltip label="Create a new form" position="right" id="h"> 
  
    <core-icon icon="add-circle" id="newform"></core-icon>
  </core-tooltip>

    <div class="content">

      
      <div class="p">
      content area
      
    </div>
    </div>

  </core-header-panel>
  
</core-drawer-panel>



  
</body>

</html> 