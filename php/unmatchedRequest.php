<?php

session_start();

require '../dbconfig.php';

$query = "select * from productRequest";

$result = mysql_query($query);

while($info =  mysql_fetch_assoc($result)){

	
	$buyerId = $info['buyerId'] . "</br>";
	$carrierId = $info['carrierId'] . "</br>";
	$productLink = $info['productLink'] . "</br>";
	$requestDate = $info['requestDate'] . "</br>";
    $desiredSpeedScore = $info['desiredSpeedScore'] . "</br>";
    $i = 1;
    echo $i . "</br>";
 
}
?>

<!doctype html>
<html>
	<head>
		<title>Merosaaman</title>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			   $("button").click(function(){
			        $("p").hide(1000);
			    });
			});
		</script>

	</head>

	<body>
		<div>
			<p id="fuid"> <?php echo $productLink ." " .$i++ ."</br>"?></p>
			<p id="buyerId"> <?php echo $buyerId . " " . $i++ ."</br>"?></p>
			<p id="carrierId"> <?php echo $carrierId . " " . $i++ ."</br>"?></p>

			<button>Hide</button>

		</div>

	</body>

</html>