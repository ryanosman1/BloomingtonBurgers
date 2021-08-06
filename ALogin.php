<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
  

$clientID = '441437457035-dlfjrmo9q2fl4i92k0bjf3c12ghokrlh.apps.googleusercontent.com';
$clientSecret = 'J__coF2ilN29NnEinbpsw2ka';
$redirectUri = 'https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/ALogin.php';
   
// create Client Request to access Google AP
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
  
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']); 
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  $login= "Welcome!". $name; 
  header("Location: AAboutUs.php?username=".$name); 
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  $login= "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?> 


<!DOCTYPE html>  
<html lang="en-us">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="officialstyles.css">
    <title>Bloom Burgers</title>
</head>
<body>
    
<center>
    
    <div class="signup_page">
    <br>
    <br>
    

    <div class="signup_form">
 
    <h4><?= $login; ?> </h4>

    
    <div class ='user'></div>
    <div class="g-signin2" data-width= '700' data-height='300' data-longtitle='true'data-theme='dark'data-onsuccess="onSignIn"></div>
    <br>
    <br>
    
    
    
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src='login.js'></script>

    </div>
    </div>
    </center>
</body>
</html> 
