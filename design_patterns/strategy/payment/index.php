<?php
require_once 'shoppingcart.php';
require_once 'strategies/payother.php';
$cart= new shoppingCart(400);
$cart->payAmount();

$cart = new shoppingCart(999);
$cart->payAmount();

#$cart = new payOther();
#$cart->payot();
