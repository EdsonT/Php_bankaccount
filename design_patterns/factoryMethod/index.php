<?php
require_once 'classes/socialNetworkFactory.php';
require_once 'classes/facebookPoster.php';
require_once 'classes/linkedinPoster.php';

function clientCode(SocialNetworkFactory $creator){
	$creator->Post("Hello world!");
	$creator->Post("I had a large qweqwewqe!");
}
echo "<br> Testing ConcreteCreator1: <br>";
clientCode(new linkedinPoster("Jhon_smith","123455"));
echo "<br> Testing ConcreteCreator2: <br>";
clientCode(new FacebookPoster("Jhon_smith@gmail.com","7777"));

