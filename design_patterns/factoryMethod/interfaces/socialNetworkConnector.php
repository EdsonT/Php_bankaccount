<?php
interface SocialNetworkConnector{
	public function logIn();
	public function logOut();
	public function createPost($content);
}
