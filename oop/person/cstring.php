<?php
class CSstring{
	private $str='';
	private $APIs= array('strlen','strtoupper','strtolower');

	public function __construct($str){
		$this->str=$str;
	}
	public function __call($method, $args){
		if(in_array($method, $this->APIs)){
	
			var_dump($args);
			array_unshift($args, $this->str);// This method array_unshift
			var_dump($args);
			return call_user_func_array($method, $args);
		}
		else{
			die('Error: call to unsupported method: '.$method);
		}
	
	}


}
$str=new CSstring('This is a string object');
echo $str->strlen('q').'
<br/>';
echo $str->strtoupper().'
<br/>';
echo $str->strtolower().'
<br/>';
echo $str->len(); // Error: call to unsupported method: len
