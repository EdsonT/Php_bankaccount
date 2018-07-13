<?php

class Singleton{

	private static $instances = array();
	//singleton constructors are always protected
	protected function __construct(){
		
	}
	protected function __wakeup(){
		throw new \Exception("Cannot unserialize singleton");
	}
	public static function getInstance()
	{
		$subclass = get_called_class();
		if(!isset(self::$instances[$subclass])){
			self::$instances [$subclass] = new static;
	
		}
		return self::$instances[$subclass];
	
	}
}
