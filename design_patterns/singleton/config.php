<?php
require_once 'singleton.php';
class config extends Singleton{
	private $hasmap=[];
	public function getValue($key){
		return $this->hashmap[$key];
	}
	public function setValue($key, $value){
		$this->hashmap[$key]=$value;
	}
}
