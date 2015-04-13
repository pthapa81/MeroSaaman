<?php

session_start();

require '../dbconfig.php';
//require '../functions.php';
//require 'User.php';
//require 'Address.php';
require 'ProductRequest.php';

/* create a user object and update their profile */
$productRequest = new ProductRequest;

foreach ($_POST as $key => $value) {

        if ($key == "productLink")
            $productRequest->setproductLink($value);
        else if($key == "requestDate")
            $productRequest->setrequestDate($value);
        else if($key == "desiredSpeedScore")
            $speedScore = $value;
        else if($key == "desiredQualityScore")
            $qualityScore = $value;
        else if($key == "desiredTrustScore")
            $trustScore = $value;
        else
            echo "No Bueno";
}

$productRequest->setWeightValues($speedScore, $qualityScore, $trustScore);
$fuid = $_SESSION['FBID'];
echo $fuid . "</br>";

var_dump($productRequest);

updateProductReuqestInfo($productRequest, $fuid);

// Updating the basic profile information for the user
function updateProductReuqestInfo($pReqObj, $fuid){

        // Add entries for the new user in the database.
    
    $result = mysql_query("SELECT idUser FROM user WHERE fuId =$fuid");
    $row = mysql_fetch_assoc($result);
    $buyerId = $row['idUser'];
    $productLink = $pReqObj->getproductLink();
    $requestDate = $pReqObj->getrequestDate();
    $desiredSpeedScore = $pReqObj->getdesiredSpeedScore();
    $desiredQualityScore = $pReqObj->getdesiredQualityScore();
    $desiredTrustScore = $pReqObj->getdesiredTrustScore();
    
    echo $fuid . "</br>";
    echo $buyerId . "</br>";
    echo $carrierId . "</br>";
    echo $productLink . "</br>";
    echo $requestDate . "</br>";
    echo $desiredTrustScore . "</br>";



    $check = mysql_query("select * from productRequest where buyerId='$buyerId' and productLink = '$productLink'");
    $check = mysql_num_rows($check);
    if (empty($check)) {
        // Add entries for the new user in the database.
        $query_productRequest = "INSERT INTO productRequest (
                                    buyerId,productLink,requestDate,desiredTrustScore, 
                                    desiredQualityScore, desiredSpeedScore) 
                                VALUES (
                                    '$buyerId', '$productLink','$requestDate','$desiredTrustScore',
                                       '$desiredQualityScore', '$desiredSpeedScore')";
        mysql_query($query_productRequest);

                                                // The message
        $message = "Hey Your new Order was received by us!\nWe are working on it!\nWe will notify you once we find a best carrier match for you!\n";

        // In case any of our lines are larger than 70 characters, we should use wordwrap()
        $message = wordwrap($message, 70);

        // Send
        mail('pthapa81@gmail.com', 'My Subject', $message);


    }
    else{
            $updateInfo = "UPDATE productRequest 
                           SET 
                           requestDate = '$requestDate',
                           productLink= '$productLink', 
                           desiredQualityScore= '$desiredQualityScore', 
                           desiredTrustScore = '$desiredTrustScore',
                           desiredSpeedScore = '$desiredSpeedScore' WHERE buyerId='$buyerId'" ;
            mysql_query($updateInfo);
    }

   
}
?>