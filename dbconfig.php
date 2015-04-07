<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');    // DB username
<<<<<<< HEAD
define('DB_PASSWORD', 'slayer123');    // DB password
=======
define('DB_PASSWORD', 'root');    // DB password
>>>>>>> 4daddf6f881242a0042c5c08abb1d3b46d1a0857
define('DB_DATABASE', 'merosaaman');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>
