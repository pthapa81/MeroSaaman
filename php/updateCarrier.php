<?php

session_start();

require '../dbconfig.php';
//require '../functions.php';
//require 'User.php';
//require 'Address.php';
require 'Carrier.php';

/* create a user object and update their profile */
$carrier= new Carrier;

foreach ($_POST as $key => $value) {

        if ($key == "departureDate")
            $carrier->setdepartureDate($value);
        else if($key == "arrivalDate")
            $carrier->setarrivalDate($value);
        else if($key == "departureCity")
            $carrier->setdepartureCity($value);
        else if($key == "arrivalCity")
            $carrier->setarrivalCity($value);
        else if($key == "flightNo")
            $carrier->setflightNo($value);
        else if($key == "stayDuration")
            $carrier->setstayDuration($value);
        else
            echo "No Bueno";
}

$fuid = $_SESSION['FBID'];


	$departureDate = $carrier->getdepartureDate();
    $arrivalDate = $carrier->getarrivalDate();
    $departureCity = $carrier->getdepartureCity();
    $arrivalCity = $carrier->getarrivalCity();
    $flightNo = $carrier->getflightNo();
    $stayDuration = $carrier->getstayDuration();
    
    echo $fuid . "</br>";
    echo $carrierId . "</br>";
    echo $departureDate . "</br>";
    echo $arrivalDate . "</br>";
    echo $departureCity . "</br>";
    echo $arrivalCity . "</br>";
    echo $flightNo . "</br>";
    echo $stayDuration . "</br>";
//echo $fuid . "</br>";

//var_dump($productRequest);

updateCarrierInfo($carrier, $fuid);

// Updating the basic profile information for the user
function updateCarrierInfo($carrierObj, $fuid){

        // Add entries for the new user in the database.
    
    $result = mysql_query("SELECT idUser FROM user WHERE fuId =$fuid");
    $row = mysql_fetch_assoc($result);
    $carrierId = $row['idUser'];
    $departureDate = $carrierObj->getdepartureDate();
    $arrivalDate = $carrierObj->getarrivalDate();
    $departureCity = $carrierObj->getdepartureCity();
    $arrivalCity = $carrierObj->getarrivalCity();
    $flightNo = $carrierObj->getflightNo();
    $stayDuration = $carrierObj->getstayDuration();
    
    echo $fuid . "</br>";
    echo $carrierId . "</br>";
    echo $departureDate . "</br>";
    echo $arrivalDate . "</br>";
    echo $departureCity . "</br>";
    echo $arrivalCity . "</br>";
    echo $flightNo . "</br>";
    echo $stayDuration . "</br>";


    $time_d = strtotime($departureDate);
    $time_a = strtotime($arrivalDate);

	$newdepartureDate = date('Y-m-d',$time_d);
	$newarrivalDate = date('Y-m-d', $time_a);

    $check = mysql_query("select * from carrier where carrierId='$carrierId' and departureDate = '$newdepartureDate'");
    $check = mysql_num_rows($check);

    if (empty($check)) {
        // Add entries for the new user in the database.
        $query_carrier = "INSERT INTO carrier (
                                    departureDate,arrivalDate,departureCity,arrivalCity, 
                                    flightNo, stayDuration, carrierId) 
                                VALUES (
                                    '$newdepartureDate', '$newarrivalDate','$departureCity','$arrivalCity',
                                       '$flightNo', '$stayDuration', '$carrierId')";
        mysql_query($query_carrier);
    }
    else{
    
            $updateInfo = "UPDATE carrier 
                           SET 
                           departureDate = '$newdepartureDate',
                           arrivalDate= '$newarrivalDate', 
                           departureCity= '$departureCity', 
                           arrivalCity = '$arrivalCity',
                           flightNo = '$flightNo',
                           stayDuration = '$stayDuration'
                            WHERE carrierId='$carrierId' and departureDate = '$newdepartureDate'" ;
            mysql_query($updateInfo);
      
    }

  
}


?>