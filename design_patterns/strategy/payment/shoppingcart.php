<?php
require_once 'strategies/paybycc.php';
require_once 'strategies/paybypaypal.php';

class shoppingCart{
	public $amount=0;
	public function __construct($amount=0){
		$this->amount=$amount;
	}
	public function getAmount(){
		return $this->amount;
	}
	public function setAmount($amount=0){
		$this->amount=$amount;
	}
	public function payAmount(){
		if($this->amount>=500){
			$payment = new payByCC();
		}else{
			$payment = new payByPayPal();
		}
		$payment->pay($this->amount);
	}

}
