<?php

session_start();

require '../dbconfig.php';
//require '../functions.php';
require 'User.php';
require 'Address.php';
require 'ProductRequest.php';


/* create a user object and update their profile */
$user = new User;

/* set the product request's attribute received from user's submitted form by post method  */

foreach ($_POST as $key => $value) {
 
    switch($key){

        case "firstName":
        $user->setfirstName($value);
        break;

        case "lastName":
        $user->setlastName($value);
        break;

        case "homePhone":
        $user->sethomePhone($value);
        break;

        case "cellPhone":
        $user->setcellPhone($value);
        break;

        default:

    }
}


$fuid = $_SESSION['FBID'];
$user->setfuId($fuid);

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


updateUserInfo($user);

/* Updating the basic profile information for the user*/
function updateUserInfo($userObj){
  
        // Add entries for the new user in the database.
    $fuId = $userObj->getfuId();
    $firstName = $userObj->getfirstName();
    $lastName = $userObj->getlastName();
    $homePhone = $userObj->gethomePhone();
    $cellPhone = $userObj->getcellPhone();


 //       var_dump($userObj);
/* just checking if the object is getting values properly.
    echo $fuId;
    echo "<br/>";

    echo $firstName;
    echo "<br/>";

    echo $lastName;
    echo "<br/>";

    echo $lastName;
    echo "<br/>";

    echo $homePhone;
    echo "<br/>";

    echo $cellPhone;
    echo "<br/>";

*/
    $updateInfo = "UPDATE user SET firstName= '$firstName', lastName= '$lastName', homePhone= '$homePhone', cellPhone= '$cellPhone' WHERE fuId = '$fuId'";
    mysql_query($updateInfo);
}

?>