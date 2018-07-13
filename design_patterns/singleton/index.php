<?php
require_once 'logger.php';
require_once 'config.php';
Logger::log('started!');

$l1 = logger::getInstance();
$l2 = logger::getInstance();
if($l1===$l2){
	Logger::log("Logger has a single instance");
}else{
	Logger::log ("Logger are different.");
}
$config1=Config::getInstance();
$login="Testing Login!!!";
$password="Testing Password";
$config1->setValue("login",$login);
$config1->setValue("password",$password);

$config2= Config::getInstance();
if($login == $config2->getValue("login")&&$password==$config2->getValue("password")){
	Logger::log("Config singleton also works fin");
}
Logger::log("Finished");

