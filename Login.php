<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
  
  
$clientID = ' ';
$clientSecret = ' ';
$redirectUri = 'https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/Login.php';
   


$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
  


if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']); 
   
 
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  $login= "Welcome!". $name; 
  header("Location: HomePage.php?username=".$name); 
 
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


    <link rel="stylesheet" type="text/css" href="styles.css">
	
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

    
    
    
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src='login.js'></script>

    </div>
    </div>
    </center>
</body>
</html> 
