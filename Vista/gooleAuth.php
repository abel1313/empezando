<?php

class GoogleAuth{

	protected $client;

public function __construct(Google_Client $googleClient==null){

$this->$client=$googleClient;
if($this->$client){

$this->$client->setClientID("129289663385-m2424rv2dpun757qh829o87onng75o4u.apps.googleusercontent.com
");
$this->$client->setClientSecret("1Au6k86etM010VutMsGkIBsy");
$this->$client->setReditectUri("http://localhost/Empresa/Home.php");
$this->$client->setScopes("email");


}

public function isLoggedId(){
	return isset($_SESSION['acces_token'])
}
public function getAuthUrl(){

	return $this->client->createAuthUrl();
}

}

}


?>