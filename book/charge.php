<?php


session_start();
require_once('../vendor/autoload.php');
require_once('../GFirestore.php');
require_once('../GSubFirestore.php');

\Stripe\Stripe::setApiKey('sk_test_51HsUxmEi12Vi5stYckdLQ8EMfEm7xGbToHBzrGspvYswatezryED6UzmQDbpqxX98kqAWux4VjSYlwF4ELIGwx1900W2GxRnlM');

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

// Pass in variables from checkout page
$first_name = $POST["first_name"];
$last_name = $POST["last_name"];
$email = $POST["email"];
$token = $POST["stripeToken"];
$amount = $_SESSION["currentAmount"]*100;

$_SESSION["email"] = $email;
// Create a customer
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

// Charge customer
$charge = \Stripe\Charge::create(array(
    "amount" => $amount,
    "currency" => "MYR",
    "description" => "CleanHero Booking",
    "customer" => $customer->id
));


// Transaction data
$transactionData = [
    "id" => $charge->id,
    'customer_id' => $charge->customer,
    'product' => $charge->description,
    'amount' => (int)$charge->amount/100,
    'currency' => $charge->currency,
    'status' => $charge->status
];

// Create referecne to Payment collection
$payment = new Firestore("Payment");

// create document for the transaction
$payment->createDocument($transactionData["id"],$transactionData);

// redirect to success page
header('Location: success.php?tid='.$charge->id);



?>