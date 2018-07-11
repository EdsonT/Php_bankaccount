<?php
class CheckingAccount extends BankAccount{
	private $fee;
	public function __construct($accountNo,$initialAmmount,$fee){
		parent::__construct($accountNo,$initialAmmount);
		$this->fee=$fee;
	}
	public function deductFee(){
		parent::withdraw($fee);
	}
}
