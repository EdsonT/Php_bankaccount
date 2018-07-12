<?php
require_once 'logger.php';
class BankAccount{
	use Logger;
	private $accountNumber;
	function __construct($accountNumber){
		$this->accountNumber=$accountNumber;
		$this->log("A new $accountNumber bank account created");
	}


}


