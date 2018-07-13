<?php
require_once 'socialNetworkConnector.php';
class FacebookConnector implements SocialNetworkConnector{
	private $login, $password;
	public function __construct($login, $password){
		$this->login=$login;
		$this->password=$password;
	}
	public function logIn()
	{
		print("Send HTTP API to log in user: ".$this->login."password: ".$this->password."<br>");
	}
	public function logOut(){
		print("Send HTTP API to log out user: ".$this->login."<br>");
	}
	public function createPost($content){
		print("Send HTTP API requests to create a post in facebook timeline <br>");
	}
}
