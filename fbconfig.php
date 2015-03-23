<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
require 'functions.php';

/*
   to use the mysql database 
*/
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '453783174785722','2e9a37655514eef29c32405c000e7e47' );
// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper('http://localhost:8080/fbconfig.php' );
try {
    $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
    // When Facebook returns an error
} catch( Exception $ex ) {
    // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
    // graph api request for user data
    $request = new FacebookRequest( $session, 'GET', '/me' );
    $response = $request->execute();
    // get response
    $graphObject = $response->getGraphObject();
    $fbid = $graphObject->getProperty('id');              // To Get Facebook ID 
    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
    /* ---- Session Variables -----*/
    $_SESSION['FBID'] = $fbid;           
    $_SESSION['FULLNAME'] = $fbfullname;
    $_SESSION['EMAIL'] =  $femail;
    checkuser($fbid,$fbfullname,$femail); // To update local DB    
    console.log(5);
    /* ---- header location after session ----*/
    header("Location: index.php");
} else {
    $loginUrl = $helper->getLoginUrl();
    header("Location: ".$loginUrl);
}
?>
