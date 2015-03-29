<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
require 'functions.php';
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
$helper = new FacebookRedirectLoginHelper('http://localhost:8888/fbconfig.php' );
try {
    $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
    // When Facebook returns an error
} catch( Exception $ex ) {
    // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
    /*
     * Getting user data and setting session variables.
     */
    $request = new FacebookRequest( $session, 'GET', '/me' );
    $response = $request->execute();
    // get response
    $graphObject = $response->getGraphObject();
    $fbid = $graphObject->getProperty('id');
    $fbfullname = $graphObject->getProperty('name');
    $femail = $graphObject->getProperty('email');
    /* ---- Session Variables -----*/
    $_SESSION['FBID'] = $fbid;           
    $_SESSION['FULLNAME'] = $fbfullname;
    $_SESSION['EMAIL'] =  $femail;

    /*
     * Requesting friends list (only those using the app).
     * TODO: possibly call this inside the checkuser function so that it does not get
     *      called for users in our database.
     */
    $taggable = (new FacebookRequest( $session, 'GET', '/me/friends' ))->execute()->getGraphObject()->asArray();
    $friends_list = array(); // array holding ids of friends using the Merosaaman app.
    foreach( $taggable['data'] as $value){
        array_push($friends_list, $value->id);
    }

    /*
     * Function to add friends to the database.
     */
    checkuser($fbid,$fbfullname,$femail,$friends_list); // To update local DB    
    
    header("Location: index.php");
} else {
    $loginUrl = $helper->getLoginUrl( array(
        'scope'=>'user_friends'));
    header("Location: ".$loginUrl);
}
?>
