<?php

session_start (); 
include 'src/Facebook/autoload.php';

$fb = new Facebook\Facebook ([ 'app_id' => '631902454305542' , 
'app_secret' => '0964c3a2491904ac312286b2f8bcf96a' , 
'default_graph_version' => 'v3.2' , ]);  
     

?>
