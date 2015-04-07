<?php
require 'dbconfig.php';
//require './php/User.php';
//require './php/Address.php';

session_start();

function checkuser($fuid,$ffname,$femail,$friends_list){
    $check = mysql_query("select * from user where fuId='$fuid'");
    $check = mysql_num_rows($check);
    if (empty($check)) {
        // Add entries for the new user in the database.
        $query_user = "INSERT INTO user (fuId,firstName,Femail) VALUES ('$fuid','$ffname','$femail')";
        mysql_query($query_user);
        foreach( $friends_list as $value){
            $query_degOfSep = "INSERT INTO degOfSep (fromUserFUId, toUserFUId, separationDeg) VALUES('$fuid', '$value', '1'),('$value','$fuid', '1')";
            mysql_query($query_degOfSep); 
            //$query_degOfSep1 = "INSERT INTO degOfSep stoUserFUId, fromUserFUId, separationDeg) VALUES ('5', '6', '1')";
        }
    } else {
        // The user is already in the database.
    }

}

/*
function updateUserInfo($userObj){
      
        // Add entries for the new user in the database.
        $fuId = $userObj->getfuId();
        $firstName = $userObj->getfirstName();
        $lastName = $userObj->getlastName();
        $homePhone = $userObj->gethomePhone();
        $cellPhone = $userObj->getcellPhone();


 //       var_dump($userObj);

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


        $updateInfo = "UPDATE user SET firstName= '$firstName', lastName= '$lastName', homePhone= '$homePhone', cellPhone= '$cellPhone' WHERE fuId = '$fuId'";
        mysql_query($updateInfo);
  }
*/
?>
