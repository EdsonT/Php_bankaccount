<?php
require_once 'paystrategy.php';

class payByPayPal implements payStrategy{
	private $payPalEmail='';
	public function pay($amount =0){
		echo "<br/>...Paying ".$amount." using PayPal<br/>";
	}

}
