<?php

include 'fbInic.php';


$helper= $fb->getRedirectLoginHelper();
try{



  $accessToken = $helper->getAccessToken(); 

}catch ( Facebook \ Exceptions \ FacebookResponseException $e ){
  echo 'Graph devolvió un error:' .$e -> getMessage ();
  exit; }
 catch ( Facebook \ Exceptions \ FacebookSDKException $e ) {
   echo 'Facebook SDK devolvió un error:' . $e-> getMessage();

   exit; }
  


if (isset($accessToken)) 
  { 


$_SESSION['fb_access_token'] =(String) $accessToken ;

}


?>