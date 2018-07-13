<?php
abstract class SocialNetworkFactory{
	public abstract function getSocialNetwork():SocialNetworkConnector;
	public function post($content)
	{
		$network=$this->getSocialNetwork();

		$network->logIn();
		$network->createPost($content);
		$network->logOut();
	}


}
