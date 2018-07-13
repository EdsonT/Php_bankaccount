<?php
require_once 'paystrategy.php';
#this class was only to test that the interface forces you to implement its methods
class payOther{// implements payStrategy{
	public $prop1='testing';
	public function payot(){
		echo $this->prop1;
	}
}
