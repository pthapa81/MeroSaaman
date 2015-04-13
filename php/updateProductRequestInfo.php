<?php

session_start();

require '../dbconfig.php';
//require '../functions.php';
require 'User.php';
require 'Address.php';
require 'ProductRequest.php';

/* create a user object and update their profile */
$productRequest = new ProductRequest;

foreach ($_POST as $key => $value) {

    switch($key){

        case "productLink":
        $productRequest->setproductLink($value);
        break;

        case "requestDate":
        $productRequest->setrequestDate($value);
        break;

        case "desiredSpeedScore":
        $speedScore = $value;
        break;

        case "desiredQualityScore":
        $qualityScore = $value;
        break;

        case "desiredTrustScore":
        $trustScore = $value
        break;

        default:

    }
}

$productRequest->setWeightValues($speedScore, $qualityScore, $trustScore);
$fuid = $_SESSION['FBID'];


updateProductReuqestInfo($productRequest, $fuid);

/* Updating the basic profile information for the user*/
function updateProductReuqestInfo($pReqObj, $fuid){

        // Add entries for the new user in the database.
    
    $buyerId = mysql_query("SELECT userId FROM user WHERE fuId ='$fuid'");
    $carrierId = -1;
    $productLink = $pReqObj->getproductLink();
    $requestDate = $pReqObj->getrequestDate();
    $desiredSpeedScore = $pReqObj->getdesiredSpeedScore();
    $desiredQualityScore = $pReqObj->getdesiredQualityScore();
    $desiredTrustScore = $pReqObj->getdesiredTrustScore();
    


    $updateProductRequestInfo = "INSERT INTO productRequest (buyerId, carrierId, productLink, requestDate, desiredSpeedScore, desiredQualityScore, desiredTrustScore) 
                   VALUES($buyerId, $carrierId, $productLink, $requestDate, $desiredSpeedScore, $desiredQualityScore, $desiredTrustScore)";

    mysql_query($updateProductRequestInfo);
}

?>