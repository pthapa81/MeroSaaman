<?php

session_start();

require '../dbconfig.php';
//require '../functions.php';
require 'User.php';
//require 'Address.php';
//require 'ProductRequest.php';


/* create a user object and update their profile */
$user = new User;

/* set the product request's attribute received from user's submitted form by post method  */

foreach ($_POST as $key => $value) {


        if ($key == "firstName")
            $user->setfirstName($value);
        else if($key == "lastName")
            $user->setlastName($value);
        else if($key == "address")
            $user->address = $value;
        else if($key == "email")
            $user->setFemail($value);
        else if($key == "cellPhone")
            $user->setcellPhone($value);
        else if($key == "homePhone")
            $user->sethomePhone($value);
        else
            echo "No Bueno";

}

var_dump($user);

$fuid = $_SESSION['FBID'];
$user->setfuId($fuid);

/*
echo $user->getfuId();
echo "<br/>";

echo $user->getfirstName();
echo "<br/>";

echo $user->getlastName();
echo "<br/>";

echo $user->gethomePhone();
echo "<br/>";

echo $user->getcellPhone();
echo "<br/>";

echo $user->getFemail();
echo "<br/>";
*/

updateUserInfo($user);

// Updating the basic profile information for the user
function updateUserInfo($userObj){
  
    //Add entries for the new user in the database.
    $fuId = $userObj->getfuId();
    $firstName = $userObj->getfirstName();
    $lastName = $userObj->getlastName();
    $homePhone = $userObj->gethomePhone();
    $cellPhone = $userObj->getcellPhone();
    $Femail = $userObj->getFemail();



    $updateInfo = "UPDATE user SET firstName= '$firstName', lastName= '$lastName', homePhone= '$homePhone', cellPhone= '$cellPhone', Femail= '$Femail' WHERE fuId = '$fuId'";
    mysql_query($updateInfo);
}

?>