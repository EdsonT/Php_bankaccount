<?php
require_once 'paystrategy.php';

class payByCC implements payStrategy{
	private $ccNum='';
	private $ccType='';
	private $cvvNum='';
	private $ccExpMonth='';
	private $ccExpYear='';

	public function pay($amount){
		echo "<br/>...Paying ".$amount." using credit card<br/>";
	}
}
