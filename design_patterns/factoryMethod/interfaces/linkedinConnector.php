<?php
require_once 'socialNetworkConnector.php';
class LinkedinConnector implements SocialNetworkConnector{
	private $email, $password;
	public function __construct($email,$password){
		$this->email=$email;
		$this->password=$password;
	}
	public function logIn()
	{
		print("Send HTTP API request to log in user: ".$this->email." password:".$this->password."<br>");
	}
	public function logOut()
	{
		print("Send HTTP API request to log out user: ".$this->email."<br>");
	}
	public function createPost($content){
		print("Send HTTP API requests to create a post in linkedin timeline <br>");
	}
}
