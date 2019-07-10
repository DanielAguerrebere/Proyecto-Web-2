<?php
    require_once ('vendor/autoload.php');
    require_once ('config/db.php');
    require_once ('lib/pdo_db.php');
    require_once ('models/Customer.php');

    \Stripe\Stripe::setApiKey('sk_test_RzCDWiZFsktRVMO4Iqp7wE8X00qnHwM3Lm');

    // Sanitize POST array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

//Charge Customer
$charge = \Stripe\Charge::create(array(
   "amount" => 2000,
   "currency" => "mxn",
   "description" => "COST",
    "customer" => $customer->id
));

// Instantiate Customer
$customer = new Customer();

// Customer Data
$customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
];

// Add Customer to DB
$customer->addCustomer($customerData);

header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);