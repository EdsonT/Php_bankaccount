<?php
require_once 'interfaces/facebookConnector.php';
class FacebookPoster extends SocialNetworkFactory{
	private $login, $password;

	public function __construct($login, $password){
		$this->login=$login;
		$this->password=$password;
	}
	public function getSocialNetwork():SocialNetworkConnector{
		return new FacebookConnector($this->login,$this->password);
	}

}
