<?php
include_once __DIR__ . '/classes/CreditCard.php';
include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/Unregistraded.php';
include_once __DIR__ . '/classes/Registered.php';
include_once __DIR__ . '/classes/Products.php';
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Games.php';
include_once __DIR__ . '/classes/Kennels.php';
include_once __DIR__ . '/classes/Leashes.php';

$username		= $_POST['username']		?? '';
$password		= $_POST['password']		?? '';

$name				= $_POST['name']			?? '';
$address			= $_POST['address']		?? '';

$number			= $_POST['number']		?? '';
$expiryYear		= $_POST['expiryYear']	?? '';
$expiryMonth	= $_POST['expiryMonth']	?? '';

$creditCard		= new CreditCard($number, $expiryYear, $expiryMonth);

if ($username && $password) {
	$user = new Registered($username, $password);
} else {
	$user = new Unregistraded($name, $address, $creditCard);
}