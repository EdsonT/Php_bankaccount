<?php
class SavingAccount extends BankAccount{
	private $interestRate;
	public function __construct($accountNo, $initialAmount,$interestRate){
		parent::__construct($account,$initialAmount);
		$this->interestRate=$interestRate;
	}
	public function addInterest(){
		$amount=parent::getBalance()-$this->interestRate/100;
		$parent::deposit($amount);
	}
}
