<?php 
class BankAccount{
	#Properties
	private $accountNumber;
	private $totalBalance;
	public function __construct($accountNo, $initialAmount){
		$this->accountNumber=$accountNo;
		$this->totalBalance=$initialAmount;
	}

	public function deposit($amount){
		
		$this->totalBalance+=$amount;
	}
	public function withdraw($amount){
		if($amount>$this->totalBalance)
			die("There is not enough funds!");	
		$this->totalBalance-=$amount;
	}
	public function getBalance(){
		return $this->totalBalance;
	}
	public function getAccountNumber(){
		return $this->accountNumber;
	}
	public function setAccountNumber($accountNumber){
		$this->accountNumber=$accountNumber;
	}

	
}

$account = new BankAccount('777777',9999999);

$account->setAccountNumber('66666666');
echo sprintf("Bank account # %s<br/>",$account->getAccountNumber());

echo sprintf("Deposit $2000 to the bank account.<br/>");
$account->deposit(2000);
echo sprintf("Total Balance %0.2f<br/>",$account->getBalance());

echo sprintf("Whitdraw $100 from the bank account.<br/>");
$account->withdraw(100);
echo sprintf("Total balance %0.2f<br/>",$account->getBalance());

echo sprintf("Withdraw $2000 fromthe bank account.<br/>");
$account->withdraw(2000);
?>
