<?php
require_once 'interfaces/linkedinConnector.php';
class LinkedinPoster extends SocialNetworkFactory{
	private $email, $password;
	public function __construct($email,$password){
		$this->email=$email;
		$this->password=$password;
	}
	public function getSocialNetwork():SocialNetworkConnector{
		return new LinkedinConnector($this->email,$this->password);
	}
}
