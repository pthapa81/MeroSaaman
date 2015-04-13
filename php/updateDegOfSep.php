<?php

session_start();

require '../dbconfig.php';
//require '../functions.php';
//require 'User.php';
//require 'Address.php';
require 'ProductRequest.php';

$query = "select distinct fromUserFUId from degOfSep";

$result = mysql_query($query);


while($info =  mysql_fetch_assoc($result)){
	$fromUserFuId = $info['fromUserFUId'];
	echo $fromUserFuId . "</br>";
}

?>