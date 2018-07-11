<?php
class Person{

	private  $properties;
	public function __get($propertyName){
		#echo "Attempted to read a non-existing property: $propertyName";
		if(array_key_exists($propertyName,$properties)){
			return $this->properties[$propertyName];
		}
	}
	public function __set($propertyName, $propertyValue){
		#echo "Attempted to write to a non-existing property: $propertyName";
		$this->properties[$propertyName]=$propertyValue;
	}

}

$obj= new Person();
$obj->lasttName='Jhon';
$obj->firstName='Doe';


var_dump($obj);
